<section class="site-content site-section-mini themed-background-muted border-bottom col-lg-8 marginTop marginBottom5 paddingAll">
<div class="col-md-4"></div>
        <div class="col-md-4">
            <img src="public/img/disite_logo.png">
        </div>
        <div class="col-md-4"></div>
    <div class="col-md-12">
        
        <div class="alert alert-success alert-dismissable site-block">
            PARABÉNS VOCÊ ACABA DE COMPLETAR O CADASTRO DO SEU SITE, AGORA AGUARDE ENQUANTO PREPARAMOS TUDO PARA VOCÊ!!! ;)
        </div>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4 paddingTop2" style="text-align:center;">
        <?php 
        foreach($resultado as $cliente){
            $id = $cliente->id;
        }?>
        <form action="pdf.php" method="post">
            <label for="download_pdf">Baixar pdf com seu conteúdo.</label>
            <button type="submit" name="id" value="<?=$cliente->id?>" class="form-control" name="download_pdf"><img src="public/img/download.png"></button>
        </form>
    </div>
    <div class="col-md-12 paddingTop7" style="text-align:center;">
        <p>© 2019, Todos os direitos reservados. </p>
    </div>
</section>