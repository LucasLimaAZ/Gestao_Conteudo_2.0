<section class="site-content site-section-mini themed-background-muted border-bottom col-lg-8 marginTop paddingAll">
    <form action="tela2.php" method="post">
        <div class="form-group">
            <label class="col-md-1 control-label" for="nome">Nome</label>
            <div class="col-md-11">
                <input type="text" maxlength="200" id="nome" name="nome" class="form-control" required>
            <span class="help-block">Por favor digite seu nome completo.</span>
            </div>
            <label class="col-md-1 control-label" for="cpf">CPF / CNPJ</label>
            <div class="col-md-11">
                <input type="text" id="cpfcnpj" name="cpf" class="form-control cpfOuCnpj" required>
            <span class="help-block">Por favor digite seu cpf ou cnpj.</span><br>
            </div>
            <label class="col-md-4 control-label paddingTop">Necessidades:</label>
            <span class="help-block col-md-8">Conte-nos quais são as suas Necessidades em relação ao site.</span>
            <div class="col-md-12 blueBorder paddingVertical">
                <div class="col-lg-4">
                    <input type="checkbox" name="necessidades[]" value="sobre"> Sobre (História da empresa) <br>  
                    <input type="checkbox" name="necessidades[]" value="servicos"> Serviços / Produtos  <br>
                    <input type="checkbox" name="necessidades[]" value="contato"> Formulário de Contato<br>
                    <input type="checkbox" name="necessidades[]" value="chat"> Chat de atendimento  <br>
                </div>
                <div class="col-lg-4">
                    <input type="checkbox" name="necessidades[]" value="mapa"> Mapa   <br>
                    <input type="checkbox" name="necessidades[]" value="banner"> Banner   <br>
                    <input type="checkbox" name="necessidades[]" value="video"> Vídeo<br>
                    <input type="checkbox" name="necessidades[]" value="whatsapp"> Botão de Whatsapp   <br>
                </div>
                <div class="col-lg-4">
                    <input type="checkbox" name="necessidades[]" value="blog"> Blog / Notícias   <br>
                    <input type="checkbox" name="necessidades[]" value="newsletter"> Newsletter   <br>
                    <input type="checkbox" name="necessidades[]" value="redes"> Integração com redes sociais<br>
                    <input type="checkbox" name="necessidades[]" value="manutencao"> Manutenção mensal de conteúdo<br>
                </div>
            </div>
            <div class="col-lg-8"></div>
            <div class="col-lg-4 marginVertical">            
                <input type="submit" value="Próximo" class="form-control botaoProximo">
            </div>
        </div>
    </form>
</section>