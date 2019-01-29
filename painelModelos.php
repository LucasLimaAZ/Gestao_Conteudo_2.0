<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/stylePainel.css">
    <link rel="stylesheet" href="public/css/meuestilo.css">
    <title>Painel de Cadastros DOM</title>
    <?php
    include 'back-end/core/database/Conexao.php';
    include 'back-end/core/database/QueryBuilder.php';
    include 'back-end/config/QueryConfig.php';
    
    if(isset($_POST["titulo"])){
        $titulo = $_POST["titulo"];
        $categoria = $_POST["categoria"];
        $link = $_POST["link"];
        $imagem = $_FILES['imagem'];
        $path = $_FILES['imagem']['name'];
        $local_imagem = "public/img/modelos/";
        $extensao = pathinfo($path, PATHINFO_EXTENSION);
        $imagem_name = $titulo;
        $caminho = $titulo.'.'.$extensao;
        $upload = move_uploaded_file($_FILES['imagem']['tmp_name'],$local_imagem.$imagem_name.'.'.$extensao);
        
        if($upload){
            echo 'SUCESSO!';
        }else{
            echo 'ERRO!';
        }
        
        $query->insertIntoModelos($titulo,$categoria,$caminho,$link);
    }
    ?>
</head>
<body>
<div class="painelModelos">
    <div class="container">  
        <form id="contact" action="painelModelos.php" method="post" enctype="multipart/form-data">
            <h3>PAINEL DISITE</h3>
            <h4>Um produto <a href="http://dom.com.vc/">DOM</a></h4>
                <fieldset>
                    <input placeholder="Título" type="text" tabindex="1" required autofocus name="titulo">
                </fieldset>
                <fieldset>
                    <label for="categoria">Categoria: </label>
                    <select name="categoria">
                        <option value="com">Lojas/Comércio</option>
                        <option value="super">Supermercado</option>
                        <option value="carro">Revenda de Carros</option>
                        <option value="con">Contabilidade</option>
                        <option value="med">Clínica/Odonto</option>
                        <option value="adv">Advogado</option>
                        <option value="arq">Arquitetura</option>
                        <option value="gastro">Gastronomia</option>
                        <option value="beleza">Estética</option>
                        <option value="vest">Loja de Roupas</option>
                        <option value="acad">Academia</option>
                        <option value="band">Música</option>
                        <option value="imob">Corretores</option>
                        <option value="escola">Escolas</option>
                        <option value="ong">ONG/Religioso</option>
                        <option value="business">Business</option>
                        <option value="ind">Indústria</option>
                        <option value="pet">Petshop/Veterinário</option>
                        <option value="lon">Loja Online</option>
                        <option value="tec">Assistência Técnica</option>
                    </select>
                </fieldset>
                <fieldset>
                    <input placeholder="Link para a demonstração" type="text" tabindex="3" required name="link">
                </fieldset>
                <fieldset>
                    <input type="file" name="imagem">
                </fieldset>
                <fieldset>
                    <input name="submit" type="submit" id="contact-submit" data-submit="...Enviando" class="btn">
                </fieldset>
        </form>
    </div>
</div>
</body>
</html>