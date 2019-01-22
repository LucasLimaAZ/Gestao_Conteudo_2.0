<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$necessidades = $_POST['necessidades'];
$modelo_escolhido = $_POST['modelo_escolhido'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$tags = $_POST['tags'];
$descricao = $_POST['descricao'];
$cor1 = $_POST['cor1'];
$cor2 = $_POST['cor2'];
$cor3 = $_POST['cor3'];
$sobre = $_POST['sobre'];
$informacoes = $_POST['informacoes'];
$slogan = $_POST['slogan'];
$subslogan = $_POST['subslogan'];
$produtos = $_POST['produtos'];
$descricoes = $_POST['descricoes'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$email3 = $_POST['email3'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$twitter = $_POST['twitter'];
$linkedin = $_POST['linkedin'];
$googleplus = $_POST['googleplus'];
$youtube = $_POST['youtube'];

$array = $query->pegaId();
$id = $array[0]['id'];

$query->updateFinal($nome,$cpf,$necessidades,$modelo_escolhido,$titulo,$subtitulo,$tags,$descricao,$cor1,$cor2,$cor3,$sobre,$informacoes,$slogan,$subslogan,$produtos,$descricoes,$telefone,$email,$whatsapp,$email1,$email2,$email3,$facebook,$instagram,$twitter,$linkedin,$googleplus,$youtube,$id);

$resultado = $query->selectWhere("conteudo","$id");

?>