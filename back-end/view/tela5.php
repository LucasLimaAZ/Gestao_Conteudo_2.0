<section class="site-content site-section-mini themed-background-muted col-md-8 marginTop paddingAll">
    <div class="col-md-12 site-heading h3 tituloProdutos">
        <i class="fa fa-fw fa-shopping-cart"></i> <strong>Produtos / Serviços</strong>
    </div>
    <form action="tela6.php" method="post" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="col-md-6">
                <input type="text" class="form-control" maxlength="50" name="produto" id="produto" placeholder="Nome do seu produto / serviço">
            </div>
            <div class="col-md-6 mostraItens">
                <label for="mostraProduto">Produto / Serviço: </label>
                <p id="mostraProduto"></p>
            </div>
        </div>
        <div class="col-md-12" style="margin-top:2%">
            <div class="col-md-6">
                <textarea placeholder="Descreva seu produto..." maxlength="200" id="descricao" name="descricao" class="form-control" rows="4" cols="50" maxlength="1000"></textarea>
            </div>
            <div class="col-md-6 paddingTop2 mostraItens">
                <label for="mostraDescricao">Descrição: </label>
                <p id="mostraDescricao"></p>
            </div>
        </div>
        <script type="text/javascript">
            var i;
            var nomes;
            $(document).ready(function(){
                $('input[type="file"]').change(function(e){
                    var tamanho = e.target.files.length;
                    document.getElementById('mostraNomesProdutos').innerHTML = (tamanho + ' arquivos enviados.')
                });
            });
        </script>
        <div class="col-md-12" style="margin-top:2%">
            <div class="col-md-6">
                <label class="col-md-4 paddingTop7">Envie fotos dos produtos: </label>
                <label class="logo col-md-8"> <img src="public/img/upload.png" style="icon">
                <input type="file" id="produtosFotos" name="fotosProdutos[]" onchange="addImagem();fotosNome();" size="60" multiple>
                </label>
                <span class="help-block red">Envie todas de uma só vez.</span>
                <p class="IMGsucesso" id="mostraNomesProdutos"></p>
            </div>
        </div>
        <div class="col-md-6 paddingTop2">
            <div class="col-md-4"></div>
            <button type="button" class="btn btn-success col-md-2" onclick="addDescricao();addProdutos();" value="+"><i class="fa fa-fw fa-plus-circle"></i></button>
            <button type="button" class="btn btn-danger col-md-2" onclick="removeDescricao();removeProdutos();" value="-"><i class="fa fa-fw fa-minus-circle"></i></button>
            <a class="interrogacao" onclick="alert('Preencha os campos desejados e clique no botão +.');"><i class="fa fa-fw fa-question-circle"></i></a>
        </div>
        <div class="col-md-6">
            <input type="hidden" name="produtos" id="produtos">
            <input type="hidden" name="descricoes" id="descricoes">
        </div>
        <div class="col-md-12 paddingTop2">
            <div class="col-md-6">
                <button type="button" onclick="window.history.back();" class="form-control botaoProximo" value="Voltar">Voltar</button>
            </div>
            <div class="col-md-6">
                <input type="submit" class="form-control botaoProximo" value="Próximo">
            </div>
        </div>
    </form>
</section>