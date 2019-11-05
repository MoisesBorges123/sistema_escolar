
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title><?php echo$titulo; date_default_timezone_set('America/Sao_paulo'); session_start();?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="Igreja Imaculada Conceição" content="" />
        <meta name="Moises Alves Borges" content="" />
        

        <!-- css -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="../../layouts/pagina_inicial/css/bootstrap.css" rel="stylesheet" />
        <link href="../../layouts/pagina_inicial/css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="../../layouts/pagina_inicial/css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="../../layouts/pagina_inicial/css/jcarousel.css" rel="stylesheet" />
        <link href="../../layouts/pagina_inicial/css/flexslider.css" rel="stylesheet" />
        <link href="../../layouts/pagina_inicial/css/style.css" rel="stylesheet" />
        <!-- Theme skin -->
        <link href="../../layouts/pagina_inicial/skins/default.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../layouts/pagina_inicial/ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../layouts/pagina_inicial/ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../layouts/pagina_inicial/ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="../../layouts/pagina_inicial/ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="../../img/sistema/igreja.png" />
        <?php
        if (!empty($style)) {
            echo$style;
        }
       
       
        
        
        ?>
        
        
        
        
        <!-- =======================================================
          Theme Name: Flattern
          Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
    </head>

    <body>
        <div id="wrapper">
            <!-- toggle top area -->
            <div class="hidden-top">
                <div class="hidden-top-inner container">
                    <div class="row">
                        <div class="span12">
                            <ul>
                                <li><strong>Paróquia Catedral Imaculada Conceição</strong></li>
                                <li>Email: imaculadaconceicao@msn.com</li>
                                <li>Telefone<i class="icon-phone"></i>(33) 3522-3278</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end toggle top area -->
            <!-- start header -->
            <header>
                <div class="container">
                    <!-- hidden top area toggle link -->
                    <div id="header-hidden-link">
                        <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
                    </div>
                    <!-- end toggle link -->
                    <div class="row nomargin">
                        <div class="span12">
                            <div class="headnav">
                                <ul>
                                    <?php
                                    if (!empty($_SESSION['id'])) {
                                        echo"<li><a href='../../paginas/home/home.php?r=7'>Gerenciar</a></li>";
                                        echo"<li><a href='../../login/logout.php'><i class='icon-rounded  icon-off'></i>Sair</a></li>";
                                    } else {
                                        echo"<li><a href='#mySignin' data-toggle='modal'>Fazer Login</a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                            <!-- Signup Modal -->
                            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 id="mySigninModalLabel">Entre na sua <strong>conta</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="control-group">
                                            <label class="control-label" for="inputText">Usuário</label>
                                            <div class="controls">
                                                <input type="text" name="txt_login" id="login" placeholder="Usuário">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputSigninPassword">Senha</label>
                                            <div class="controls">
                                                <input type="password" name="txt_senha" id="senha" placeholder="Senha">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">

                                                <div id="resposta"></div>
                                                <div id="carregando"></div>
                                            </div>
                                            <div class="control-group">
                                                <div class="controls">

                                                    <div id="entrar" class="btn">Entrar</div>

                                                </div>
                            <!--                    <p class="aligncenter margintop20">
                                                  Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                                                </p>-->
                                            </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end signup modal -->
                            <!-- Sign in Modal -->
                            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 id="mySigninModalLabel">Entre na sua <strong>conta</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="control-group">
                                            <label class="control-label" for="inputText">Usuário</label>
                                            <div class="controls">
                                                <input type="text" name="txt_login" id="login2" placeholder="Usuário">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputSigninPassword">Senha</label>
                                            <div class="controls">
                                                <input type="password" name="txt_senha" id="senha2" placeholder="Senha">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">

                                                <div id="resposta"></div>
                                                <div id="carregando"></div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">

                                                <div id="entrar" class="btn">Entrar</div>

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end reset modal -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <div class="logo">
                                <a href="../../index.php"><img src="../../layouts/pagina_inicial/img2/logo.png" style="height: 20%; width: 20%;" alt="" class="logo" /></a><br>
                                <h1>Paróquia Catedral Imaculada Conceição</h1>
                            </div>
                        </div>
                        <div class="span8">
                            <div class="navbar navbar-static-top">
                                <div class="navigation">
                                    <nav>

                                        <ul class="nav topnav">

                                            <li class="dropdown">
                                                <a href="#">Batismo<i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="../../cadastros/participantes_curso_pais_padrinhos/cadastrar.php">Preparação Pais e Padrinhos</a></li>
                                                    <li><a href="#">Batizados</a></li>
                                                    <li><a href="../../cadastros/segunda_via_certificado_batismo/cadastrar.php">2º via de Certificado</a></li>
                                                    <li><a href="#">Informações Sobre</a></li>                        
                                                </ul>  
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Certidões <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="../../cadastros/certidao/cadastrar.php">Solicitar 2º via de Certidão</a></li>
                                                    <li><a href="#">Acomparnhar Pedido de Certidão</a></li>                        
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Catequese <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="portfolio-2cols.html">Fazer Inscrição</a></li>
                                                    <li><a href="portfolio-3cols.html">Calendário Catequetico</a></li>
                                                    <li><a href="portfolio-4cols.html">Avisos</a></li>                        
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Casamentos <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-left-sidebar.html">Marcar Casamento</a></li>
                                                    <li><a href="blog-right-sidebar.html">Curso de Noivos</a></li>                                              
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Dízimo<i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-left-sidebar.html">Ser Dizimista</a></li>
                                                    <li><a href="blog-right-sidebar.html">Minha Ficha</a></li>                                              
                                                    <li><a href="blog-right-sidebar.html">Atualizar Cadastro</a></li>                                              
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contato</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- end navigation -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
            <section id="inner-headline">
              <div class="container">
                <div class="row">
                  <div class="span8">
                    <div class="inner-heading">
                      <h2><?php echo$cabecalho; ?></h2>
                    </div>
                  </div>
                  <div class="span4" >
                    <ul class="breadcrumb" >
                        <?php if(!empty($caminho)){echo$caminho;}?>
<!--                      <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>-->
                      <li class="active"><?php if(!empty($local)){echo$local;}?> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
            <section id="content">     

                <div class="container">
                    <div class="row">
                        <div class="span12">                         

                            <?php
                            echo$conteudo;
                            ?>

                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="span3">
                            <div class="widget">
                                <h5 class="widgetheading">Browse pages</h5>
                                <ul class="link-list">
                                    <li><a href="#">About our company</a></li>
                                    <li><a href="#">Our services</a></li>
                                    <li><a href="#">Meet our team</a></li>
                                    <li><a href="#">Explore our portfolio</a></li>
                                    <li><a href="#">Get in touch with us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="widget">
                                <h5 class="widgetheading">Important stuff</h5>
                                <ul class="link-list">
                                    <li><a href="#">Press release</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Career center</a></li>
                                    <li><a href="#">Flattern forum</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="widget">
                                <h5 class="widgetheading">Flickr photostream</h5>
                                <div class="flickr_badge">
                                    <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                                </div>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="widget">
                                <h5 class="widgetheading">Get in touch with us</h5>
                                <address>
                                    <strong>Flattern studio, Pte Ltd</strong><br>
                                    Springville center X264, Park Ave S.01<br>
                                    Semarang 16425 Indonesia
                                </address>
                                <p>
                                    <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                                    <i class="icon-envelope-alt"></i> email@domainname.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="span6">
                                <div class="copyright">
                                    <p>
                                        <span>&copy; Flattern - All right reserved.</span>
                                    </p>
                                    <div class="credits">
                                        <!--
                                          All the links in the footer should remain intact.
                                          You can delete the links only if you purchased the pro version.
                                          Licensing information: https://bootstrapmade.com/license/
                                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                                        -->
                                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                                    </div>
                                </div>
                            </div>
                            <div class="span6">
                                <ul class="social-network">
                                    <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                                    <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
        <!-- javascript
          ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../../layouts/pagina_inicial/js/jquery.js"></script>
        <script src="../../layouts/pagina_inicial/js/jquery.easing.1.3.js"></script>
        <script src="../../layouts/pagina_inicial/js/bootstrap.js"></script>
        <script src="../../layouts/pagina_inicial/js/jcarousel/jquery.jcarousel.min.js"></script>
        <script src="../../layouts/pagina_inicial/js/jquery.fancybox.pack.js"></script>
        <script src="../../layouts/pagina_inicial/js/jquery.fancybox-media.js"></script>
        <script src="../../layouts/pagina_inicial/js/google-code-prettify/prettify.js"></script>
        <script src="../../layouts/pagina_inicial/js/portfolio/jquery.quicksand.js"></script>
        <script src="../../layouts/pagina_inicial/js/portfolio/setting.js"></script>
        <script src="../../layouts/pagina_inicial/js/jquery.flexslider.js"></script>
        <script src="../../layouts/pagina_inicial/js/jquery.nivo.slider.js"></script>
        <script src="../../layouts/pagina_inicial/js/modernizr.custom.js"></script>
        <script src="../../layouts/pagina_inicial/js/jquery.ba-cond.min.js"></script>
        <script src="../../layouts/pagina_inicial/js/jquery.slitslider.js"></script>
        <script src="../../layouts/pagina_inicial/js/animate.js"></script>
        <script src="../../funcoes/javascript/myfunctions.js"></script>
<!--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>-->

        <!-- Contact Form JavaScript File -->
        <script src="../../layouts/style_padrao/assets/js/mascaras.js"></script>
        <script src="../../layouts/pagina_inicial/contactform/contactform.js"></script>

        <!-- Template Custom JavaScript File -->
        <script src="../../layouts/pagina_inicial/js/custom.js"></script>
<?php
if (!empty($jquery)) {
    echo$jquery;
}
$variaveis1 = ['txt_login', 'txt_senha', 'local'];
$resposta = 'resposta';
$load = 'carregando';
$page = "../../login/login.php";
$namefunction = 'login';
$fn->ajax_buscar($variaveis1, $resposta, $load, $page, $namefunction);
?>
        <script>
            $('document').ready(function () {
                $('#entrar').click(function () {
                    login($('#login').val(), $('#senha').val(), 2);
                });
                
                $('#senha').focus(function(){
                    $('#resposta').html(' ');
                });
                $('#login').focus(function(){
                    $('#resposta').html(' ');
                });

            });

        </script>


    </body>

</html>

