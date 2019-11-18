<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions();

$campos_bd=['curso','nome_turma','dataAbertura'];
$valores=[];
$valores[]=['value'=>$_POST['curso'],'type'=>1];
$valores[]=['value'=>$_POST['turma'],'type'=>8];
$valores[]=['value'=>$_POST['inicio'],'type'=>8];
$tabela='turmas';
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
