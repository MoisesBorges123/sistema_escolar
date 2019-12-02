<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$fn->construtor();
$titulo_aba = 'Mão na Roda - Sistema Escolar';
$link = $fn->conecta();
$turma = $_GET['turma'];
$sql = "select * from turmas where id_turma='".$turma."'";
$resultado=mysqli_query($link, $sql);
if(mysqli_affected_rows($link)>0){
    while($row= mysqli_fetch_assoc($resultado)){
        $nome_turma = $row['nome_turma'];        
    }
}else{
    $nome_turma="Turma sem nome (erro)";
}

            
ob_start(); //INICIO CONTEÚDO===================================================
?>
<nav class="navbar navbar-header navbar-expand-lg bg-green nav-secon" >
    <div class="container-fluid">
        <div class="navbar-left navbar-form nav-search mr-md-3 ">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="text-white"><?=$nome_turma?></h4>                    
                </div>
                <div class="col-md-4">
                    <button id="novoCurso" class="btn btn-info">Matricula Aluno</button>                    
                </div>
            </div>
        </div>      
    </div>
</nav>
<table id="table_id" data-erro="" class="table table-warning table-head-bg-warning table-light">
    <thead>
        <tr>
            <th>Matricula</th>
            <th>Aluno</th>
            <th class="text-center" >Ações</th>
        </tr>
    </thead>
    <tbody id="mytable">
        
    </tbody>
</table>

<?php
$conteudo = ob_get_clean();//FIM CONTEÚDO=======================================




ob_start();//JAVASCRIPT INCIO===================================================
?>

<?php
echo "<script>"
. "turma=$turma;"

. "</script>";
$variaveis1=['turma'];
$resposta='mytable';
$load="carregando";
$page='./carregaTable_matriculados.php';
$namefunction='carregaTable';
$fn->ajax_buscar($variaveis1, $resposta, $load, $page, $namefunction);


$variaveis1=['aluno'];
$resposta='mytable';
$load="carregando";
$page='./carregaTable_matriculados.php';
$namefunction='carregaTable';
$fn->ajax_buscar($variaveis1, $resposta, $load, $page, $namefunction);



?>

<script src="../../layouts/style_padrao/assets/js/plugin/jquery-sweetalert2/sweetalert2.all.js" type="text/javascript"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-sweetalert2/sweetalert2.js" type="text/javascript"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-dataTable/jquery.dataTables.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="js/controles2.js" type="text/javascript"></script>

<?php
$jquery = ob_get_clean();//JAVA SCRIPT FIM======================================




ob_start();//CSS INICIO=========================================================
?>
<link href="../../layouts/style_padrao/assets/css/sweetalert2.css" rel="stylesheet" type="text/css"/>
<link href="../../layouts/style_padrao/assets/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<style>
    input{
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;

    }
    select{
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;

    }
    .dataTables_wrapper label{
        
            color:#fff !important;
            font-size: 17px !important;
            text-align: left !important;
        
    }
</style>
<?php
$style = ob_get_clean();//CSS FIM===============================================


require_once '../../layouts/estilo_home/pg01.php';
?>
