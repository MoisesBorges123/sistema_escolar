<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions();
$link = $fn->conecta();
$campos_bd=['curso','nome_turma','dataAbertura','ativo'];
$valores=[];
$valores[]=['value'=>$_POST['curso'],'type'=>1];
$valores[]=['value'=>$_POST['turma'],'type'=>8];
$valores[]=['value'=>$_POST['inicio'],'type'=>8];
$valores[]=['value'=>1,'type'=>1];
$tabela='turmas';
$r=$fn->cadastrar1($campos_bd, $valores, $tabela);
$x = explode('.', $r);
if($x[0]!=5){
    $cadastrado = 1;
}else{
    $cadastrado = 0;
    if(date('m', strtotime($_POST['inicio']))>6){
        $semestre = 2;
    }else{
        $semestre = 1;
    }
    $ano = date('Y', strtotime($_POST['inicio']));
    

    $tabela="turma_periodos";
    $observacoes = $_POST['observacao'];
    if(empty($observacoes)){
        $observacoes = "-";
    }
    $campos_bd2=['turma','periodo','semestre','ano','obs'];;
    $valores2=[];
    $valores2[]=['value'=>$x[1],'type'=>1];
    $valores2[]=['value'=>$_POST['periodo'],'type'=>1];
    $valores2[]=['value'=>$semestre,'type'=>1];
    $valores2[]=['value'=>$ano,'type'=>1];    
    $valores2[]=['value'=>$observacoes,'type'=>8];
    $r2 = $fn->cadastrar1($campos_bd2, $valores2, $tabela);
}

 $resposta=array('cadastrado'=>$cadastrado,'retorno'=>$r,'mensagem'=>$fn->mensagens_erro($r));
 


echo json_encode($resposta);
//echo json_encode(array('retorno'=>$r));
//echo json_encode(array('mensagem'=>$fn->mensagens_erro($r)));
