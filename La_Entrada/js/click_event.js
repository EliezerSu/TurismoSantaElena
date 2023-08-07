document.getElementById("submenu").addEventListener("click", function(event) {
  event.preventDefault();
});
document.getElementById("submenu-2").addEventListener("click", function(event) {
  event.preventDefault();
});


var submenuItems = document.querySelectorAll('.with-submenu');
  for (var i = 0; i < submenuItems.length; i++) {
    submenuItems[i].addEventListener('click', function(e) {
      e.preventDefault();
      document.body.classList.toggle('push-content');
    });
  }
  
  var closeBtns = document.querySelectorAll('.rd-navbar-submenu-close');
  for (var i = 0; i < closeBtns.length; i++) {
    closeBtns[i].addEventListener('click', function(e) {
      e.preventDefault();
      document.body.classList.remove('push-content');
    });
  }
  