<section class="site-content site-section-mini themed-background-muted border-bottom col-lg-8 marginTop marginBottom5 paddingAll">
    <form action="tela7.php" method="post">
        <div class="col-md-12 site-heading h3 tituloProdutos">
            <i class="fa fa-fw fa-calendar"></i> <strong>Contato: </strong>
        </div>
        <div class="col-md-4">
            <i class="fa fa-fw fa-phone"></i>
            <label for="telefone">Telefone: </label>
            <input type="text" class="form-control" placeholder="(xx)xxxxx-xxxx" name="telefone">
        </div>
        <div class="col-md-4">
            <i class="fa fa-fw fa-envelope"></i>
            <label for="email">Email: </label>
            <input type="email" class="form-control" placeholder="exemplo@email.com" name="email">
        </div>
        <div class="col-md-4">
            <i class="fa fa-fw fa-whatsapp"></i>
            <label for="whatsapp">Whatsapp: </label>
            <input type="text" class="form-control" placeholder="(xx)xxxxx-xxxx" name="whatsapp">
        </div>
        <div class="col-md-12 marginVertical">
            <span class="help-block">Nos informe até 3 emails para receber as mensagens do seu formulário de contato.</span>
        </div>
        <div class="col-md-4">
            <i class="fa fa-fw fa-envelope"></i>
            <label for="email">Email para contato 1: </label>
            <input type="email" class="form-control" placeholder="exemplo@email.com" name="email">
        </div>
        <div class="col-md-4">
            <i class="fa fa-fw fa-envelope"></i>
            <label for="email">Email para contato 2: </label>
            <input type="email" class="form-control" placeholder="opcional" name="email">
        </div>
        <div class="col-md-4">
            <i class="fa fa-fw fa-envelope"></i>
            <label for="email">Email para contato 3: </label>
            <input type="email" class="form-control" placeholder="opcional" name="email">
        </div>
        <div class="col-md-12">
            <div class="col-md-5">
                <i class="fa fa-fw fa-network"></i>
                <span class="help-block">Possui alguma rede social?</span>
                <input type="radio" class="radioButton" name="redes" value="Não" onclick="desabilitaRedes();">  Não<br>
                <input type="radio" class="radioButton" name="redes" value="Sim" onclick="habilitaRedes();" checked>  Sim<br>
            </div>
            <div class="col-md-6 paddingTop7 h4">
            <i class="fa fa-fw fa-users"></i>&nbsp;&nbsp;&nbsp;<strong>Redes Sociais: </strong>
            </div>
        </div>
        <div class="col-md-6 paddingTop2">
            <i class="fa fa-fw fa-facebook"></i>
            <label for="facebook">Facebook: </label>
            <input type="text" name="facebook" id="facebook" class="form-control">
            <i class="fa fa-fw fa-instagram"></i>
            <label for="instagra">Instagram: </label>
            <input type="text" name="instagram" id="instagram" class="form-control">
            <i class="fa fa-fw fa-twitter"></i>
            <label for="twitter">Twitter: </label>
            <input type="text" name="twitter" id="twitter" class="form-control">
        </div>
        <div class="col-md-6 paddingTop2">
            <i class="fa fa-fw fa-linkedin"></i>
            <label for="linkedin">Linkedin: </label>
            <input type="text" name="linkedin" id="linkedin" class="form-control">
            <i class="fa fa-fw fa-google-plus"></i>
            <label for="googleplus">Google +: </label>
            <input type="text" name="googleplus" id="googleplus" class="form-control">
            <i class="fa fa-fw fa-youtube"></i>
            <label for="youtube">Youtube: </label>
            <input type="text" name="youtube" id="youtube" class="form-control">
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 paddingTop2">
            <input type="submit" class="form-control botaoProximo" value="Próximo">
        </div>
    </form>
</section>