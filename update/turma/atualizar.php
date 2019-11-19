<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
if(!empty($_POST['fim'])){
    $campos_bd=['curso','nome_turma','dataConclusao','dataAbertura'];
    $valores[]=['value'=>$_POST['curso'],'type'=>1];
    $valores[]=['value'=>$_POST['turma'],'type'=>8];
    $valores[]=['value'=>$_POST['fim'],'type'=>8];
    $valores[]=['value'=>$_POST['inicio'],'type'=>8];
    
}else{
    $campos_bd=['curso','nome_turma','dataAbertura'];
    $valores[]=['value'=>$_POST['curso'],'type'=>1];
    $valores[]=['value'=>$_POST['turma'],'type'=>8];    
    $valores[]=['value'=>$_POST['inicio'],'type'=>8];
    
}
$tabela="turmas";
$condicao="id_turma='".$_POST['id']."'";
$r=$fn->atualizar1($campos_bd, $valores, $tabela, $condicao);
$x= explode('.', $r);
if($x[0]=='19'){
    //echo"[{\"erro\":\"0\",\"cod\":\"$r\"}]";
    $resposta=array('erro'=>0,'retorno'=>$r,'mensagem'=>$fn->mensagens_erro($r));
}else{
    $mensagem = $fn->mensagens_erro($r);
    $resposta=array('erro'=>1,'retorno'=>$r,'mensagem'=>$fn->mensagens_erro($r));
    //echo"[{\"erro\":\"1\",\"cod\":\"$r\",\"mensagem\":\"".$mensagem['mensagem']."\",\"mensagem\":\"".$mensagem['status']."\",\"mensagem\":\"".$mensagem['icone']."\"}]";    
}
echo json_encode($resposta);