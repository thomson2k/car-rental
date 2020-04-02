
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

