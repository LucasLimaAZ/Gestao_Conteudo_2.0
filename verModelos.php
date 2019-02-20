<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Facilita DISITE</title>
	<meta name="viewport" content="width=device-width,  initial-scale=1, maximum-scale=1">
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
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="public/js/jquery.mixitup.min.js"></script>
	<script src="public/js/modelos.js"></script>
	<?php
		include 'back-end/core/database/Conexao.php';
		include 'back-end/core/database/QueryBuilder.php';
		include 'back-end/config/QueryConfig.php';
		include 'back-end/controller/modelosController.php';
	?>
</head>
<body>
<section class="modelosCanvas">
    <div class="headerMenu col-md-12">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <ul id="filters" class="clearfix">
                <li class="itemFiltro"><span class="active filter" data-filter=".com, .super, .carro, .con, .med, .adv, .arq, .gastro, .beleza, .vest, .acad, .band, .escola, .ong, .business, .ind, .pet, .lon, .tec">Todos</span></li>
                <li class="itemFiltro"><span class="filter" data-filter=".com, .super, .vest, .carro, .lon">Varejo</span></li>
                <li class="itemFiltro"><span class="filter" data-filter=".gastro, .beleza, .band, .pet, .tec">Serviços</span></li>
                <li class="itemFiltro"><span class="filter" data-filter=".con, .business">Serviços Financeiros</span></li>
                <li class="itemFiltro"><span class="filter" data-filter=".med, .acad">Saúde</span></li>
                <li class="itemFiltro"><span class="filter" data-filter="">Manufatura</span></li>
                <li class="itemFiltro"><span class="filter" data-filter="">Logística</span></li>
                <li class="itemFiltro"><span class="filter" data-filter=".adv">Jurídico</span></li>
                <li class="itemFiltro"><span class="filter" data-filter=".imob">Hospitalidade</span></li>
                <li class="itemFiltro"><span class="filter" data-filter=".escola">Educacional</span></li>
                <li class="itemFiltro"><span class="filter" data-filter=".ong">Distribuição</span></li>
                <li class="itemFiltro"><span class="filter" data-filter=".arq, .ind">Construção e Projetos</span></li>
                <li class="itemFiltro"><span class="filter" data-filter="">Agronegócio</span></li>

                <!--<li><span class="filter" data-filter="">Supermercado</span></li>
                <li><span class="filter" data-filter="">Carros</span></li>
                <li><span class="filter" data-filter="">Contabilidade</span></li>
                <li><span class="filter" data-filter="">Clínicas</span></li>
                <li><span class="filter" data-filter="">Advogado</span></li>
                <li><span class="filter" data-filter="">Arquitetura</span></li>
                <li><span class="filter" data-filter="">Gastronomia</span></li>
                <li><span class="filter" data-filter="">Estética</span></li>
                <li><span class="filter" data-filter="">Academia</span></li>
                <li><span class="filter" data-filter="">Música</span></li>
                <li><span class="filter" data-filter="">Corretores</span></li>
                <li><span class="filter" data-filter="">Escolas</span></li>
                <li><span class="filter" data-filter="">ONG/Religioso</span></li>
                <li><span class="filter" data-filter="">Business</span></li>
                <li><span class="filter" data-filter="">Indústria</span></li>
                <li><span class="filter" data-filter="">Petshop/Veterinário</span></li>
                <li><span class="filter" data-filter="">Loja Online</span></li>
                <li><span class="filter" data-filter="">Assistência Técnica</span></li>-->
            </ul>
        </div>
    </div>
    <div id="portfoliolist">
		<div class="verModelos"><?php
			foreach($resultado as $modelo):?>
                <div class="portfolio <?=$modelo->categoria?>" data-cat="<?=$modelo->categoria?>">
                <a id="<?=$modelo->titulo?>">
					<div class="portfolio-wrapper">
						<img src="public/img/modelos/<?=$modelo->caminho?>" alt="" />
						<div class="label">
							<div class="label-text">
							    <b><a href="<?=$modelo->link?>" target='_blank'>VER<br></a></b>
								<?=$modelo->titulo?>
								<span class="text-category"><?=$modelo->categoria?></span>
							</div>
                        <div class="label-bg"></div>
                    </div>
                </div></a>
            </div>
		<?php endforeach;?>
		</div>
		</div>
	</div>
</section>
</body>
</html>