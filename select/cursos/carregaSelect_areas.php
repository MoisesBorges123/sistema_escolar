<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "select * from area_de_atuacao";
$result=mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
    echo"<option value=\"\">Selecione</option>";
    while($row= mysqli_fetch_assoc($result)){
       echo"<option value='".$row['id_area_de_atuacao']."'>".utf8_encode($row['nome'])."</option>";
    }
}