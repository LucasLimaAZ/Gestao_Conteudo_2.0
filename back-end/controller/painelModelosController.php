<?php

include '../core/database/Conexao.php';
include '../core/database/QueryBuilder.php';
include '../config/QueryConfig.php';

$titulo = $_POST["titulo"];
$categoria = $_POST["categoria"];
$link = $_POST["link"];
$imagem = $_FILES['imagem'];
$imagem_name = $titulo;
$path = $_FILES['imagem']['name'];
$local_imagem = "../../public/img/modelos/";
$extensao = pathinfo($path, PATHINFO_EXTENSION);
$upload = move_uploaded_file($_FILES['imagem']['tmp_name'],$local_imagem.$imagem_name.'.'.$extensao);

if($upload){
    echo 'SUCESSO!';
}else{
    echo 'ERRO!';
}

$query->insertIntoModelos($titulo,$categoria,$link);