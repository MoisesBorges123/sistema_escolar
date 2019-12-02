<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "select * from aluno where ativo=1";
$result=mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
    echo"<option value=\"\">Selecione</option>";
    while($row= mysqli_fetch_assoc($result)){
       echo"<option value='".$row['id_aluno']."'>".utf8_encode($row['nome_aluno'])."</option>";
    }
}