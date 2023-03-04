window.onscroll = function () {
  scrollFunction();
}

var stickyNav = document.getElementById("sticky_navbar");
var sticky = stickyNav.offsetTop;

function scrollFunction() {
  if (window.pageYOffset >= sticky) {
    stickyNav.classList.add("stickyTop");
  } else {
    stickyNav.classList.remove("stickyTop");
  }
}