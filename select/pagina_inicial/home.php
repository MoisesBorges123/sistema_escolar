<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$fn->construtor();
$titulo_aba = 'Mão na Roda - Sistema Escolar';

            
ob_start(); //INICIO CONTEÚDO
?>
  
<?php
$conteudo = ob_get_clean();//FIM CONTEÚDO


require_once '../../layouts/estilo_home/pg01.php';
?>
