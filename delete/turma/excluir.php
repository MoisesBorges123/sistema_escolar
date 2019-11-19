<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "update turmas set ativo ='0' where id_turma='".$_POST['id']."'";
mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
   $resposta=array('erro'=>0);
}else{
   $resposta=array('erro'=>1);       
}

echo json_encode($resposta);
                 