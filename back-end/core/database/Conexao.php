<?php

class Conexao{

    public static function Conectar(){

        try{

            return new PDO('mysql:host=localhost;dbname=gestaoconteudo','root','');

        }
        catch(PDOException $e){

            die($e->getMessage());

        }

    }

}

?>