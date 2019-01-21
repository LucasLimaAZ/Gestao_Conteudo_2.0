var produtos = [];
var descricao = [];
var fotos = [];

function addProdutos() {

    if(produtos.length<10){
    
        boxvalue = document.getElementById('produto').value;
        produtos.push(boxvalue);
        console.log(produtos);
        document.getElementById('mostraProduto').innerHTML = produtos;
        document.getElementById('produtos').value = produtos;

    }
    
}

function removeProdutos(){

    produtos.pop();
    document.getElementById('mostraProduto').innerHTML = produtos;
    document.getElementById('produtos').value = produtos;

}

function addDescricao() {

    if(descricao.length<10){
        
        boxvalue = document.getElementById('descricao').value;
        descricao.push(boxvalue);
        console.log(descricao);
        document.getElementById('mostraDescricao').innerHTML = descricao;
        document.getElementById('descricoes').value = descricao;

    }

}

function removeDescricao(){

    descricao.pop();
    document.getElementById('mostraDescricao').innerHTML = descricao;
    document.getElementById('descricoes').value = descricao;

}

function addImagem(){

    boxvalue = document.getElementById('fotos').value;
    fotos.push(boxvalue);
    console.log(fotos);
    document.getElementById('mostraImagens').innerHTML = 'Fotos enviadas com sucesso!';

}