(function() {
	"use strict";
	console.log("Animations Loaded");

	var logoanimation = document.querySelector("#logo");
	var logoheader = document.querySelector("#logoheader");


	function init (){
		TweenMax.from (logoanimation, 2, {delay:1, opacity:0});
		TweenMax.from (logoheader, 2, {opacity:0});
	}

	window.addEventListener('load',init,false);




 })();