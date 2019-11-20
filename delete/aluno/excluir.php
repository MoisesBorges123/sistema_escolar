<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$sql = "update aluno set ativo ='0' where id_aluno='".$_POST['id']."'";
mysqli_query($link, $sql);
$aluno = $_POST['aluno'];
if(mysqli_affected_rows($link)>0){
   $resposta=array(
       'erro'=>0,
       'titulo'=>'Registro Excluido!',
       'mensagem'=>'O curso de '. $aluno . ' foi excluido com sucesso.',
       'status'=>'success');
}else{   
   $resposta=array(
       'erro'=>1,
       'titulo'=>'OPS! Ocorreu um erro.',
       'mensagem'=>'Não foi possível excluir o curso de '. $aluno. '.',
       'status'=>'error');
}

echo json_encode($resposta);