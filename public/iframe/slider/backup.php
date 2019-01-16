<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Facilita DISITE</title>
	<meta name="description" content="In this tutorial, I'm going to show you how to create portfolio page with filtering and also hover effect for each of your project. We will be using a CSS3 and jQuery filter & sort plugin called MixItUp.">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="../../../tema/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../tema/css/plugins.css">
    <link rel="stylesheet" href="../../../tema/css/main.css">
    <link rel="stylesheet" href="../../../tema/css/themes.css">
    <link rel="stylesheet" href="../../../public/css/style.css">
	<script src="tema/js/vendor/modernizr-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/meuestilo.css">
	<script src="js/modelos.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>a
	<![endif]-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.com, .super, .carro, .con, .med'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>

</head>
<body>

	<div class="container">

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

			include 'back-end/core/database/Conexao.php';
			include 'back-end/core/database/QueryBuilder.php';

			$pdo = Conexao::conectar();
			$query = new QueryBuilder($pdo);
			$resultado = $query->selectAll('dados');

			foreach($resultado as $modelo):?>

			<div class="portfolio <?=$modelo->categoria?>" data-cat="<?=$modelo->categoria?>">
				<div class="portfolio-wrapper">		
					<img src="img/portfolios/app/<?=$modelo->titulo?>.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a onclick="pegaId(this)" id="modelo" class="titulo"><?=$modelo->titulo?></a>	
							<span class="text-category"><?=$modelo->categoria?></span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>

		<?php endforeach;?>
			<div class="footer">
				<form action="tela3.php" method="post">
					<select name="id" id="id" class="selectModelos ">
						<?php foreach($resultado as $modelo):?>
							<option value="<?=$modelo->titulo?>"><?=$modelo->titulo?></option>
						<?php endforeach;?>
					</select>
					<input type="submit" class="botaoModelos" value="Enviar">
				</form>	
			</div>				
		</div>
	</div>
</body>
</html>