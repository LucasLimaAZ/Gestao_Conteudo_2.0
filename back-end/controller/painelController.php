<?php

    $resultado = $query->selectAll('conteudo');
    $resultadoModelos = $query->selectAllModelos('modelos');
    $resultadoSlides = $query->selectAllSlides('slides');
    $resultadoPendentes = $query->selectPendentes('conteudo');
    $resultadoFinalizados = $query->selectFinalizados('conteudo');

?>