

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



//BIORESERVAS///

document.addEventListener('DOMContentLoaded', function() {
  var parent = document.querySelector('.splitview'),
      topPanel = parent.querySelector('.top'),
      handle = parent.querySelector('.handle'),
      skewHack = 0,
      delta = 0;

  // If the parent has .skewed class, set the skewHack var.
  if (parent.className.indexOf('skewed') != -1) {
      skewHack = 1000;
  }

  parent.addEventListener('mousemove', function(event) {
      // Get the delta between the mouse position and center point.
      delta = (event.clientX - window.innerWidth / 2) * 0.5;

      // Move the handle.
      handle.style.left = event.clientX + delta + 'px';

      // Adjust the top panel width.
      topPanel.style.width = event.clientX + skewHack + delta + 'px';
  });
});



//BIODIVERSIDADES/// 

let span = document.getElementsByTagName('span');
let mamiferos = document.getElementsByClassName('mamifero');
let l = 0;
//movimento em função da largura dos cartoes
let movimento = mamiferos[0].offsetWidth ;


//============MAMIFEROS 
//função para mover para a direita
function moveDirMamiferos(){
    l = l + movimento;
    for(const m of mamiferos){
       //limite do ultimo item mostrado em função da seta (span à direita)
        if(mamiferos[mamiferos.length-1].offsetLeft + mamiferos[mamiferos.length-1].offsetWidth > span[0].offsetLeft){
            m.style.left = '-' + l + 'px';
        }        
    }
}

function moveEsqMamiferos(){
    l = l - movimento;
    for(const m of mamiferos){
            m.style.left = '-' + l + 'px';        
    }
}



span[0].onclick  = ()=>{moveEsqMamiferos();}
span[1].onclick  = ()=>{moveDirMamiferos();}
