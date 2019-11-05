<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "select * from cursos";
$result=mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
    while($row= mysqli_fetch_assoc($result)){
        echo"<tr>"
        . "<td>".$row['nome_curso']."</td>"
        . "<td>".$row['sigla']."</td>"
        . "<td>".$row['duracao']."</td>"
        . "<td>".$row['area']."</td>"
        . "<td><i class='material-icons'>create</i></td>"
        . "<td><i class='material-icons'>delete</i></td>"
                . "</tr>";
    }
}else{
    echo"<tr><td colspan='5'>Não existe nenhum curso cadastrado.</td></tr>";
  
}

