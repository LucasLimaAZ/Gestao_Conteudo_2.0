<?php

include 'back-end/core/database/QueryBuilder.php';
include 'back-end/core/database/Conexao.php';

$pdo = Conexao::conectar();
$query = new QueryBuilder($pdo);

?>