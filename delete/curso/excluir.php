<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql="select * from cursos where id_curso='".$_POST['id']."'";
$resultado=mysqli_query($link, $sql);
while($row= mysqli_fetch_assoc($resultado)){
    $curso = $row['nome_curso'];
}


$sql = "delete from cursos where id_curso='".$_POST['id']."'";
mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
   $resposta=array(
       'erro'=>0,
       'titulo'=>'Registro Excluido!',
       'mensagem'=>'O curso de '. $curso . ' foi excluido com sucesso.',
       'status'=>'success');
}else{   
   $resposta=array(
       'erro'=>1,
       'titulo'=>'OPS! Ocorreu um erro.',
       'mensagem'=>'Não foi possível excluir o curso de '. $curso. '.',
       'status'=>'error');
}

echo json_encode($resposta);


                 