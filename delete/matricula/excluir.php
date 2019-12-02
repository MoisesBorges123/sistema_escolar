<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "delete from matricula where numero='".$_POST['id']."'";
mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
   $resposta=array('erro'=>0);
}else{
   $resposta=array('erro'=>1);       
}

echo json_encode($resposta);
                 