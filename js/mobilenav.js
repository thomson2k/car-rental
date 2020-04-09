
let close = document.querySelector('.close');

let opennav = document.querySelector('.mobile-nav');
let navlist = document.querySelector('.nav-content');

close.addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

opennav.addEventListener("click", function() {
	if (navlist.style.display === "none") {
		navlist.style.display = "grid";
	  } else {
		navlist.style.display = "none";
	  }
});


let lastScroll = window.pageYOffset;
let navbar = document.querySelector('#navbar');
addEventListener('scroll', function() {
	let current = window.pageYOffset;
	if (lastScroll > current) {
	  navbar.style.top = "0";
	} else {
	  navbar.style.top = "-64px";
	}
	lastScroll = current;
})

