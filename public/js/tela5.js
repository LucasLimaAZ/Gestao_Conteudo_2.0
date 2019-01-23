var produtos = [];
var descricao = [];
var produtos = [];
var fotos = [];
fotos = document.getElementById('produtosFotos').value;

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

    document.getElementById('mostraProdutos').innerHTML = 'Fotos enviadas com sucesso!';

}

