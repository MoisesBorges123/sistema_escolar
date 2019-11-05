<?php
require_once '../../funcoes/php/myfuctions.php';
$fn =new myfunctions;
    $user = $_POST['txt_login'];
    $senha = md5($_POST['txt_senha']);
    $link_destino = "../../select/pagina_inicial/home.php";
    $fn->login($user, $senha, $link_destino);
    
?>
