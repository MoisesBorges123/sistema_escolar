

<?php

require_once './myfuctions.php';
$fn = new myfunctions;
$link = $fn->conecta();

//$fn->construtor2();

//$sql="select * from produtos, preco_compra where preco_compra.produto=produtos.id_produtos";
//$resultado= mysqli_query($link, $sql);
//while($row= mysqli_fetch_row($resultado)){
//    $sql="update vendas_produtos set preco_compra='".$row[6]."' where produto='".$row[0]."'";
//    mysqli_query($link, $sql);
//}
// 
// 
// 
//$user='root';
//$senha='';
//$bd ='marketing_hagil';
//$server='localhost';
//$arquivo="backup_".date('d-m-Y__H_i_s',time()).".sql";
////system("mysqldump -h $server -u $user -p $senha  $bd > $arquivo ", $return_var);
//system("mysql> show databases ", $return_var);
//echo $return_var;




        $db_host = '127.0.0.1'; //Host del Servidor MySQL
	$db_name = 'marketing_hagil'; //Nombre de la Base de datos
	$db_user = 'root'; //Usuario de MySQL
	$db_pass = ''; //Password de Usuario MySQL
	
	$fecha = date("Ymd-His"); //Obtenemos la fecha y hora para identificar el respaldo
 
	// Construimos el nombre de archivo SQL Ejemplo: mibase_20170101-081120.sql
	$salida_sql = "backup_".date('d-m-Y__H_i_s',time()).".sql"; 
	
	//Comando para genera respaldo de MySQL, enviamos las variales de conexion y el destino
	$dump = "mysqldump --h$db_host -u$db_user -p$db_pass --opt $db_name > $salida_sql";
	system($dump, $output); //Ejecutamos el comando para respaldo
	
	$zip = new ZipArchive(); //Objeto de Libreria ZipArchive
	
	//Construimos el nombre del archivo ZIP Ejemplo: mibase_20160101-081120.zip
	$salida_zip = $db_name.'_'.$fecha.'.zip';
	
	if($zip->open($salida_zip,ZIPARCHIVE::CREATE)===true) { //Creamos y abrimos el archivo ZIP
		$zip->addFile($salida_sql); //Agregamos el archivo SQL a ZIP
		$zip->close(); //Cerramos el ZIP
		unlink($salida_sql); //Eliminamos el archivo temporal SQL
		header ("Location: $salida_zip"); // Redireccionamos para descargar el Arcivo ZIP
		} else {
		echo 'Error'; //Enviamos el mensaje de error
	}