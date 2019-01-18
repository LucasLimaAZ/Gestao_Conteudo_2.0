<section class="site-content site-section-mini themed-background-muted border-bottom col-lg-8 marginTop paddingAll">
    <div class="col-md-12 site-heading h3 tituloProdutos">
        <i class="fa fa-fw fa-shopping-cart"></i> <strong>Produtos / Serviços</strong>
    </div>
    <form action="tela6.php" method="post">
        <div class="col-md-12">
            <div class="col-md-6">
                <input type="text" class="form-control" name="produto" id="produto" placeholder="Nome do seu produto / serviço">
            </div>
            <div class="col-md-6 mostraItens">
                <label for="mostraProduto">Produto / Serviço: </label>
                <p id="mostraProduto"></p>
            </div>
        </div>
        <div class="col-md-12" style="margin-top:2%">
            <div class="col-md-6">
                <textarea placeholder="Descreva seu produto..." id="descricao" name="descricao" class="form-control" rows="4" cols="50" maxlength="1000"></textarea>
            </div>
            <div class="col-md-6 paddingTop2 mostraItens">
                <label for="mostraDescricao">Descrição: </label>
                <p id="mostraDescricao"></p>
            </div>
        </div>
        <div class="col-md-12" style="margin-top:2%">
            <div class="col-md-6">
                <label class="col-md-4 paddingTop7">Envie fotos: </label>
                <label class="logo col-md-8"> <img src="public/img/upload.png" style="icon">
                <input type="file" id="fotos" onchange="addImagem();" size="60" multiple>
                </label>
                <input type="file" class="logo">
                <span class="help-block">Envie todas de uma só vez.</span>
                <p class="IMGsucesso" id="mostraImagens"></p>
            </div>
        </div>
        <div class="col-md-6 paddingTop2">
            <div class="col-md-4"></div>
            <button type="button" class="btn btn-success col-md-2" onclick="addDescricao();addProdutos();" value="+"><i class="fa fa-fw fa-plus-circle"></i></button>
            <button type="button" class="btn btn-danger col-md-2" onclick="removeDescricao();removeProdutos();" value="-"><i class="fa fa-fw fa-minus-circle"></i></button>
            <a class="interrogacao" onclick="alert('Preencha os campos desejados e clique no botão +.');"><i class="fa fa-fw fa-question-circle"></i></a>
        </div>
        <div class="col-md-6">
            <input type="submit" class="form-control botaoProximo" value="Próximo">
        </div>
    </form>
</section>