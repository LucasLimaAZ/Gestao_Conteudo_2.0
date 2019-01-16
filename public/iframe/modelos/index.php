<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Facilita DISITE</title>
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

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {

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
		
		filterList.init();
		
	});	
	</script>

</head>
<body>
	<div class="container" >
		<div class="cabeçalho" style="background-color:#fff;">
			<h2 class="site-heading h3 site-block" >
                <div class="col-md-10">
                    <i class="fa fa-fw fa-chevron-right"></i> <strong>Passo 2 - Escolha seu modelo...</strong>
                </div>
                <div class="col-md-2">
                    <a href="http://dom.com.vc/"><img src="../../img/disite_logo.png" width="125px"></a>
                </div>
			</h2>
		</div>
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

			?><div class="modelos"><?php
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
		</div>
			<div class="escolha">
				<form action="tela3.php" method="post">
					<select name="id" id="id" class="selectModelos ">
						<?php foreach($resultado as $modelo):?>
							<option value="<?=$modelo->titulo?>"><?=$modelo->titulo?></option>
						<?php endforeach;?>
					</select>
					<input type="submit" class="botaoModelos" value="Prosseguir">
				</form>	
			</div>				
		</div>
	</div>
</body>
</html>