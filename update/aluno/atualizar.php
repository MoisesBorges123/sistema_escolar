<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;

    $campos_bd=['nome_aluno','matricula','telefone'];
    $valores[]=['value'=>$_POST['nome'],'type'=>6];
    $valores[]=['value'=>$_POST['matricula'],'type'=>1];
    $valores[]=['value'=>$_POST['telefone'],'type'=>8];       

$tabela="aluno";
$condicao="id_aluno='".$_POST['id']."'";
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