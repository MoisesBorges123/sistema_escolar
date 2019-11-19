<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;

$campos_bd=['nome_curso','sigla_curso','duracao','area'];
$valores[]=['value'=>$_POST['nome_curso'],'type'=>8];
$valores[]=['value'=>$_POST['sigla_curso'],'type'=>8];
$valores[]=['value'=>$_POST['duracao'],'type'=>1];
$valores[]=['value'=>$_POST['area'],'type'=>1];
$tabela="cursos";
$condicao="id_curso='".$_POST['id']."'";
$r=$fn->atualizar1($campos_bd, $valores, $tabela, $condicao);
$x= explode('.', $r);
if($x[0]=='19'){
    echo"[{\"erro\":\"0\",\"cod\":\"$r\"}]";
}else{
    $mensagem = $fn->mensagens_erro($r);
    echo"[{\"erro\":\"1\",\"cod\":\"$r\",\"mensagem\":\"".$mensagem['mensagem']."\",\"mensagem\":\"".$mensagem['status']."\",\"mensagem\":\"".$mensagem['icone']."\"}]";    
}
