
let button = document.getElementById('button');
let close = document.querySelector('.close');

let opennav = document.querySelector('.mobile-nav');
let navlist = document.querySelector('.nav-content li');

button.addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

close.addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

opennav.addEventListener("click", function() {
	navlist.style.display = "grid";
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

