<?php

class QueryBuilder{

    protected $pdo;

    public function __construct($pdo){

        $this->pdo = $pdo;

    }

    public function selectAll($table){

        $selecionaTodos = $this->pdo->prepare("select * from {$table}");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectWhere($table, $categoria){

        $seleciona = $this->pdo->prepare("select * from {$table} WHERE titulo '$categoria'");
        $seleciona->execute();
        return $seleciona->fetchAll(PDO::FETCH_CLASS, 'Modelo');

    }

    public function insertInto($titulo,$categoria,$link){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("INSERT INTO `dados`(`titulo`, `categoria`, `link`) VALUES ('$titulo','$categoria', '$link')");
        $inserir->execute();

    }


}

?>