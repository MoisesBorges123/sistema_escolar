<!DOCTYPE html>
<html lang="PT-BR">
<head>
        <meta charset="UTF-8">
       
<!--        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo$titulo_aba;?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link rel="stylesheet" href="../../layouts/style_padrao/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="../../layouts/style_padrao/assets/css/ready.css">
	<link rel="stylesheet" href="../../layouts/style_padrao/assets/css/demo.css">
        <link rel="stylesheet" href="../../layouts/style_padrao/assets/css/animate.css">
        <?php
        if (isset($style)) {
            echo$style;
        }
         if(!empty($_SESSION['font_color'])){ 
            
            echo"<style> "
             . ".sidebar .nav .nav-item a {"
                    . "color:".$_SESSION['font_color']." !important;"
                    
                    . "}"
                    . ".main-header .logo-header a.logo {"
                    . "color:".$_SESSION['font_color']." !important;"
                    . "}"
                    . "
                    .sidebar .user .info a > span .user-level {
                    color:".$_SESSION['font_color']." !important;
                    }
                    .main-header .logo-header .more{
                        color:".$_SESSION['font_color']." !important;
                    }
                    .main-header .logo-header .navbar-toggler .navbar-toggler-icon {
                        color:".$_SESSION['font_color']." !important;
                    }
                    "
                    . "</style>";
        
        }
        if(!empty($_SESSION['background'])){
            echo"<style>"
            . ".footer{"
            . "background-color:".$_SESSION["background"].";"
            . "}"
                    . "</style>";
        }
        ?>
        <style>
            .bg-green{
                background-color: #53A644 !important;
            }
            .nav-secon{
                height: 55px;
            }
            input[type="color"] {
            -webkit-appearance: none;
            border: none;
            width: 80px;
            height: 50px;
            }
            input[type="color"]::-webkit-color-swatch-wrapper {
                    padding: 0;
            }
            input[type="color"]::-webkit-color-swatch {
                    border: none;
            }
            .main-panel{
                background-image: url("../../assets/img/quadro_educacao_escola.jpeg");
                background-size: 100% 100%;
                background-repeat: no-repeat;
            }
            .footer{
               
               /* bottom: 0px;
                position: fixed;
                width: 100%;*/
               
                  /* bottom: 0px;
    position: relative;
    width: auto;
    margin: auto;*/
                
            }
            .icons_titulo{
                font-size: 30px !important;
            }
        </style>
</head>
<body>
	<div class="wrapper">
		<?php
                    require_once '../../layouts/barra_de_tarefas/barra01.php';
                    require_once '../../layouts/barra_de_tarefas/barra02.php';
                ?>
			
            <div class="main-panel"> 
				<div class="content">
                                    <div class="container-fluid">
                                       
                                        <?php
                                        if(isset($conteudo)){
                                            echo$conteudo;
                                        }                                        
                                        ?>
                                    </div>
                                </div>	
				
			</div>
                        <?php require_once '../../layouts/rodape/rodape01.php'; ?>
		</div>
	
	<!-- Modal -->
<!--	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">									
					<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
					<p>
					<b>We'll let you know when it's done</b></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>-->

<script src="../../layouts/style_padrao/assets/js/core/jquery.3.2.1.min.js"></script>
<!--<script src=".../../layouts/style_padrao/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>-->
<script src="../../layouts/style_padrao/assets/js/core/popper.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/core/bootstrap.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/chartist/chartist.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/ready.min.js"></script>
<script src="../../layouts/style_padrao/assets/js/mascaras.js"></script>
<script src="../../layouts/style_padrao/assets/plugin/jquery-validate/jquery.validate.js" type="text/javascript"></script>
<script>
	$( function() {
//		$( "#slider" ).slider({
//			range: "min",
//			max: 100,
//			value: 40,
//		});
//		$( "#slider-range" ).slider({
//			range: true,
//			min: 0,
//			max: 500,
//			values: [ 75, 300 ]
//		});
	} );
</script>
<!-- <script>
            $('document').ready(function(){
                $('#grupo').change(function(){
                    buscar($('#grupo').val());
                });
            });
            </script>-->
<?php


        if (!empty($jquery)) {
           
            echo$jquery;
          
            
        }
        ?>
           


</body>
</html>

