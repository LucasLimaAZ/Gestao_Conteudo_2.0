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
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="public/js/jquery.mixitup.min.js"></script>
	<script src="public/js/slides.js"></script>
	<?php
		include 'back-end/core/database/Conexao.php';
		include 'back-end/core/database/QueryBuilder.php';
		include 'back-end/config/QueryConfig.php';
		include 'back-end/controller/sliderController.php';	
		include 'back-end/controller/tela3Controller.php';		
	?>
</head>
<body>
<section class="site-content site-section-mini themed-background-muted border-bottom col-lg-8 marginTop paddingAll">
	<ul id="filters" class="clearfix">
        <li><span class="filter active" data-filter=".com, .super, .carro, .con, .med, .adv, .arq, .gastro, .beleza, .vest, .acad, .band, .imob, .escola, .ong, .business, .ind, .pet, .lon, .tec">Todos</span></li>
        <li><span class="filter" data-filter=".com">Lojas/Comércio</span></li>
        <li><span class="filter" data-filter=".super">Supermercado</span></li>
        <li><span class="filter" data-filter=".carro">Carros</span></li>
        <li><span class="filter" data-filter=".con">Contabilidade</span></li>
        <li><span class="filter" data-filter=".med">Clínicas</span></li>
        <li><span class="filter" data-filter=".adv">Advogado</span></li>
        <li><span class="filter" data-filter=".arq">Arquitetura</span></li>
        <li><span class="filter" data-filter=".gastro">Gastronomia</span></li>
        <li><span class="filter" data-filter=".beleza">Estética</span></li>
        <li><span class="filter" data-filter=".vest">Loja de Roupas</span></li>
        <li><span class="filter" data-filter=".acad">Academia</span></li>
        <li><span class="filter" data-filter=".band">Música</span></li>
        <li><span class="filter" data-filter=".imob">Corretores</span></li>
        <li><span class="filter" data-filter=".escola">Escolas</span></li>
        <li><span class="filter" data-filter=".ong">ONG/Religioso</span></li>
        <li><span class="filter" data-filter=".business">Business</span></li>
        <li><span class="filter" data-filter=".ind">Indústria</span></li>
        <li><span class="filter" data-filter=".pet">Petshop/Veterinário</span></li>
        <li><span class="filter" data-filter=".lon">Loja Online</span></li>
        <li><span class="filter" data-filter=".tec">Assistência Técnica</span></li>
    </ul>
	<form action="tela5.php" method="post">
		<div class="col-md-6 marginVertical">
			<label for="slogan">Slogan / Título:</label>
			<input type="text" name="slogan" class="form-control " placeholder="Digite um slogan/título para seu slider..." maxlength="200">
		</div>
		<div class="col-md-6 marginVertical">
			<label for="subslogan">Subtítulo:</label>
			<input type="text" name="subslogan" class="form-control " placeholder="Digite um subtítulo para seu slider..." maxlength="200">
		</div>
		<div class="col-md-5"></div>
   		<div id="portfoliolist">
		<div class="modelos"><?php
			foreach($resultado as $slide):?>
                <div class="portfolio <?=$slide->categoria?>" data-cat="<?=$slide->categoria?>">
                <a id="<?=$slide->titulo?>" onclick="pegaId(this);escolhe();">
					<div class="portfolio-wrapper">
						<img src="http://facilita.dom.com.vc/public/img/slides/<?=$slide->caminho?>" alt="" />
						<div class="label">
							<div class="label-text">
							    <b><?=$slide->titulo?></b>
								<span class="text-category"><?=$slide->categoria?></span>
							</div>
                        <div class="label-bg"></div>
                    </div>
                </div></a>
            </div>
		<?php endforeach;?>
		</div>
			<div class="escolha">
				<div class="col-md-4">
					<button type="button" onclick="window.history.back();" class="form-control botaoProximo" value="Voltar">Voltar</button>
				</div>
				<div class="col-md-4">
					<input type="hidden" name="slider" value="" id="escolha">
					<label id="slideEscolhido" class="selectSlides">Escolha</label>
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