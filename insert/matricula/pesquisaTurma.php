<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$fn->conecta();
$sql ="select * from turma, periodos_turma where turma.curso = '".$_POST['curso']."' and turmas.id_turma = periodos_turma.turma";
$resultado = mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
    echo "<option value=''>Selecione</option>";
    while ($row= mysqli_fetch_assoc($resultado)){
        echo"<option value='".$row['id_turma']."'>".$row['periodo']."</option>";
    }
} else{
    echo "<option value=''>Selecione</option>";
    
}

