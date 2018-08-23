var menuButton = document.querySelector(".c-hamburger");
var cross = document.querySelector(".cross");
var navTop = document.querySelector(".top-menu");
var glow = document.querySelectorAll(".glow");


function switchIcon () {
	if (menuButton.classList.contains("is-active")) {
		menuButton.classList.remove("is-active");
	}
}

var filterFix = document.querySelector(".filter-fix");

function addFilter(){
	filterFix.style.opacity ="0.8";
	filterFix.style.zIndex = "10000";
}

function removeFilter(){
	filterFix.style.opacity ="0.0";
	filterFix.style.zIndex = "0";
}

function gloww(i){
		glow[i].style.display ="block";
}

function glowwOut(i){
		glow[i].style.display ="none";
	
}
console.log(glow[3]);


