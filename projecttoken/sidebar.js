document.addEventListener('DOMContentLoaded', function() {
    var navbar = document.querySelector('.custom-navbar');
    var icon = navbar.querySelector('.burger-icon');

    icon.addEventListener('click', function() {
      navbar.classList.toggle('active');
    });
  });