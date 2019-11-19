<?php

 header('Content-Type:' . "text/plain");

require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "select * from turmas, cursos where cursos.id_curso = turmas.curso and id_curso='".$_POST['id']."'";
$resultado= mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
  
    while($row= mysqli_fetch_assoc($resultado)){
     

            $data['id']=$row['id_turma'];
            $data['nome']= utf8_encode($row['nome_turma']);
            $data['inicio']= $row['dataAbertura'];
            $data['fim']= $row['dataConclusao'];
            $data['curso']=$row['curso'];
        
           
    }

    echo json_encode($data);
 
   
     
    
    }else{
        echo"[{\"erro\":\"1\"}]";
    }

