const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;

menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});


function castParallax() {

	var opThresh = 350;
	var opFactor = 750;

	window.addEventListener("scroll", function(event){

		var top = this.window.pageYOffset;
		var layers = document.getElementsByClassName("parallax");
		var layer, speed, yPos;
		
		for (var i = 0; i < layers.length; i++) {
			layer = layers[i];
			speed = layer.getAttribute('data-speed');
			var yPos = -(top * speed / 100);
			layer.setAttribute('style', 'transform: translate3d(0px, ' + yPos + 'px, 5px)');

		}
	});
}

document.body.onload = castParallax();
