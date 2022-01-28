let span = document.getElementsByTagName('span');
let anfibios = document.getElementsByClassName('anfibio');
let mamiferos = document.getElementsByClassName('mamifero');
let l = 0;
//movimento em função da largura dos cartoes
let movimento = anfibios[0].offsetWidth ;

//============MAMIFEROS 
//função para mover para a direita
function moveDirMamiferos(){
    l = l + movimento;
    for(const m of mamiferos){
       //limite do ultimo item mostrado em função da seta (span à direita)
        if(mamiferos[mamiferos.length-1].offsetLeft + mamiferos[mamiferos.length-1].offsetWidth > span[2].offsetLeft){
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

// =============ANFIBIOS
//função para mover para a direita
function moveDirAnfibios(){
    l = l + movimento;
    for(const m of anfibios){
       //limite do ultimo item mostrado em função da seta (span à direita)
        if(anfibios[anfibios.length-1].offsetLeft + anfibios[anfibios.length-1].offsetWidth > span[4].offsetLeft){
            m.style.left = '-' + l + 'px';
        }        
    }
}
function moveEsqAnfibios(){
    l = l - movimento;
    for(const m of anfibios){ 
            m.style.left = '-' + l + 'px';        
    }
}


//primeiro span diz respeito ao titulo
span[3].onclick  = ()=>{moveEsqAnfibios();}
span[4].onclick  = ()=>{moveDirAnfibios();}


//primeiro span diz respeito ao titulo
span[1].onclick  = ()=>{moveEsqMamiferos();}
span[2].onclick  = ()=>{moveDirMamiferos();}






