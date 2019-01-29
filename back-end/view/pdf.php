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
    <link rel="stylesheet" href="public/css/meuestilo.css">
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
        <td class="paddingTop2">Nome: <?=$campo->nome?></td>
    </tr>
    <tr>    
        <td class="paddingTop2">Cpf/Cnpj: <?=$campo->cpf?></td>
    </tr>
    <tr>    
        <td class="paddingTop2">Necessidades: <?=$campo->necessidades?></td>
    </tr>
    <tr>
        <td class="paddingTop2">Modelo Escolhido: <?=$campo->modelo_escolhido?></td>
    </tr>
    <tr>
        <td class="paddingTop2">Título: <?=$campo->titulo?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Subtítulo: <?=$campo->subtitulo?></td>
    </tr>
    <tr>
        <td class="paddingTop2">Palavras Chave(tags): <?=$campo->tags?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Descrição: <?=$campo->descricao?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Cores: <?=$campo->cor1?>, <?=$campo->cor2?>, <?=$campo->cor3?></td>
    </tr>
    <tr>
        <td class="paddingTop2">Sobre: <?=$campo->sobre?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Informações: <?=$campo->informacoes?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Slide: <?=$campo->slider?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Slogan(Título Slide): <?=$campo->slogan?></td>
    </tr>
    <tr>
        <td class="paddingTop2">Subtítulo Slide: <?=$campo->subslogan?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Produtos: <?=$campo->produtos?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Descrições(produtos): <?=$campo->descricoes?></td>
    </tr>
    <tr>
        <td class="paddingTop2">Telefone: <?=$campo->telefone?></td> 
    </tr>
    <tr>   
        <td class="paddingTop2">Email: <?=$campo->email?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Whatsapp: <?=$campo->whatsapp?></td>
    </tr>
    <tr>
        <td class="paddingTop2">Email para contato 1: <?=$campo->email1?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Email para contato 2: <?=$campo->email2?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Email para contato 3: <?=$campo->email3?></td>
    </tr>
    <tr>
        <td class="paddingTop2">Facebook: <?=$campo->facebook?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Instagram: <?=$campo->instagram?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Twitter: <?=$campo->twitter?></td>
    </tr>
    <tr>
        <td class="paddingTop2">Linkedin: <?=$campo->linkedin?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Google +: <?=$campo->googleplus?></td>    
    </tr>
    <tr>
        <td class="paddingTop2">Youtube: <?=$campo->youtube?></td>
    </tr>
</table>
<?php
    }
?>
</div>
</body>
</html>
