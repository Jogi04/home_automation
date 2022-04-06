ajax_load_file('/php/rollladen.php');

document.getElementById('dashboard-menu-item').addEventListener('click', function() {
  ajax_load_file('/php/dashboard.php');
});

document.getElementById('rollladen-menu-item').addEventListener('click', function() {
  ajax_load_file('/php/rollladen.php');
});

document.getElementById('settings-menu-item').addEventListener('click', function() {
  ajax_load_file('/php/settings.php');
});

function ajax_load_file(file){
  var xhr = new XMLHttpRequest();
  xhr.open('GET', file, true);
  xhr.onload = function () {
    if (this.status == 200) {
      document.getElementById('main-box').innerHTML = this.responseText;
    }
  }
  xhr.send();
}
