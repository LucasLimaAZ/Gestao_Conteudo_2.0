<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="tema/painel/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="tema/painel/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Adicionar Imagens(Slide)
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="tema/painel/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <link href="tema/painel/assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/stylePainel.css">
  <?php
    include 'back-end/core/database/Conexao.php';
    include 'back-end/core/database/QueryBuilder.php';
    include 'back-end/config/QueryConfig.php';
    
    if(isset($_POST["titulo"])){
        $titulo = $_POST["titulo"];
        $categoria = $_POST["categoria"];
        $imagem = $_FILES['imagem'];
        $path = $_FILES['imagem']['name'];
        $local_imagem = "public/img/slides/";
        $extensao = pathinfo($path, PATHINFO_EXTENSION);
        $imagem_name = $titulo;
        $caminho = $titulo.'.'.$extensao;
        $upload = move_uploaded_file($_FILES['imagem']['tmp_name'],$local_imagem.$imagem_name.'.'.$extensao);

        if($upload){
            echo 'SUCESSO!';
        }else{
            echo 'ERRO!';
        }

        $query->insertIntoSlides($titulo,$categoria,$caminho);
    }
    ?>
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="tema/painel/assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="https://facilita.dom.com.vc/" class="simple-text logo-normal">
          FACILITA
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="painel.php">
              <i class="material-icons">dashboard</i>
              <p>Painel</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">person</i>
              <p>Clientes</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="selecionaCliente.php">
              <i class="material-icons">content_paste</i>
              <p>Ver Conteúdos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="painelModelos.php">
              <i class="material-icons">library_books</i>
              <p>Modelos</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="painelSlides.php">
              <i class="material-icons">bubble_chart</i>
              <p>Imagens - Slider</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
              <p>Notificações</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
        <div class="container">  
            <form id="contact" action="painelSlides.php" method="post" enctype="multipart/form-data">
                <h3>ADICIONAR IMAGENS</h3>
                <h4>FACILITA</h4>
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
                        <input type="file" name="imagem">
                    </fieldset>
                    <fieldset>
                        <input name="submit" type="submit" id="contact-submit" data-submit="...Enviando" class="btn">
                    </fieldset>
            </form>
        </div>
    </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
      <li class="header-title"> Cor Seleção</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Imagens</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="tema/painel/assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="tema/painel/assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="tema/painel/assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="tema/painel/assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
  <script src="tema/painel/assets/js/core/jquery.min.js"></script>
  <script src="tema/painel/assets/js/core/popper.min.js"></script>
  <script src="tema/painel/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="tema/painel/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="tema/painel/assets/js/plugins/moment.min.js"></script>
  <script src="tema/painel/assets/js/plugins/sweetalert2.js"></script>
  <script src="tema/painel/assets/js/plugins/jquery.validate.min.js"></script>
  <script src="tema/painel/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <script src="tema/painel/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <script src="tema/painel/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <script src="tema/painel/assets/js/plugins/jquery.dataTables.min.js"></script>
  <script src="tema/painel/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <script src="tema/painel/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <script src="tema/painel/assets/js/plugins/fullcalendar.min.js"></script>
  <script src="tema/painel/assets/js/plugins/jquery-jvectormap.js"></script>
  <script src="tema/painel/assets/js/plugins/nouislider.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="tema/painel/assets/js/plugins/arrive.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="tema/painel/assets/js/plugins/chartist.min.js"></script>
  <script src="tema/painel/assets/js/plugins/bootstrap-notify.js"></script>
  <script src="tema/painel/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <script src="tema/painel/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
