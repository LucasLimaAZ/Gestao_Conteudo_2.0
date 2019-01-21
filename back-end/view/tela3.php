<script>
    	function TeclaBloq(Campo,teclapres){
var tecla = teclapres.keyCode;

if (tecla == 39)

{

window.alert("não é permitido o caracter");

Campo.focus();

return false;

}

return tecla;

}
</script>
<section class="site-content site-section-mini themed-background-muted border-bottom col-lg-8 marginTop marginBottom5 paddingAll">
    <form action="tela4.php" method="post">
        <div class="col-md-6">
            <label for="titulo">Título: </label>
            <input class="form-control" type="text" name="titulo" >
        </div>
        <div class="col-md-6">
            <label for="subtitulo">Subtítulo: </label>
            <input class="form-control" type="text" name="subtitulo" >
        </div>
        <div class="col-md-6 paddingTop2">
            <label for="tags">Palavras Chave: </label>
            <input class="form-control" type="text" name="tags" placeholder="Ex: Empresa, carro, roupa, hospital.">
        </div>
        <div class="col-md-6 paddingTop2">
            <label for="descricao">Descrição: </label>
            <input type="text" class="form-control" placeholder="Nos dê uma breve descrição do seu site." name="descricao">
        </div>
        <div class="col-md-6 paddingTop2">
            <label class="col-md-4 paddingTop7">Envie sua logo: </label>
            <label class="logo col-md-8"> <img src="public/img/upload.png" style="icon">
            <input type="file" id="File"   size="60" >
            </label> 
        </div>
        <div class="col-md-6 paddingTop2">
            <div class="col-md-4">
                <label for="cor1">Cor1: </label>
                <input class="form-control" type="color" name="cor1" value="#ff0000">
            </div>
            <div class="col-md-4">
                <label for="cor2">Cor2: </label>
                <input class="form-control" type="color" name="cor2" value="#0000ff">
            </div>
            <div class="col-md-4">
                <label for="cor3">Cor3: </label>
                <input class="form-control" type="color" name="cor3" value="#ffff00">
            </div>
        </div>
        <div class="col-md-12 paddingTop2"><span style="text-align:center;" class="help-block">Informações sobre o seu negócio...</span></div>
        <div class="col-md-6 paddingTop2">
            <textarea class="form-control" rows="5"  onkeyPress="return TeclaBloq(this,event);" name="sobre" placeholder="Conte-nos sobre a sua empresa..."></textarea>
        </div>
        <div class="col-md-6 paddingTop2">  
            <textarea class="form-control" rows="5"  onkeyPress="return TeclaBloq(this,event);" name="informacoes" placeholder="Informações importantes..."></textarea>
        </div>
        <div class="col-md-6">
            <label class="col-md-4 paddingTop7">Envie fotos: </label>
            <label class="logo col-md-8"> <img src="public/img/upload.png" style="icon">
            <input type="file" id="File"   size="60" >
            </label>
            <input type="file" class="logo">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4 paddingTop2">
            <input type="submit" value="Próximo"  class="form-control botaoProximo">
        </div>
</section>