<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "select * "
        . "from "
            . "aluno "
        . "where "
            . "ativo='1' "
        . "order by "
            . "nome_aluno asc";
        $result=mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
    while($row= mysqli_fetch_assoc($result)){
        
        echo"<tr>"        
        . "<td>".utf8_encode($row['nome_aluno'])."</td>"
        . "<td>".$row['telefone']."</td>"                
        . "<td class=\"text-center\"><button style='background:none;' class='btn btn-remover' data-nome='".utf8_encode($row['nome_aluno'])."' data-cod='".$row['id_aluno']."'><i class='la-2x la la-trash text-danger'></i></button>"
        . "<button class='btn btn-editar' style='background:none;'  data-cod='".$row['id_aluno']."'><i  class='la-2x la la-edit text-info'></i></button>"
        . "<button class='btn btn-matricula' style='background:none;'  data-cod='".$row['id_aluno']."'><i class=\"la-2x la la-file-alt\"></i></button></td>"
                . "</tr>";
    }
}else{
    
    echo"<tr><td colspan='5'>Não existe nenhum aluno cadastrado.</td></tr>";
  
}

