const limparElementos = async (elemento) => {
    while(elemento.firstChild) {
        elemento.removeChild(elemento.lastChild);
    }
}

const criarItem =(produto) => {
    //Seleciona o container que vai ser mudado
    const container = document.querySelector("#secaoCardapio")
    //Criando uma nova div
    const novaDiv = document.createElement("div")
	novaDiv.classList.add('itemCardapio')
   	novaDiv.innerHTML =
	`
    <div class="imgCardapio">
        <img src="admin/arquivos/${produto.imagens}" alt="">
        </div>
            <p class="nomeHamburguer"> ${produto.nome} </p>
            <p class="descricaoHamburguer"> ${produto.descricao.toUpperCase()} </p>
        <div class="saibaHamburguer"> SAIBA MAIS </div>
        <div class="precoHamburguer"> ${produto.preco}</div>
    </div>
	`
    container.appendChild(novaDiv);
}

const exibirCategoria = (categoria) =>{
	const container = document.querySelector("#secaoIconeMenu")
    const novaUl = document.createElement("ul")
	novaUl.classList.add('secaoIconeMenuUl')

   	novaUl.innerHTML =
	`
    <li class="secaoIconeMenuli" data-idcategoria="${categoria.id}"> ${categoria.nome} </li>
	`
    container.appendChild(novaUl);
}

const pesquisar = async (evento) => {
	if(evento.key === "Enter" || evento.type === "click"){
        limparElementos(document.querySelector("#secaoCardapio"));
		const textInput = document.getElementById('pesquisa').value;
		console.log(textInput)
		const url = `http://localhost/ds2t20212/heroes_burger/admin/api/produtos?nome=${textInput}`
		const imagensResponse = await fetch(url);
        const imagens = await imagensResponse.json();
		console.log(imagens);
        const itemArray = imagens.map(criarItem)	
    } 
}

const exibirProdutosPorCategoria = async () => {
		limparElementos(document.querySelector("#secaoIconeMenu"))
		const url = `http://localhost/ds2t20212/heroes_burger/admin/api/categorias`
		const imagensResponse = await fetch(url);
        const imagens = await imagensResponse.json()
        const itemArray = imagens.map(exibirCategoria)	
}


const buscarProdutoPorCategoria = async (idcategoria) =>{
		limparElementos(document.querySelector("#secaoIconeMenu"))
		const url = `http://localhost/ds2t20212/heroes_burger/admin/api/produtos/${idcategoria}`
		const imagensResponse = await fetch(url);
		const imagens = await imagensResponse.json()
	if(imagens != 0){
		 const itemArray = imagens.map(criarItem)	
	}else{
		console.log("não tem produto")
	}
        
       
}


const exibirProdutoPorCategoria = async (idcategoria) =>{
		limparElementos(document.querySelector("#secaoIconeMenu"))
		const url = `http://localhost/ds2t20212/heroes_burger/admin/api/produtos`
		const imagensResponse = await fetch(url);
        const imagens = await imagensResponse.json()
        imagens.map(criarItem)
}

const clickCategoria = ({target}) => {
	limparElementos(document.querySelector("#secaoCardapio"))
      buscarProdutoPorCategoria(target.dataset.idcategoria)							
 }

const carregarPaginas = async () => {
    const url = `http://localhost/ds2t20212/heroes_burger/admin/api/produtos`
    const imagensResponse = await fetch(url);
    const imagens = await imagensResponse.json();
    imagens.map(criarItem);
}
	
document.addEventListener("DOMContentLoaded", carregarPaginas);
document.querySelector("#pesquisa").addEventListener('keypress', pesquisar);
document.querySelector("#iconePesquisa").addEventListener('click', pesquisar);
document.querySelector(".iconeMenu").addEventListener('mouseover', exibirProdutosPorCategoria);
document.querySelector('#secaoIconeMenu').addEventListener("click", clickCategoria);



