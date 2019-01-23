<section class="site-content site-section-mini themed-background-muted border-bottom col-md-8 marginTop marginBottom5 paddingAll">
    <div class="col-md-12">
        <form action="telaFinal.php" method="post">
            <?php
                foreach($resultado as $campo){
            ?>
                    <table class="center">
                <tr>
                    <td class="tabelaRevisao"><label>Nome: </label><input type="text" name="nome" value="<?=$campo->nome?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Cpf/Cnpj: </label><input type="text" name="cpf" value="<?=$campo->cpf?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Necessidades: </label><input type="text" name="necessidades" value="<?=$campo->necessidades?>" class="tabela col-md-12"></td>
                </tr>
                <tr>
                    <td class="tabelaRevisao"><label>Modelo Escolhido: </label><input type="text" name="modelo_escolhido" value="<?=$campo->modelo_escolhido?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Título: </label><input type="text" name="titulo" value="<?=$campo->titulo?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Subtítulo: </label><input type="text" name="subtitulo" value="<?=$campo->subtitulo?>" class="tabela col-md-12"></td>
                </tr>
                <tr>
                    <td class="tabelaRevisao"><label>Palavras Chave(tags): </label><input type="text" name="tags" value="<?=$campo->tags?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Descrição: </label><input type="text" name="descricao" value="<?=$campo->descricao?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label class="col-md-12">Cores: </label><input type="text" name="cor1" value="<?=$campo->cor1?>" class="tabela col-md-4"></label><input type="text" name="cor2" value="<?=$campo->cor2?>" class="tabela col-md-4"></label><input type="text" name="cor3" value="<?=$campo->cor3?>" class="tabela col-md-4"></td>
                </tr>
                <tr>
                    <td class="tabelaRevisao"><label>Sobre: </label><input type="text" name="sobre" value="<?=$campo->sobre?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Informações: </label><input type="text" name="informacoes" value="<?=$campo->informacoes?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Slogan(Título Slide): </label><input type="text" name="slogan" value="<?=$campo->slogan?>" class="tabela col-md-12"></td>
                </tr>
                <tr>
                    <td class="tabelaRevisao"><label>Subtítulo Slide: </label><input type="text" name="subslogan" value="<?=$campo->subslogan?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Produtos: </label><input type="text" name="produtos" value="<?=$campo->produtos?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Descrições(produtos): </label><input type="text" name="descricoes" value="<?=$campo->descricoes?>" class="tabela col-md-12"></td>
                </tr>
                <tr>
                    <td class="tabelaRevisao"><label>Telefone: </label><input type="text" name="telefone" value="<?=$campo->telefone?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Email: </label><input type="text" name="email" value="<?=$campo->email?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Whatsapp: </label><input type="text" name="whatsapp" value="<?=$campo->whatsapp?>" class="tabela col-md-12"></td>
                </tr>
                <tr>
                    <td class="tabelaRevisao"><label>Email para contato 1: </label><input type="text" name="email1" value="<?=$campo->email1?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Email para contato 2: </label><input type="text" name="email2" value="<?=$campo->email2?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Email para contato 3: </label><input type="text" name="email3" value="<?=$campo->email3?>" class="tabela col-md-12"></td>
                </tr>
                <tr>
                    <td class="tabelaRevisao"><label>Facebook: </label><input type="text" name="facebook" value="<?=$campo->facebook?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Instagram: </label><input type="text" name="instagram" value="<?=$campo->instagram?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Twitter: </label><input type="text" name="twitter" value="<?=$campo->twitter?>" class="tabela col-md-12"></td>
                </tr>
                <tr>
                    <td class="tabelaRevisao"><label>Linkedin: </label><input type="text" name="linkedin" value="<?=$campo->linkedin?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Google +: </label><input type="text" name="googleplus" value="<?=$campo->googleplus?>" class="tabela col-md-12"></td>    
                    <td class="tabelaRevisao"><label>Youtube: </label><input type="text" name="youtube" value="<?=$campo->youtube?>" class="tabela col-md-12"></td>
                </tr>
            </table>
            
            <div class="col-md-4 paddingTop2">
                <button type="button" onclick="window.history.back();" class="form-control botaoProximo" value="Voltar">Voltar</button>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 paddingTop2">
            <input type="submit" class="form-control botaoProximo" value="Finalizar">
            </div>
            <?php
                }
            ?>
        </form>
    </div>
</section>