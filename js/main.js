// JavaScript Document
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
if (window.matchMedia("(min-width: 991px)").matches) {
window.onscroll = function() {scrollFunction()};
}

function scrollFunction() {

  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("logo").style.height="50px";
    document.getElementById("logo").style.width="50px";

  } else {
    document.getElementById("logo").style.height="100px";
    document.getElementById("logo").style.width="100px";
  }
}

/*
window.onload = function() {
	var menu = document.getElementById("primaryNav");
	console.log(menu);
	menu.classList.add("navbar-nav");
	menu.classList.add("mr-auto");

	for (let i = 0; i < menu.children.length; i++) {
  		menu.children[i].classList.add("nav-item");
}		
	for (let i = 0; i < menu.getElementsByTagName('a').length; i++) {
  		console.log(menu.getElementsByTagName('a').length);
		numLinks = menu.getElementsByTagName('a');
		numLinks[i].classList.add("nav-link");
}		
}*/