<?php

class QueryBuilder{
    
    public function __construct($pdo){

        $this->pdo = $pdo;

    }    

    public function selectAll($table,$model){

        $selecionaTodos = $this->pdo->prepare("SELECT * FROM {$table}");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS, "$model");

    }

    public function insertInto($table,$campos,$values){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("INSERT INTO `$table` ($campos) VALUES ($values)");
        $inserir->execute();

    }

    public function update($table,$campos,$values,$id){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("UPDATE `$table` SET $campos = $values WHERE `id` = $id");
        $inserir->execute();

    }

    public function updateTela3($table,$titulo,$subtitulo,$tags,$descricao,$cor1,$cor2,$cor3,$sobre,$informacoes,$id){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("UPDATE $table SET 
        `titulo` = '$titulo',
        `subtitulo` = '$subtitulo',
        `tags` = '$tags',
        `descricao` = '$descricao',
        `cor1` = '$cor1',
        `cor2` = '$cor2',
        `cor3` = '$cor3',
        `sobre` = '$sobre',
        `informacoes` = '$informacoes'
        WHERE `id` = $id");
        $inserir->execute();

    }

    public function updateTela4($table,$slogan,$subslogan,$slider,$id){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("UPDATE $table SET 
        `slogan` = '$slogan',
        `subslogan` = '$subslogan',
        `slider` = '$tags'
        WHERE `id` = $id");
        $inserir->execute();

    }

    public function selectAllModelos($table){

        $selecionaModelos = $this->pdo->prepare("select * from {$table}");
        $selecionaModelos->execute();
        return $selecionaModelos->fetchAll(PDO::FETCH_CLASS);

    }

    public function insertIntoModelos($titulo,$categoria,$link){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("INSERT INTO `modelos`(`titulo`, `categoria`, `link`) VALUES ('$titulo','$categoria', '$link')");
        $inserir->execute();

    }

    public function insertIntoSlides($titulo,$categoria){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("INSERT INTO `slides`(`titulo`, `categoria`) VALUES ('$titulo','$categoria')");
        $inserir->execute();

    }

    public function selectAllSlides($table){

        $selecionaSlides = $this->pdo->prepare("select * from {$table}");
        $selecionaSlides->execute();
        return $selecionaSlides->fetchAll(PDO::FETCH_CLASS);

    }

    public function pegaId(){

        $selecionaId = $this->pdo->prepare("SELECT * FROM `conteudo` ORDER BY `id` DESC LIMIT 1");
        $selecionaId->execute();
        return $selecionaId->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>