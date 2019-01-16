<?php

include 'back-end/core/database/Conexao.php';
include 'back-end/core/database/QueryBuilder.php';

$titulo = $_POST["titulo"];
$categoria = $_POST["categoria"];
$extensao = $_POST["extensao"];
$link = $_POST["link"];
$imagem = $_FILES['imagem'];

    $imagem_name = $titulo;
    $tmp_name = $_FILES['imagem']['tmp_name'];
    $local_imagem = "img/portfolios/app/";
    $upload = move_uploaded_file($tmp_name,$local_imagem.$imagem_name.$extensao);

    if($upload){
        echo 'SUCESSO!';
    }else{
        echo 'ERRO!';
    }

$pdo = Conexao::conectar();
$query = new QueryBuilder($pdo);
$query->insertInto($titulo,$categoria,$link);