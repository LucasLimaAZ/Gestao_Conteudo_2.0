<?php

$slogan = $_POST['slogan'];
$subslogan = $_POST['subslogan'];
$slider = $_POST['slider'];

$array = $query->pegaId();

$id = $array[0]['id'];

$query->updateTela4("conteudo","$slogan","$subslogan","$slider","$id");

?>