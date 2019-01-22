<?php

$array = $query->pegaId();
$id = $array[0]['id'];
$resultado = $query->selectWhere("conteudo","$id");

?>