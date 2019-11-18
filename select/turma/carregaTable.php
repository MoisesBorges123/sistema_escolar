<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "select * from cursos, turma where cursos.id_curso = turma.curso";
$result=mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
    while($row= mysqli_fetch_assoc($result)){
        echo"<tr>"
        . "<td>".utf8_encode($row['nome_turma'])."</td>"
        . "<td>".$row['nome_curso']."</td>"
        . "<td>".$fn->convercaoData(2,$row['duracao'])." periodos</td>"
        . "<td>".utf8_encode($row['nome'])."</td>"
        . "<td><i data-id='".$row['id_curso']."' class='la-2x la la-trash text-danger'></i>&nbsp;&nbsp;"
        . "<i data-id='".$row['id_curso']."' class='la-2x la la-edit text-info'></i></td>"
                . "</tr>";
    }
}else{
    echo"<tr><td colspan='5'>Não existe nenhuma turma aberta.</td></tr>";
  
}

