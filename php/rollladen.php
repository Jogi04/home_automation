<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
    <div class="main-box-card-container">
      <div class="main-box-card">
        <div class="card-header">
          <span class="title">Rollladen</span>
          <span><img class="card-header-edit-icon" src="/images/edit.png"></span>
        </div>
        <div class="card-content">
        <?php
        $json_file = fopen('rollladen.json', 'r');
        $json_data = json_decode(fread($json_file, filesize('rollladen.json')));
        fclose($json_file);
        foreach ($json_data as $item) {
          echo '<div class="card-content-item">';
          echo $item->room;
          echo '<div class="button-group">';
          echo '<form action="/php/process_rollladen.php" method="POST">';
          echo '<input type="hidden" name="room" value="' . $item->room . '"/>';
          echo '<input type="hidden" name="ip" value="' . $item->ip . '"/>';
          echo '<input type="hidden" name="state" value="0"/>';
          echo '<button class="button" type="submit">Hoch</button>';
          echo '</form>';
          echo '<form action="/php/process_rollladen.php" method="POST">';
          echo '<input type="hidden" name="room" value="' . $item->room . '"/>';
          echo '<input type="hidden" name="ip" value="' . $item->ip . '"/>';
          echo '<input type="hidden" name="state" value="1"/>';
          echo '<button class="button" type="submit">Runter</button>';
          echo '</form>';
          echo '<form action="/php/process_rollladen.php" method="POST">';
          echo '<input type="hidden" name="room" value="' . $item->room . '"/>';
          echo '<input type="hidden" name="ip" value="' . $item->ip . '"/>';
          echo '<input type="hidden" name="state" value="2"/>';
          echo '<button class="button" type="submit">Stopp</button>';
          echo '</form>';
          echo '</div>';
          echo '</div>';
        }
        ?>
        </div>
      </div>
    </div>
  </body>
</html>
