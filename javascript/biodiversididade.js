let span = document.getElementsByTagName('span');
// a variavel let product será definida como let mamiferos ainda não o foi porque queria  implementar o codigo do carrousel (que tem como referencia o nome produt )
let product = document.getElementsByClassName('product');
let anfibios = document.getElementsByClassName('anfibio');
let product_page = Math.ceil(product.length/4);
let anfibios_page = Math.ceil(anfibios.length/4);
let l = 0;
//para anfibios
let m = 0;
let movePer = 25.34;
//tamanho máximo que a linha dos cartoes pode percorrer
let maxMoveMamiferos = 50;
let maxMoveAnfibios = 125;



// mobile_view	
let mob_view = window.matchMedia("(max-width: 768px)");
	if (mob_view.matches)
	 {
	 	movePer = 50.36;
	 	maxMove = 504;
	 }

	 //funçoes que movem a linda dos MAMIFEROS (nao esquecer que estao nomeados como product)

	let right_mover_mamiferos = ()=>{
		l = l + movePer;
		if (product == 1){l = 0; }
		for(const i of product)
		{
			if (l > maxMoveMamiferos){l = l - movePer;}
			i.style.left = '-' + l + '%';
		}

	}
	let left_mover_mamiferos = ()=>{
		l = l - movePer;
		if (l<=0){l = 0;}
		for(const i of product){
			if (product_page>1){
				i.style.left = '-' + l + '%';
			}
		}
	}


	//funçoes que movem a linda dos ANFIBIOS

	let right_mover_anfibios = ()=>{
		m = m + movePer;
		if (anfibios == 1){m = 0; }
		for(const j of anfibios)
		{
			if (m > maxMoveAnfibios){m = lm - movePer;}
			j.style.left = '-' + m + '%';
		}

	}
	let left_mover_anfibios = ()=>{
		m = m - movePer;
		if (m<=0){m = 0;}
		for(const j of anfibios){
			if (anfibios_page>1){
				j.style.left = '-' + m + '%';
			}
		}
	}



//atenção se acrescentarmos spans temos de ter consciencia que são estes elementos que fazem o tabuleiro andar

	span[2].onclick = ()=>{right_mover_mamiferos();}
	span[1].onclick = ()=>{left_mover_mamiferos();}

	span[4].onclick = ()=>{right_mover_anfibios();}
	span[3].onclick = ()=>{left_mover_anfibios();}

