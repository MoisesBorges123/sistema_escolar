<?php

 header('Content-Type:' . "text/plain");

require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "select * from cursos where id_curso='".$_POST['id']."'";
$resultado= mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
  
    while($row= mysqli_fetch_assoc($resultado)){
     

            $data['id']=$row['id_curso'];
            $data['nome']= utf8_encode($row['nome_curso']);
            $data['sigla']=$row['sigla_curso'];
            $data['duracao']= $row['duracao'];
            $data['area']=$row['area'];
        
           
    }

    echo json_encode($data);
 
   
     
    
    }else{
        echo"[{\"erro\":\"1\"}]";
    }

