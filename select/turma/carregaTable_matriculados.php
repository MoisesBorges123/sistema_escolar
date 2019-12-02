<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "select * from matricula, aluno where matricula.aluno = aluno.id_aluno and matricula.turma = '".$_POST['turma']."' order by aluno.nome_aluno";
$result=mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
    while($row= mysqli_fetch_assoc($result)){        
        if($row['situacao']==1){
            $situacao="Matriculado";
        }else if($row['situacao']==2){
            $situacao = "Aprovado";
        }else if($row['situacao']==3){
            $situacao = "Reprovado"
        }
        echo"<tr>"
        . "<td>".$row['numero']."</td>"
        . "<td>".utf8_encode($row['nome_aluno'])."</td>"        
        . "<td>".$situacao."</td>"        
        . "<td class=\"text-center\">"
            . "<button  class='btn btn-success btn-aprovado' data-nome='".utf8_encode($row['nome_aluno'])."' data-cod='".$row['numero']."'>Aprovado</button>&nbsp;&nbsp;"
            . "<button  class='btn btn-warning btn-reprovado' data-nome='".utf8_encode($row['nome_aluno'])."' data-cod='".$row['numero']."'>Reprovado</i></button>&nbsp;&nbsp;"
            . "<button  class='btn btn-danger btn-remover' data-nome='".utf8_encode($row['nome_aluno'])."' data-cod='".$row['numero']."'>Excluir</button></td>"            
        . "</tr>";
    }
}else{
    echo"<tr><td colspan='5'>Não existe nenhuma aluno matriculado.</td></tr>";
  
}

