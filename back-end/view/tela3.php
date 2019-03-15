<section class="site-content site-section-mini themed-background-muted col-md-8 marginTop marginBottom5 paddingAll">
    <form action="tela4.php" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="titulo">Título: </label>
            <input class="form-control" type="text"  maxlength="200" name="titulo" >
        </div>
        <div class="col-md-6">
            <label for="subtitulo">Subtítulo: </label>
            <input class="form-control" type="text"  maxlength="200" name="subtitulo" >
        </div>
        <div class="col-md-6 paddingTop2">
            <label for="tags">Palavras Chave: </label>
            <input class="form-control" type="text" name="tags"  maxlength="200" placeholder="Ex: Empresa, carro, roupa, hospital.">
        </div>
        <div class="col-md-6 paddingTop2">
            <label for="descricao">Descrição: </label>
            <input type="text" class="form-control"  maxlength="200" placeholder="Nos dê uma breve descrição do seu site." name="descricao">
        </div>
        <div class="col-md-6 paddingTop2">
            <label class="col-md-4 paddingTop7">Envie sua logo: </label>
            <label class="logo col-md-8"> <img src="public/img/upload.png" style="icon">
            <input type="file" onchange="addLogo();" id="logo" name="logo" size="60" >
            </label> 
            <p class="IMGsucesso" id="mostraLogo"></p>
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
            <textarea class="form-control" rows="5"   name="sobre" placeholder="Conte-nos sobre a sua empresa..."></textarea>
        </div>
        <div class="col-md-6 paddingTop2">  
            <textarea class="form-control" rows="5"   name="informacoes" placeholder="Informações importantes..."></textarea>
        </div>
        <div class="col-md-6">
            <label class="col-md-4 paddingTop7">Envie fotos: </label>
            <label class="logo col-md-8"> <img src="public/img/upload.png" style="icon">
            <input type="file" id="fotos" name="fotos[]" onchange="addFotos();" size="60" multiple>
            </label>
            <p class="IMGsucesso" id="mostraFotos"></p>
        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <button type="button" onclick="window.history.back();" class="form-control botaoProximo" value="Voltar">Voltar</button>
            </div>
            <div class="col-md-6">
                <input type="submit" value="Próximo"  class="form-control botaoProximo">
            </div>
        </div>
</section>