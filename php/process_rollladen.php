<?php
header("Location: /");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
      send_client_message();
      update_json_file();

      function send_client_message(){
        $port = 80;
        $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("could not create socket\n");
        $result = socket_connect($socket, $_POST['ip'], $port) or die("could not connect to server\n");
        socket_write($socket, $_POST['state'], strlen($_POST['state'])) or die("could not send data to server\n");
        socket_close($socket);
      }

      function update_json_file(){
        $json_file = fopen('rollladen.json', 'r');
        $data = json_decode(fread($json_file, filesize('rollladen.json')));
        fclose($json_file);
        foreach ($data as $item) {
          if ($item->room == $_POST['room']) {
            $item->state = $_POST['state'];
          }
        }
        $json_file = fopen('rollladen.json', 'w');
        fwrite($json_file, json_encode($data, JSON_PRETTY_PRINT));
        fclose($json_file);
      }

      ?>
  </body>
</html>
