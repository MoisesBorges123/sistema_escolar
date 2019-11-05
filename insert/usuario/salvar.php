<?php

require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$link=$fn->conecta();
$chave = explode("-", $_POST['txt_chave_acesso']);
if($chave[2]==0){
    $sql = "select * from administrar where token='".$_POST['txt_chave_acesso']."'";
    $resultado=mysqli_query($link, $sql);   
    
    if(mysqli_affected_rows($link)>0){        
        $campos_bd=['login','senha','nome_usuario','token'];
        $valores=[];
        $valores[]=['value'=>$user=$_POST['txt_login'],'type'=>8];
        $valores[]=['value'=>$senha= md5($_POST['txt_senha']),'type'=>8];
        $valores[]=['value'=>$_POST['txt_nome_completo'],'type'=>8];
        $valores[]=['value'=>$chave[0]."-".$chave[1]."-1",'type'=>8];
        $tabela = 'administrar';
        $condicao = "token='".$_POST['txt_chave_acesso']."'";
        $r=$fn->atualizar1($campos_bd, $valores, $tabela, $condicao);
        if($r=="19"){
            $link_destino = "../../select/pagina_inicial/home.php";
            $fn->login($user, $senha, $link_destino);

        }else{
            //header("location: ../../index.php?r=$r");
        }

        echo$r;                
    }else{
    }
}else{
    
}



