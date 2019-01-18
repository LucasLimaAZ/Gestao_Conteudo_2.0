<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Facilita DISITE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="tema/css/bootstrap.min.css">
    <link rel="stylesheet" href="tema/css/plugins.css">
    <link rel="stylesheet" href="tema/css/main.css">
    <link rel="stylesheet" href="tema/css/themes.css">
    <link rel="stylesheet" href="public/css/style.css">
	<script src="tema/js/vendor/modernizr-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="public/css/normalize.css">
	<link rel="stylesheet" href="public/css/layout.css">
	<link rel="stylesheet" href="public/css/meuestilo.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="public/js/jquery.mixitup.min.js"></script>
	<script src="public/js/modelos.js"></script>
	<?php
		include 'back-end/config/QueryConfig.php';
		include 'back-end/controller/tela1Controller.php';
		include 'back-end/controller/modelosController.php';
	?>
</head>
<body>
<section class="site-content site-section-mini themed-background-muted border-bottom col-lg-8 marginTop paddingAll">
    <ul id="filters" class="clearfix">
        <li><span class="filter active" data-filter=".com, .super, .carro, .con, .med">Todos</span></li>
        <li><span class="filter" data-filter=".com">Lojas / Comércio</span></li>
        <li><span class="filter" data-filter=".super">Supermercado</span></li>
        <li><span class="filter" data-filter=".carro">Revenda de Carros</span></li>
        <li><span class="filter" data-filter=".con">Contabilidade</span></li>
        <li><span class="filter" data-filter=".med">Clínicas Médicas / Odonto</span></li>
    </ul>
    <div id="portfoliolist">
		<div class="modelos"><?php
			foreach($resultado as $modelo):?>
                <div class="portfolio <?=$modelo->categoria?>" data-cat="<?=$modelo->categoria?>">
                <a id="<?=$modelo->titulo?>" onclick="pegaId(this);escolhe();">
					<div class="portfolio-wrapper">
						<img src="public/img/modelos/<?=$modelo->titulo?>" alt="" />
						<div class="label">
							<div class="label-text">
							    <b><?=$modelo->titulo?></b>
								<span class="text-category"><?=$modelo->categoria?></span>
							</div>
                        <div class="label-bg"></div>
                    </div>
                </div></a>
            </div>
		<?php endforeach;?>
		</div>
			<div class="escolha">
				<form action="tela3.php" method="post">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<input type="hidden" name="modeloEscolhido" value="" id="escolha">
						<label id="modeloEscolhido" class="selectModelos">Escolha</label>
					</div>
					<div class="col-md-4">
						<input type="submit" class="form-control botaoProximo" value="Próximo">
					</div>
				</form>	
			</div>				
		</div>
	</div>
</section>
</body>
</html>