"use scrit" 

//const container = document.querySelector(".banner");
//container.classList.add("banner")
//const imagens = [
//	"./img/hF3.jpg",
//	"./img/marvel.png",
//	"./img/banner4.jpg",
//	"./img/banner9.jpg"
//];
//
//let img = 0;
//const slide = () => {
//	img++
//	
//	if(img >= imagens.length -1){
//	   img = 0;
//	   }
//	
//	
////		container.style.transform = `translateX(${-i * 500}px)`;
//		
//}
//
//setInterval(slide, 3000);





















const container = document.querySelector(".carrossel")
container.classList.add("carrossel")
let  status  =  "img1"

const imagem1 = () => {
	container.style.backgroundImage= "url(./img/miranha.jpg)"
	status = "img1"
}

const imagem2 = () => {
	container.style.backgroundImage= "url(./img/hf3.jpg)"
	status = "img2"
}

const imagem3 = () => {
	container.style.backgroundImage= "url(./img/banner5.jpg)"
	status = "img3"
}

const imagem4 = () => {
		container.style.backgroundImage= "url(./img/marvel.png)"
	status = "img4"
}

	
function  galeriaFotos ( )  {
	if ( status  !=  "" ) {
		if  ( status  ==  "img2" ) {
			imagem1()
		}  else  if ( status  ==  "img3" ) {
			imagem2()
		}  else if ( status  ==  "img4" ){
			imagem3()
		} else {
			imagem4()
		}
	}	
}

function slideFotos( ){
	status  =  "img4"
	setInterval(galeriaFotos, 3000)
}
//
galeriaFotos(slideFotos())

