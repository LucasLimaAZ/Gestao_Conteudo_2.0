<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="public/img/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="public/img/favicon.png" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="tema/img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="tema/img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="tema/img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="tema/img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="tema/img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="tema/img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="tema/img/icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="tema/img/icon180.png" sizes="180x180">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>PDF CLIENTE</title>
</head>
<body>
<div class="pdf">
    <img src="public/img/disite_logo.png">
<?php
    foreach($resultado as $campo){
?>
    <table>
    <tr>
        <td class="paddingTop1"><b>Nome: </b></b><?=$campo->nome?></td>
    </tr>
    <tr>    
        <td class="paddingTop1"><b>Cpf/Cnpj: </b><?=$campo->cpf?></td>
    </tr>
    <tr>    
        <td class="paddingTop1"><b>Necessidades: </b><?=$campo->necessidades?></td>
    </tr>
    <tr>
        <td class="paddingTop1"><b>Modelo Escolhido: </b><?=$campo->modelo_escolhido?></td>
    </tr>
    <tr>
        <td class="paddingTop1"><b>Título: </b><?=$campo->titulo?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Subtítulo: </b><?=$campo->subtitulo?></td>
    </tr>
    <tr>
        <td class="paddingTop1"><b>Palavras Chave(tags): </b><?=$campo->tags?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Descrição: </b><?=$campo->descricao?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Cores: </b><?=$campo->cor1?>, </b><?=$campo->cor2?>, </b><?=$campo->cor3?></td>
    </tr>
    <tr>
        <td class="paddingTop1"><b>Sobre: </b><?=$campo->sobre?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Informações: </b><?=$campo->informacoes?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Slide: </b><?=$campo->slider?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Slogan(Título Slide): </b><?=$campo->slogan?></td>
    </tr>
    <tr>
        <td class="paddingTop1"><b>Subtítulo Slide: </b><?=$campo->subslogan?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Produtos: </b><?=$campo->produtos?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Descrições(produtos): </b><?=$campo->descricoes?></td>
    </tr>
    <tr>
        <td class="paddingTop1"><b>Telefone: </b><?=$campo->telefone?></td> 
    </tr>
    <tr>   
        <td class="paddingTop1"><b>Email: </b><?=$campo->email?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Whatsapp: </b><?=$campo->whatsapp?></td>
    </tr>
    <tr>
        <td class="paddingTop1"><b>Email para contato 1: </b><?=$campo->email1?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Email para contato 2: </b><?=$campo->email2?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Email para contato 3: </b><?=$campo->email3?></td>
    </tr>
    <tr>
        <td class="paddingTop1"><b>Facebook: </b><?=$campo->facebook?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Instagram: </b><?=$campo->instagram?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Twitter: </b><?=$campo->twitter?></td>
    </tr>
    <tr>
        <td class="paddingTop1"><b>Linkedin: </b><?=$campo->linkedin?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Google +: </b><?=$campo->googleplus?></td>    
    </tr>
    <tr>
        <td class="paddingTop1"><b>Youtube: </b><?=$campo->youtube?></td>
    </tr>
</table>
<div>
        <div style="font-size:24px; border-top:solid 1px;" class="marginTop5"><b>Imagens</b></div>
    </div>
    <div>
        <div class="paddingTop1 paddingBottom5"><b>Logo: </b></div>
    </div>
    <div>
        <div>
            <?php
            $diretorioLogo = "private/clientes/$campo->nome/";
            $logos = glob($diretorioLogo."logo.*");
            
            foreach($logos as $logo) {
                echo '<img height="150px" src="'.$logo.'" /><br>';
            }
            ?>
        </div>
    </div>

    <div class="paddingTop5 paddingBottom5"><b>Produtos: </b>
        <div>
        <?php
        $dirname = "private/clientes/$campo->nome/produtos/";
        $images = glob($dirname."*.*");
        
        foreach($images as $image) {
            echo '<div><img height="150px" src="'.$image.'" /><br></div>';
        }
        ?>
        </div>
    </div>

    <div class="paddingTop5 paddingBottom5"><b>Fotos: </b>
        <div>
        <?php
        $dirnameFotos = "private/clientes/$campo->nome/fotos/";
        $imagesFotos = glob($dirnameFotos."*.*");
        
        foreach($imagesFotos as $imageFotos) {
            echo '<img height="150px" src="'.$imageFotos.'" /><br>';
        }
        ?>
        </div>
    </div>
<?php
    }
?>
</div>
</body>
</html>
