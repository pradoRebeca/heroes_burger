const limparElementos = (elemento) => {
    while(elemento.firstChild) {
        elemento.removeChild(elemento.lastChild);
    }
}

const criarItemJogo = (info) => {
    //Seleciona o container que vai ser mudado
    const container = document.querySelector("#secaoCardapio")
    //Criando uma nova div
    const novaDiv = document.createElement("div")
	novaDiv.classList.add('itemCardapio')
   	novaDiv.innerHTML =
	`
    <div class="imgCardapio">
        <img src="admin/arquivos/${info.imagens}" alt="">
        </div>
            <p class="nomeHamburguer"> ${info.nome} </p>
            <p class="descricaoHamburguer"> ${info.descricao.toUpperCase()} </p>
        <div class="saibaHamburguer"> SAIBA MAIS </div>
        <div class="precoHamburguer"> ${info.preco}</div>
    </div>
	`
    container.appendChild(novaDiv);
    
}

const pesquisar = async (evento) => {
	if(evento.key === "Enter" || evento.type === "click"){
        //limparElementos(document.querySelector("#secaoCardapio"));
    
		const textInput = document.getElementById('pesquisa').value;
       
        const url = `http://localhost/ds2t20212/heroes_burger/admin/api/produtos?nome=${textInput}`
	   const imagensResponse = await fetch(url);
		const imagens = await imagensResponse.json();
         imagens.map(criarItemJogo)	

    } 
}

const carregarPaginas = async () => {
    const textInput = document.getElementById('pesquisa').value;
    console.log(textInput)
        const url = "http://localhost/ds2t20212/heroes_burger/admin/api/produtos?nome="+textInput
		const response = await fetch(url);
		const imagens = await response.json();
		imagens.map(criarItemJogo);
}


//document.addEventListener("DOMContentLoaded", carregarPaginas);
document.querySelector("#pesquisa").addEventListener('keypress', pesquisar);
document.querySelector("#iconePesquisa").addEventListener('click', carregarPaginas);