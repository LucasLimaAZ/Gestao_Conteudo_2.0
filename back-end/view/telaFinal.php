<section class="site-content site-section-mini themed-background-muted border-bottom col-lg-8 marginTop marginBottom5 paddingAll">
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissable site-block">
            PARABÉNS VOCÊ ACABA DE COMPLETAR O CADASTRO DO SEU SITE DISITE, AGORA AGUARDE ENQUANTO PREPARAMOS TUDO PARA VOCÊ!!! ;)
        </div>
    </div>
    <div class="col-md-6">
        <h1>DISITE - UM PRODUTO <a href="http://dom.com.vc/">DOM</a>.</h1><br/> © 2019, Todos os direitos reservados. 
    </div>
    <div class="col-md-6">
        <img src="public/img/disite_logo.png">
    </div>
    <div class="col-md-12"></div>
    <div class="col-md-3 paddingTop2">
        <?php 
        foreach($resultado as $cliente){
            $id = $cliente->id;
        }?>
        <form action="pdf.php" method="post">
            <label for="download_pdf">Baixar pdf com seu conteúdo.</label>
            <button type="submit" name="id" value="<?=$cliente->id?>" class="form-control" name="download_pdf"><img src="public/img/download.png"></button>
        </form>
    </div>
</section>