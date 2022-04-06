//document.getElementById('nav-menu-title-icon').onclick = function() {collapse_side_navbar()}
document.getElementById('nav-menu-title-icon').addEventListener('click', collapse_side_navbar);

function collapse_side_navbar() {
  document.getElementById('side-navbar').classList.toggle('small');
  document.getElementById('nav-menu-title-text').classList.toggle('hide');
  document.getElementById('top-bar').classList.toggle('to-left');
  document.getElementById('main-box').classList.toggle('to-left');
  var menu_item_title = document.getElementsByClassName('nav-menu-item-title');
  for (var i=0; i < menu_item_title.length; i++){
    menu_item_title[i].classList.toggle('hide');
  }
}
