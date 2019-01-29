<?php

$config = require 'back-end/core/database/Config.php';
$pdo = Conexao::conectar($config['database']);
$query = new QueryBuilder($pdo);

?>