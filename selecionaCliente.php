<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="public/img/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="public/img/favicon.png" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="tema/img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="tema/img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="tema/img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="tema/img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="tema/img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="tema/img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="tema/img/icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="tema/img/icon180.png" sizes="180x180">
    <link rel="stylesheet" href="tema/css/bootstrap.min.css">
    <link rel="stylesheet" href="tema/css/plugins.css">
    <link rel="stylesheet" href="tema/css/main.css">
    <link rel="stylesheet" href="tema/css/themes.css">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/tela6.js"></script>
    <script src="tema/js/vendor/modernizr-3.3.1.min.js"></script>
    <title>DISITE - Um Produto DOM</title>
</head>
<body>
    <section class="site-content site-section-mini themed-background-muted border-bottom">
        <div class="container">
            <h2 class="site-heading h3 site-block">
                <div class="col-md-10">
                    <i class="fa fa-fw fa-users"></i> <strong>SELECIONE O CLIENTE QUE DESEJA VER O CONTEÚDO</strong>
                </div>
                <div class="col-md-2">
                    <a href="http://dom.com.vc/"><img src="public/img/disite_logo.png" width="125px"></a>
                </div>
            </h2>
        </div>
    </section>
    <div class="col-lg-2"></div>
    <?php 
        include 'back-end/core/database/Conexao.php';
        include 'back-end/core/database/QueryBuilder.php';
        include 'back-end/config/QueryConfig.php';
        include 'back-end/controller/selecionaClienteController.php';
        include 'back-end/view/selecionaCliente.php';
    ?>
</body>
</html>