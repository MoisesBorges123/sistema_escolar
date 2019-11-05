<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$fn->logout();
header("location: ../../index.php");
