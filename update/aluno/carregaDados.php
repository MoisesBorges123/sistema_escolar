<?php

 header('Content-Type:' . "text/plain");

require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "select * from aluno where id_aluno = '".$_POST['id']."'";
$resultado= mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
  
    while($row= mysqli_fetch_assoc($resultado)){
     
            $data['erro'] = 0;
            $data['id']=$row['id_aluno'];
            $data['nome']= utf8_encode($row['nome_aluno']);
            $data['matricula']= $row['matricula'];
            $data['telefone']= $row['telefone'];
            
        
           
    }

    echo json_encode($data);
 
   
     
    
    }else{
        echo"[{\"erro\":\"1\"}]";
    }

