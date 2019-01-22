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

$arrayId = $query->pegaId();
$id = $arrayId[0]['id'];
$arrayNome = $query->pegaNome($id);
$nome = $arrayNome[0]['nome'];

$logo = $_FILES['logo'];
$logo_name = 'logo';
$path = $_FILES['logo']['name'];
$local_logo = "private/clientes/$nome/";
$extensao = pathinfo($path, PATHINFO_EXTENSION);
$upload = move_uploaded_file($_FILES['logo']['tmp_name'],$local_logo.$logo_name.'.'.$extensao);

$cliente = $nome;

$j = 0;
 
foreach ($_FILES["fotos"]["error"] as $key => $error) {

    $fotos_nome[$j] = $nome . ' ' . $_FILES["fotos"]["name"][$j];
   
    $fotos_destino = "private/clientes/$cliente/fotos/" . $fotos_nome[$j];
   
    move_uploaded_file( $_FILES["fotos"]["tmp_name"][$j], $fotos_destino );
 
    $j++;
}

$query->updateTela3('`conteudo`',$titulo,$subtitulo,$tags,$descricao,$cor1,$cor2,$cor3,$sobre,$informacoes,$id);

?>