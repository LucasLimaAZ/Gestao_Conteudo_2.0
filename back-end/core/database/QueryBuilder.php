<?php

class QueryBuilder{
    
    public function __construct($pdo){

        $this->pdo = $pdo;

    }    

    public function selectAll($table){

        $selecionaTodos = $this->pdo->prepare("SELECT * FROM {$table}");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectWhere($table,$id){

        $selecionaTodos = $this->pdo->prepare("SELECT * FROM {$table} WHERE `id` = $id");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectPendentes($table){

        $selecionaTodos = $this->pdo->prepare("SELECT * FROM {$table} WHERE `status` = 'pendente'");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectFinalizados($table){

        $selecionaTodos = $this->pdo->prepare("SELECT * FROM {$table} WHERE `status` = 'finalizado'");
        $selecionaTodos->execute();
        return $selecionaTodos->fetchAll(PDO::FETCH_CLASS);

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
        `titulo` = :titulo,
        `subtitulo` = :subtitulo,
        `tags` = :tags,
        `descricao` = :descricao,
        `cor1` = :cor1,
        `cor2` = :cor2,
        `cor3` = :cor3,
        `sobre` = :sobre,
        `informacoes` = :informacoes
        WHERE `id` = $id");
        $inserir->execute(array(
        ':titulo' => $titulo, 
        ':subtitulo' => $subtitulo, 
        ':tags' => $tags, 
        ':descricao' => $descricao,
        ':cor1' => $cor1,
        ':cor2' => $cor2,
        ':cor3' => $cor3,
        ':sobre' => $sobre,
        ':informacoes' => $informacoes
        ));

    }

    public function updateTela4($table,$slogan,$subslogan,$slider,$id){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("UPDATE $table SET 
        `slogan` = :slogan,
        `subslogan` = :subslogan,
        `slider` = :slider
        WHERE `id` = $id");
        $inserir->execute(array(
            ':slogan' => $slogan,
            ':subslogan' => $subslogan,
            ':slider' => $slider
        ));

    }

    public function updateTela5($table,$produtos,$descricoes,$id){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("UPDATE $table SET 
        `produtos` = :produtos,
        `descricoes` = :descricoes
        WHERE `id` = $id");
        $inserir->execute(array(
            ':produtos' => $produtos,
            ':descricoes' => $descricoes
        ));

    }

    public function updateTela6($table,$telefone,$email,$whatsapp,$email1,$email2,$email3,$facebook,$instagram,$twitter,$linkedin,$googleplus,$youtube,$id){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("UPDATE $table SET 
        `telefone` = :telefone,
        `email` = :email,
        `whatsapp` = :whatsapp,
        `email1` = :email1,
        `email2` = :email2,
        `email3` = :email3,
        `facebook` = :facebook,
        `instagram` = :instagram,
        `twitter` = :twitter,
        `linkedin` = :linkedin,
        `googleplus` = :googleplus,
        `youtube` = :youtube
        WHERE `id` = $id");
        $inserir->execute(array(
            ':telefone' => $telefone,
            ':email' => $email,
            ':whatsapp' => $whatsapp,
            ':email1' => $email1,
            ':email2' => $email2,
            ':email3' => $email3,
            ':facebook' => $facebook,
            ':instagram' => $instagram,
            ':twitter' => $twitter,
            ':linkedin' => $linkedin,
            ':googleplus' => $googleplus,
            ':youtube' => $youtube
        ));

    }

    public function updateFinal($nome,$cpf,$necessidades,$modelo_escolhido,$titulo,$subtitulo,$tags,$descricao,$cor1,$cor2,$cor3,$sobre,$informacoes,$slogan,$subslogan,$produtos,$descricoes,$telefone,$email,$whatsapp,$email1,$email2,$email3,$facebook,$instagram,$twitter,$linkedin,$googleplus,$youtube,$id){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("UPDATE `conteudo` SET 
        `nome` = :nome,
        `cpf` = :cpf,
        `necessidades` = :necessidades,
        `modelo_escolhido` = :modelo_escolhido,
        `titulo` = :titulo,
        `subtitulo` = :subtitulo,
        `tags` = :tags,
        `descricao` = :descricao,
        `cor1` = :cor1,
        `cor2` = :cor2,
        `cor3` = :cor3,
        `sobre` = :sobre,
        `informacoes` = :informacoes,
        `slogan` = :slogan,
        `subslogan` = :subslogan,
        `produtos` = :produtos,
        `descricoes` = :descricoes,
        `telefone` = :telefone,
        `email` = :email,
        `whatsapp` = :whatsapp,
        `email1` = :email1,
        `email2` = :email2,
        `email3` = :email3,
        `facebook` = :facebook,
        `instagram` = :instagram,
        `twitter` = :twitter,
        `linkedin` = :linkedin,
        `googleplus` = :googleplus,
        `youtube` = :youtube
        WHERE `id` = $id");
        $inserir->execute(array(
            ':nome' => $nome,
            ':cpf' => $cpf,
            ':necessidades' => $necessidades,
            ':modelo_escolhido' => $modelo_escolhido,
            ':titulo' => $titulo, 
            ':subtitulo' => $subtitulo, 
            ':tags' => $tags, 
            ':descricao' => $descricao,
            ':cor1' => $cor1,
            ':cor2' => $cor2,
            ':cor3' => $cor3,
            ':sobre' => $sobre,
            ':informacoes' => $informacoes,
            ':slogan' => $slogan,
            ':subslogan' => $subslogan,
            ':produtos' => $produtos,
            ':descricoes' => $descricoes,
            ':telefone' => $telefone,
            ':email' => $email,
            ':whatsapp' => $whatsapp,
            ':email1' => $email1,
            ':email2' => $email2,
            ':email3' => $email3,
            ':facebook' => $facebook,
            ':instagram' => $instagram,
            ':twitter' => $twitter,
            ':linkedin' => $linkedin,
            ':googleplus' => $googleplus,
            ':youtube' => $youtube)
        );

    }

    public function selectAllModelos($table){

        $selecionaModelos = $this->pdo->prepare("select * from {$table}");
        $selecionaModelos->execute();
        return $selecionaModelos->fetchAll(PDO::FETCH_CLASS);

    }

    public function insertIntoModelos($titulo,$caminho,$categoria,$link){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("INSERT INTO `modelos`(`titulo`, `caminho`, `categoria`, `link`) VALUES ('$titulo','$caminho','$categoria', '$link')");
        $inserir->execute();

    }

    public function insertIntoSlides($titulo,$categoria,$caminho){

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $inserir = $this->pdo->prepare("INSERT INTO `slides`(`titulo`, `categoria`, `caminho`) VALUES ('$titulo','$categoria','$caminho')");
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

    public function pegaNome($id){

        $selecionaNome = $this->pdo->prepare("SELECT `nome` FROM `conteudo` WHERE `id` = $id");
        $selecionaNome->execute();
        return $selecionaNome->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>