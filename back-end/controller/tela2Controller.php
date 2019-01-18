<?php

$modelo_escolhido = $_POST['modeloEscolhido'];

$array = $query->pegaId();

$id = $array[0]['id'];

$query->update("conteudo","`modelo_escolhido`","'$modelo_escolhido'","$id");

?>