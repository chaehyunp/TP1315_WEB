

var hamburger = document.getElementById('hamburger');
var navbox = document.getElementById('navbox');

hamburger.addEventListener('click', function() {
  if (navbox.classList.contains('open')) {
    navbox.classList.add('close');
    // navbox.remove('open');
  } else {
    navbox.classList.add('open');
    // navbox.remove('close');
  }
});