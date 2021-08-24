
document.addEventListener("DOMContentLoaded", function(event) {
	console.log("DOM loaded");
	

window.addEventListener("load", function(e) {
	console.log("window loaded");

	const tl = gsap.timeline()

	tl.to(".text", {y: '0%', duration: 1, stagger: 1})

}, false);	
});
