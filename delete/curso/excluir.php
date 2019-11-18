<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "delete from cursos where id_curso='".$_POST['id']."'";
mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
   echo"[{\"erro\":\"0\"}]";
}else{
   echo"[{\"erro\":\"1\"}]";    
}


                 