<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$fn->construtor();
$titulo_aba = 'Mão na Roda - Sistema Escolar';


            
ob_start(); //INICIO CONTEÚDO===================================================
?>
<nav class="navbar navbar-header navbar-expand-lg bg-green nav-secon" >
    <div class="container-fluid">
        <div class="navbar-left navbar-form nav-search mr-md-3 ">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="text-white">Alunos</h4>                    
                </div>
                <div class="col-md-4">
                    <button id="novoAluno" class="btn btn-info">Novo Aluno</button>                    
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
            <th>Telefone</th>            
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
<script src="js/especial.js" type="text/javascript"></script>
<?php
$variaveis1=null;
$resposta='mytable';
$load="carregando";
$page='./carregaTable.php';
$namefunction='carregaTable';
$fn->ajax_buscar($variaveis1, $resposta, $load, $page, $namefunction);

$variaveis1=null;
$resposta='txt_cursos';
$load="carregando";
$page='./carregaSelect_cursos.php';
$namefunction='carregaSelect_cursos';
$fn->ajax_buscar($variaveis1, $resposta, $load, $page, $namefunction);

$variaveis3 = ['aluno', 'matricula', 'telefone'];
$resposta = 'resposta';
$resposta2 = "\n carregaTable();"
        . "\n retorno1(msg['mensagem'].status,msg['mensagem'].mensagen,msg['mensagem'].icone,3000)";
$load = "carregando";
$page = '../../insert/aluno/salvar.php';
$namefunction = 'cadastraAluno';
$tipoEnvio = 'JSON';
$fn->ajax_buscar2($variaveis3, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);

$variaveis6 = ['nome', 'matricula','telefone','id'];
$resposta = 'x';
$resposta2 = "\n carregaTable();"
        . "\n retorno1(msg['mensagem'].status,msg['mensagem'].mensagen,msg['mensagem'].icone,3000)";
$load = "carregando";
$page = '../../update/aluno/atualizar.php';
$namefunction = 'editaAluno';
$tipoEnvio = 'JSON';
$fn->ajax_buscar2($variaveis6, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);

$variaveis4 = ['id'];
$resposta = 'x';
$load = "carregando";
$tipoEnvio = 'JSON';
$page = '../../update/aluno/carregaDados.php';
$namefunction = 'carregaAluno';
$resposta2 = "if(msg.erro==0){"
        . " dadosCarregados(msg.nome,msg.matricula,msg.telefone,id);"
        . "}else{"
        . "retorno2('OPS!','Não foi possivel carregar os dados desse registro','error');"
        . "}";
$fn->ajax_buscar2($variaveis4, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);

$variaveis4=['id','aluno'];
$resposta='resposta';
$load="carregando";
$page='../../delete/aluno/excluir.php';
$namefunction='deletaAluno';
$tipoEnvio = 'JSON';
$resposta2=" \n carregaTable(); "        
        . "\n retorno2(msg.titulo,msg.mensagem,msg.status); ";
$fn->ajax_buscar2($variaveis4, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);


?>

<script src="../../layouts/style_padrao/assets/js/plugin/jquery-sweetalert2/sweetalert2.all.js" type="text/javascript"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-sweetalert2/sweetalert2.js" type="text/javascript"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-dataTable/jquery.dataTables.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="js/controles.js" type="text/javascript"></script>

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
