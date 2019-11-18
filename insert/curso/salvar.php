<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions();

$campos_bd=['nome_curso','sigla_curso','duracao','area'];
$valores=[];
$valores[]=['value'=>$_POST['nome_curso'],'type'=>8];
$valores[]=['value'=>$_POST['sigla_curso'],'type'=>8];
$valores[]=['value'=>$_POST['duracao'],'type'=>1];
$valores[]=['value'=>$_POST['area'],'type'=>1];
$tabela='cursos';
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
