<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];


if(isset($_POST['necessidades'])){
    $necessidades = $_POST['necessidades'];
}else{
    ?><script>alert("Você não selecionou nenhuma necessidade!");</script><?php
}

$novo_necessidades = implode(",", $necessidades);

$query->insertInto('conteudo','`nome`, `cpf`, `necessidades`',"'$nome','$cpf','$novo_necessidades'");

?>