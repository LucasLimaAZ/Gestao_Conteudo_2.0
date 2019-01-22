var logo = [];
var fotos = [];

function TeclaBloq(Campo,teclapres){

    var tecla = teclapres.keyCode;
    if (tecla == 39){
    window.alert("não é permitido o caracter");
    Campo.focus();
    return false;
    }
    return tecla;

}

function addLogo(){

    document.getElementById('mostraLogo').innerHTML = 'Logo enviada com sucesso!';

}

function addFotos(){

    document.getElementById('mostraFotos').innerHTML = 'Fotos enviadas com sucesso!';

}