<?php

require '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link = $fn->conecta();
$sql = "select * from cursos where id_curso='".$_POST['curso']."'";
$resultado = mysqli_query($link, $sql);
while($row= mysqli_fetch_assoc($resultado)){
    $nome_curso = utf8_encode($row['nome_curso']);
}


$campos_bd=['nome_disciplina','ativo'];
$valores=[];
$valores[]=['value'=>$_POST['txt_disciplina'],'type'=>8];
$valores[]=['value'=>1,'type'=>1];
$tabela="disciplina";
$r=$fn->cadastrar1($campos_bd, $valores, $tabela);
$resposta1=explode('.', $r);
$id_disciplina = $resposta1[1];
echo$sql = "select * from matriz where curso = '".$_POST['curso']."' and periodo_referente = '".$_POST['periodo']."'"; echo"<br>";
$resultado2=mysqli_query($link, $sql);
if(mysqli_affected_rows($link)<=0){
    $campos_bd2=['nome_matriz','periodo_referente','curso'];
    $valores2=[];
    $valores2[]=['value'=>"Ementa do curso de $nome_curso do periodo ".$_POST['periodo'],'type'=>8];
    $valores2[]=['value'=>$_POST['periodo'],'type'=>1];
    $valores2[]=['value'=>$_POST['curso'],'type'=>1];
    $tabela2="matriz";
    $r2=$fn->cadastrar1($campos_bd2, $valores2, $tabela2);
    $resposta2=explode('.', $r2);
    $id_matriz = $resposta2[1];
    echo$r2;
}else{
    echo"<br>";
    while($row= mysqli_fetch_assoc($resultado2)){
        echo $id_matriz = $row['id_matriz'];
    }
}
    $campos_bd3=['matriz','disciplina'];
    $valores3=[];
    $valores3[]=['value'=>$id_matriz,'type'=>1];
    $valores3[]=['value'=>$id_disciplina,'type'=>1];    
    $tabela3="matriz_disciplina";
    $r3=$fn->cadastrar1($campos_bd3, $valores3, $tabela3);
    
    echo $r3;



