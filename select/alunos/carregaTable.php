<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
ECHO$sql = "select * from alunos order by nome";
$result=mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
    while($row= mysqli_fetch_assoc($result)){
        echo"<tr>"
        . "<td>".utf8_encode($row['nome'])."</td>"
        . "<td>".$row['matricula']."</td>"
        . "<td>".$row['telefone']." periodos</td>"        
        . "<td><button style='background:none;' class='btn btn-remover' data-nome='".utf8_encode($row['nome_curso'])."' data-cod='".$row['id_curso']."'><i class='la-2x la la-trash text-danger'></i></button>&nbsp;&nbsp;"
        . "<button class='btn btn-editar' style='background:none;'  data-cod='".$row['id_curso']."'><i  class='la-2x la la-edit text-info'></i></td>"
                . "</tr>";
    }
}else{
    echo"<tr><td colspan='5'>Não existe nenhum aluno.</td></tr>";
  
}

