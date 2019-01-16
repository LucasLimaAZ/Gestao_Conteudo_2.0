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
	<link rel="stylesheet" href="public/iframe/modelos/css/normalize.css">
	<link rel="stylesheet" href="public/iframe/modelos/css/layout.css">
	<link rel="stylesheet" href="public/iframe/modelos/css/meuestilo.css">
	<script src="public/iframe/modelos/js/modelos.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="public/iframe/modelos/js/jquery.mixitup.min.js"></script>
	<script src="public/js/modelos.js"></script>
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
		<?php
			include 'public/iframe/modelos/back-end/core/database/Conexao.php';
			include 'public/iframe/modelos/back-end/core/database/QueryBuilder.php';
			$pdo = Conexao::conectar();
			$query = new QueryBuilder($pdo);
			$resultado = $query->selectAll('dados');
		?><div class="modelos"><?php
			foreach($resultado as $modelo):?>
                <div class="portfolio <?=$modelo->categoria?>" data-cat="<?=$modelo->categoria?>">
                <a id="<?=$modelo->titulo?>" onclick="pegaId(this);">
					<div class="portfolio-wrapper">
						<img src="public/iframe/modelos/img/portfolios/app/<?=$modelo->titulo?>.jpg" alt="" />
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
					<div class="col-md-8">
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