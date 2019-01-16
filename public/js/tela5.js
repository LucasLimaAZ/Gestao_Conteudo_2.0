var produtos = [];
var descricao = [];
var fotos = [];

function addProdutos() {
    boxvalue = document.getElementById('produto').value;
    produtos.push(boxvalue);
    console.log(produtos);
    document.getElementById('mostraProduto').innerHTML = produtos;
}

function removeProdutos(){
    produtos.pop();
    document.getElementById('mostraProduto').innerHTML = produtos;
}

function addDescricao() {
    boxvalue = document.getElementById('descricao').value;
    descricao.push(boxvalue);
    console.log(descricao);
    document.getElementById('mostraDescricao').innerHTML = descricao;
}

function removeDescricao(){
    descricao.pop();
    document.getElementById('mostraDescricao').innerHTML = descricao;
}

function addImagem(){
    boxvalue = document.getElementById('fotos').value;
    fotos.push(boxvalue);
    console.log(fotos);
    document.getElementById('mostraFotos').innerHTML = fotos;
}