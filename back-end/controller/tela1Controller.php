<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];


if(isset($_POST['necessidades'])){
    $necessidades = $_POST['necessidades'];
}else{
    ?>
    <script>
    alert("Você não selecionou nenhuma necessidade!");
    window.history.back();
    </script>
    <?php
    die();
}

$novo_necessidades = implode(",", $necessidades);

$query->insertInto('conteudo','`nome`, `cpf`, `necessidades`',"'$nome','$cpf','$novo_necessidades'");

$dir = "private/clientes/$nome/";
$dir2 = "private/clientes/$nome/fotos/";
$dir3 = "private/clientes/$nome/produtos/";

if(is_dir($dir)){
    ?><script>alert("Um cliente com o seu nome já possui cadastro, caso ainda não tenha se cadastrdo procure o suporte.");
    window.history.back();
    </script>
    <?php
    die();
}else{
    mkdir($dir, 0777);
    mkdir($dir2, 0777);
    mkdir($dir3, 0777);
}

?>