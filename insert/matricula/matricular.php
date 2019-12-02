<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions();

$campos_bd=['numero','aluno','turma','situacao'];
$valores=[];
$valores[]=['value'=>$_POST['matricula'],'type'=>1];
$valores[]=['value'=>$_POST['aluno'],'type'=>1];
$valores[]=['value'=>$_POST['turma'],'type'=>1];
$valores[]=['value'=>1,'type'=>1];
$tabela='matricula';
$r=$fn->cadastrar1($campos_bd, $valores, $tabela);


$x = explode('.', $r);
if($x[0]!=5){
    $cadastrado = 1;
    $title="<b>OPS!</b> ";
    $status = "error";
    $mensagem="Não foi possivel matricular esse aluno.";
}else{
    $cadastrado = 0;
    $title="<b>Muito Bem!</b> ";
    $status = "success";
    $mensagem="Aluno Matriculado com sucesso <b>Nº de Matricula: ".$_POST['matricula']."</b>";
    
}
 $resposta=array('cadastrado'=>$cadastrado,'retorno'=>$r,'mensagem'=>$mensagem,'status'=>$status,'titulo'=>$title);


echo json_encode($resposta);