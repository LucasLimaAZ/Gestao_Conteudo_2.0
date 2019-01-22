<?php

$produtos = $_POST['produtos'];
$descricoes = $_POST['descricoes'];

$array = $query->pegaId();
$id = $array[0]['id'];

$array = $query->pegaNome($id);
$cliente = $array[0]['nome'];

$j = 0;

foreach ($_FILES["fotosProdutos"]["error"] as $key => $error) {

    $produtos_nome[$j] = 'Produto' . ' - ' . $_FILES["fotosProdutos"]["name"][$j];
   
    $produtos_destino = "private/clientes/$cliente/produtos/" . $produtos_nome[$j];
   
    move_uploaded_file( $_FILES["fotosProdutos"]["tmp_name"][$j], $produtos_destino );
 
    $j++;
}

$query->updateTela5("conteudo","$produtos","$descricoes","$id");

?>