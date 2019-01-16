<?php

class Conexao{

    public static function conectar(){
        
        try{

            return new PDO('mysql:host=localhost;dbname=iframe','root','');

        }
        
        catch(PDOException $e){

            die($e->getMessage());

        }

    }

}
?>