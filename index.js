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


let bg= document.getElementById("bg");
let pinheiro = document.getElementById("pinheiro");
let monte = document.getElementById("monte");
let arvore1 = document.getElementById("arvore1");
let arvore2 = document.getElementById("arvore2");
let frentepinheiro = document.getElementById("frentepinheiro");
let prado = document.getElementById("prado");
let veado = document.getElementById("veado");
let arbusto = document.getElementById("arbusto");

window.addEventListener ('scroll', function(){
	var value = window.scrollY;

	bg.style.top = value * 0.5 + 'px';
	pinheiro.style.top = -value * 0.5 +'px';
	monte.style.top = -value *0.5 +'px';
	arvore1.style.top = -value * 0.15 + 'px';
	arvore2.style.top = -value * 0.15 + 'px';
	frentepinheiro.style.top = value * 0.15 + 'px';
	prado.style.top = value * 0.15 + 'px';
	veado.style.top = value * 0.15 + 'px';
	arbusto.style.top = value * 0.05 + 'px';
})
	
