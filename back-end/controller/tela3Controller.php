<?php

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$tags = $_POST['tags'];
$descricao = $_POST['descricao'];
$cor1 = $_POST['cor1'];
$cor2 = $_POST['cor2'];
$cor3 = $_POST['cor3'];
$sobre = $_POST['sobre'];
$informacoes = $_POST['informacoes'];

$array = $query->pegaId();

$id = $array[0]['id'];

$query->updateTela3('`conteudo`',$titulo,$subtitulo,$tags,$descricao,$cor1,$cor2,$cor3,$sobre,$informacoes,$id);

?>