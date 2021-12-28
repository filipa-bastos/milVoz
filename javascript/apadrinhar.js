//agrupar na varivel animais todas as fotografias de animais
var animais = document.getElementsByClassName('animal');

//ao clicar num animal selecionar esse mesmo animal 
for(var j = 0; j < animais.length; j++) {
    animais[j].addEventListener("click", function(){
        console.log(this)
        formApadrinharDisplay.style.display = "block";
    });
}



//MODAL
// Get the modal
var formApadrinharDisplay = document.getElementById("formApadrinharDisplay");

// Get the button that opens the modal - BOTAO avaliar de necessario
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal   - BOTAO avaliar de necessario
//btn.onclick = function() {
 // modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    formApadrinharDisplay.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == formApadrinharDisplay) {
    formApadrinharDisplay.style.display = "none";
  }
}