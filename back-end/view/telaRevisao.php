<section class="site-content site-section-mini themed-background-muted border-bottom col-lg-8 marginTop marginBottom5 paddingAll">
    <div class="col-lg-12">
        <form action="telaFinal.php" method="post">
            <?php
                foreach($resultado as $campo){
            ?>
                    <div class="center col-lg-12">
                <div>
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Nome: </label><input type="text" name="nome" value="<?=$campo->nome?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Cpf/Cnpj: </label><input type="text" name="cpf" value="<?=$campo->cpf?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Necessidades: </label><input type="text" name="necessidades" value="<?=$campo->necessidades?>" class="tabela col-lg-12"></div>
                </div>
                <div>
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Modelo Escolhido: </label><input type="text" name="modelo_escolhido" value="<?=$campo->modelo_escolhido?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Título: </label><input type="text" name="titulo" value="<?=$campo->titulo?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Subtítulo: </label><input type="text" name="subtitulo" value="<?=$campo->subtitulo?>" class="tabela col-lg-12"></div>
                </div>
                <div>
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Palavras Chave(tags): </label><input type="text" name="tags" value="<?=$campo->tags?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Descrição: </label><input type="text" name="descricao" value="<?=$campo->descricao?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label class="col-lg-12">Cores: </label><input type="text" name="cor1" value="<?=$campo->cor1?>" class="tabela col-lg-4"></label><input type="text" name="cor2" value="<?=$campo->cor2?>" class="tabela col-lg-4"></label><input type="text" name="cor3" value="<?=$campo->cor3?>" class="tabela col-lg-4"></div>
                </div>
                <div>
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Sobre: </label><input type="text" name="sobre" value="<?=$campo->sobre?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Informações: </label><input type="text" name="informacoes" value="<?=$campo->informacoes?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Slogan(Título Slide): </label><input type="text" name="slogan" value="<?=$campo->slogan?>" class="tabela col-lg-12"></div>
                </div>
                <div>
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Subtítulo Slide: </label><input type="text" name="subslogan" value="<?=$campo->subslogan?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Produtos: </label><input type="text" name="produtos" value="<?=$campo->produtos?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Descrições(produtos): </label><input type="text" name="descricoes" value="<?=$campo->descricoes?>" class="tabela col-lg-12"></div>
                </div>
                <div>
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Telefone: </label><input type="text" name="telefone" value="<?=$campo->telefone?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Email: </label><input type="text" name="email" value="<?=$campo->email?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Whatsapp: </label><input type="text" name="whatsapp" value="<?=$campo->whatsapp?>" class="tabela col-lg-12"></div>
                </div>
                <div>
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Email para contato 1: </label><input type="text" name="email1" value="<?=$campo->email1?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Email para contato 2: </label><input type="text" name="email2" value="<?=$campo->email2?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Email para contato 3: </label><input type="text" name="email3" value="<?=$campo->email3?>" class="tabela col-lg-12"></div>
                </div>
                <div>
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Facebook: </label><input type="text" name="facebook" value="<?=$campo->facebook?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Instagram: </label><input type="text" name="instagram" value="<?=$campo->instagram?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Twitter: </label><input type="text" name="twitter" value="<?=$campo->twitter?>" class="tabela col-lg-12"></div>
                </div>
                <div>
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Linkedin: </label><input type="text" name="linkedin" value="<?=$campo->linkedin?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Google +: </label><input type="text" name="googleplus" value="<?=$campo->googleplus?>" class="tabela col-lg-12"></div>    
                    <div class="tabelaRevisao col-md-4 paddingTop2"><label>Youtube: </label><input type="text" name="youtube" value="<?=$campo->youtube?>" class="tabela col-lg-12"></div>
                </div>
            </div>
            
            <div class="col-lg-4 paddingTop2">
                <button type="button" onclick="window.history.back();" class="form-control botaoProximo" value="Voltar">Voltar</button>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4 paddingTop2">
            <input type="submit" class="form-control botaoProximo" value="Finalizar">
            </div>
            <?php
                }
            ?>
        </form>
    </div>
</section>