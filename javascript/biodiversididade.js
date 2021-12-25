let span = document.getElementsByTagName('span');
let product = document.getElementsByClassName('product');
let anfibios = document.getElementsByClassName('anfibio')
let product_page = Math.ceil(product.length/4);
let l = 0;
let movePer = 25.34;
//tamanho máximo que a linha dos cartoes pode percorrer
let maxMoveMamiferos = 50;
let maxMoveAnfibios = 153;



// mobile_view	
let mob_view = window.matchMedia("(max-width: 768px)");
	if (mob_view.matches)
	 {
	 	movePer = 50.36;
	 	maxMove = 504;
	 }

	 //funçoes que movem a linda dos MAMIFEROS

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
		l = l + movePer;
		if (anfibios == 1){l = 0; }
		for(const j of anfibios)
		{
			if (l > maxMoveAnfibios){l = l - movePer;}
			j.style.left = '-' + l + '%';
		}

	}
	let left_mover_anfibios = ()=>{
		l = l - movePer;
		if (l<=0){l = 0;}
		for(const j of anfibios){
			if (product_page>1){
				j.style.left = '-' + l + '%';
			}
		}
	}





	span[1].onclick = ()=>{right_mover_mamiferos();}
	span[0].onclick = ()=>{left_mover_mamiferos();}

	span[3].onclick = ()=>{right_mover_anfibios();}
	span[2].onclick = ()=>{left_mover_anfibios();}



	