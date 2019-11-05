<?php 
require_once './funcoes/php/myfuctions.php';
$fn = new myfunctions;
$fn->construtor2();
?>
<!doctype html>
<html lang="PT-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.ico">

        <title>Mão na Roda -Sistema Escolar</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />      
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <!-- CSS Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="assets/css/demo.css" rel="stylesheet" />
        <style>
            .error{
                color: #ff0000 !important;
            }
        </style>
    </head>

    <body>
        <div class="image-container set-full-height" style="background-image: url('assets/img/quadro_educacao_escola.jpeg')">
           

            <!--  Made With Material Kit  -->
            <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
                <div class="brand">MR</div>
                <div class="made-with"><strong>Mão na Roda</strong></div>
            </a>

            <!--   Big container   -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!--      Wizard container        -->
                        <div class="wizard-container" style="padding-top: 50px;">
                            <div class="card wizard-card" data-color="orange" >
                               
                                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                                    <div class="wizard-header">
                                        <h3 class="wizard-title">
                                            Universidade Player 1
                                        </h3>
                                        
                                    </div>
                                    <div class="wizard-navigation">
                                        <ul>
                                            <li><a href="#login" id="btn-login" data-toggle="tab">Entrar</a></li>
                                            <li><a href="#sou_novo" id="btn-sou_novo" data-toggle="tab">Sou Novo</a></li>
                                            
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane" id="login">
                                            <form id="formLogin1" action="autentication/login/login.php" method="post">
                                            <div class="row">
                                                <h4 class="info-text">Informe seu login e senha</h4>
                                                <div class="col-sm-4 col-sm-offset-1">
                                                    <div class="picture-container">
                                                        <div class="picture">
                                                            <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                            <input type="file" id="wizard-picture">
                                                        </div>
                                                        <h6>Choose Picture</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Login</label>
                                                            <input name="txt_login" id="txt_login" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">lock</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Senha</small></label>
                                                            <input name="txt_senha" type="password" id="txt_senha" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </form>   
                                        </div>
                                        <div class="tab-pane" id="sou_novo">
                                            <form id="formSou_novo" method="post" action="insert/usuario/salvar.php">
                                           <div class="row">
                                                <h4 class="info-text">Insira seus dados</h4>
                                                <div class="col-sm-4 col-sm-offset-1">
                                                    <div class="picture-container">
                                                        <div class="picture">
                                                            <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                            <input type="file" id="wizard-picture">
                                                        </div>
                                                        <h6>Foto</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">*Nome Completo</label>
                                                            <input id="nome" name="txt_nome_completo" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">*Login</label>
                                                            <input id="txt_login_2" name="txt_login" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">lock</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">*Senha</label>
                                                            <input name="txt_senha" id="txt_senha_2" type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">lock</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">*Confirmar Senha <small>(required)</small></label>
                                                            <input name="txt_senha2" id="txt_senha2_2" type="password" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">vpn_key</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">*Chave de Acesso</label>
                                                            <input name="txt_chave_acesso" id="txt_chave_acesso" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </form>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="wizard-footer">
                                        <div class="pull-right">
                                            <input type='button' class='btn btn-fill btn-success btn-wd' name='entrar' id="btn-entrar" value='Entrar' />                                           
                                        </div>

                                        <div class="pull-left">
                                            
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                             
                            </div>
                        </div> <!-- wizard container -->
                    </div>
                </div><!-- end row -->
            </div> <!--  big container -->

            <div class="footer">
                <div class="container text-center">
                    <p>Mão na Roda gerenciando sua universiade mais fácil!</p>
                </div>
            </div>
        </div>

    </body>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="assets/js/material-bootstrap-wizard.js"></script>
    <!-- Mascaras -->
    <script src="layouts/style_padrao/assets/js/mascaras.js" type="text/javascript"></script>
    
    <!--  More information about jquery.validate here: http://jqueryvalidation.org/ -->	
    
    <script src="assets/js/jquery.validate.js" type="text/javascript"></script>
    <!-- Minhas Customizações -->
    <script src="assets/js/paginaLogin.js" type="text/javascript"></script>
</html>
