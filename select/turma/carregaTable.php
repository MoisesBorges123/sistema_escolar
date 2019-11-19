<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "select * from turmas, cursos where cursos.id_curso = turmas.curso and turmas.ativo='1' order by turmas.nome_turma";
$result=mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
    while($row= mysqli_fetch_assoc($result)){
        if(empty($row['dataConclusao'])){
            $conclusao = "-";
        }else{
            $conclusao=$fn->convercaoData(2,$row['dataAbertura']);
        }
        echo"<tr>"
        . "<td>".utf8_encode($row['nome_turma'])."</td>"
        . "<td>".utf8_encode($row['nome_curso'])."</td>"
        . "<td>".$fn->convercaoData(1,$row['dataAbertura'])."</td>"        
        . "<td>".$conclusao."</td>"        
        . "<td class=\"text-center\"><button style='background:none;' class='btn btn-remover' data-nome='".utf8_encode($row['nome_turma'])."' data-cod='".$row['id_turma']."'><i class='la-2x la la-trash text-danger'></i></button>"
        . "<button class='btn btn-editar' style='background:none;'  data-cod='".$row['id_turma']."'><i  class='la-2x la la-edit text-info'></i></td>"
                . "</tr>";
    }
}else{
    echo"<tr><td colspan='5'>Não existe nenhuma turma aberta.</td></tr>";
  
}

