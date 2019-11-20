<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions();

$campos_bd=['nome_aluno','matricula','telefone','ativo'];
$valores=[];
$valores[]=['value'=>$_POST['aluno'],'type'=>6];
$valores[]=['value'=>$_POST['matricula'],'type'=>1];
$valores[]=['value'=>$_POST['telefone'],'type'=>8];
$valores[]=['value'=>1,'type'=>1];
$tabela='aluno';
$r=$fn->cadastrar1($campos_bd, $valores, $tabela);
$x = explode('.', $r);
if($x[0]!=5){
    $cadastrado = 1;
}else{
    $cadastrado = 0;
    
}
 $resposta=array('cadastrado'=>$cadastrado,'retorno'=>$r,'mensagem'=>$fn->mensagens_erro($r));


echo json_encode($resposta);
//echo json_encode(array('retorno'=>$r));
//echo json_encode(array('mensagem'=>$fn->mensagens_erro($r)));
