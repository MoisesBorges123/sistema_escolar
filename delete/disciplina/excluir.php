<?php
require '../../funcoes/php/myfuctions.php';
$fn = new myfunctions();
$link = $fn->conecta();
echo$sql = "delete from matriz_disciplina where id_matrizDisciplina='".$_POST['id']."'";
mysqli_query($link, $sql);

