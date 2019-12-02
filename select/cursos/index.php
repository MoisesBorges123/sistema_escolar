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
                    <h4 class="text-white">Meus Cursos</h4>                    
                </div>
                <div class="col-md-4">
                    <button id="novoCurso" class="btn btn-info">Novo Curso</button>                    
                </div>
            </div>
        </div>      
    </div>
</nav>
<table id="table_id" class=" table  table-warning table-head-bg-warning table-light">
    <thead>
        <tr>
            <th>Curso</th>
            <th>Sigla</th>
            <th>Duração</th>
            <th>Aréa de Atuação</th>
            <th >Ações</th>
        </tr>
    </thead>
    <tbody id="mytable">

    </tbody>
</table>
<div id="respostas"></div>
<?php
$conteudo = ob_get_clean(); //FIM CONTEÚDO=======================================




ob_start(); //JAVASCRIPT INCIO===================================================

$variaveis1 = null;
$resposta = 'mytable';
$load = "carregando";
$page = './carregaTable.php';
$namefunction = 'carregaTable';
$fn->ajax_buscar($variaveis1, $resposta, $load, $page, $namefunction);

$variaveis2 = null;
$resposta = 'swal-input4';
$load = "carregando";
$page = './carregaSelect_areas.php';
$namefunction = 'carregaSelect_areas';
$fn->ajax_buscar($variaveis2, $resposta, $load, $page, $namefunction);


$variaveis3 = ['nome_curso', 'sigla_curso', 'duracao', 'area'];
$resposta = 'x';
$resposta2 = " \n carregaTable(); "
        . "retorno1(msg['mensagem'].status,msg['mensagem'].mensagen,msg['mensagem'].icone,3000);";
$load = "carregando";
$page = '../../insert/curso/salvar.php';
$namefunction = 'cadastraCurso';
$tipoEnvio = 'JSON';
$fn->ajax_buscar2($variaveis3, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);

$variaveis6 = ['nome_curso', 'sigla_curso', 'duracao', 'area','id'];
$resposta = 'x';
$resposta2 = "\n carregaTable();"
        . "\n retorno1(msg['mensagem'].status,msg['mensagem'].mensagen,msg['mensagem'].icone,3000)";
$load = "carregando";
$page = '../../update/curso/atualizar.php';
$namefunction = 'editaCurso';
$tipoEnvio = 'JSON';
$fn->ajax_buscar2($variaveis6, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);


$variaveis2=['id'];
$resposta='x';
$load="carregando";
$page='../../delete/curso/excluir.php';
$namefunction='deletaCurso';
$tipoEnvio = 'JSON';
$resposta2=" \n carregaTable();"
        . " \n retorno2(msg.titulo,msg.mensagem,msg.status); ";
$fn->ajax_buscar2($variaveis2, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);



$variaveis4 = ['id'];
$resposta = 'x';
$load = "carregando";
$tipoEnvio = 'JSON';
$page = '../../update/curso/carregaDados.php';
$namefunction = 'carregaCurso';
$resposta2 = "dadosCarregados(msg.nome,msg.sigla,msg.duracao,msg.area,id);";
$fn->ajax_buscar2($variaveis4, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);
?>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-sweetalert2/sweetalert2.all.js" type="text/javascript"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-sweetalert2/sweetalert2.js" type="text/javascript"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-dataTable/jquery.dataTables.js" type="text/javascript"></script>
<script src="js/curso.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $('#table_id0').DataTable({
            searching: true,
            ordering: true,
            select: true
        });
        carregaTable();
        $(document).on('click', '#novoCurso', function () {
            const {value: formValues} = Swal.fire({
                title: 'Novo Curso',
                html:
                        '<input placeholder="Nome do Curso" id="swal-input1" class="swal3-input"><br>' +
                        '<input placeholder="Sigla do Curso" id="swal-input2" class="swal3-input"><br>' +
                        '<input placeholder="Duração (nº períodos)" type="number" id="swal-input3" class="swal3-input"><br>' +
                        '<select class="swal3-input" id="swal-input4"><option value="">Selecione</option></select><br>',

                focusConfirm: false,
                preConfirm: () => {

                    var nome = document.getElementById('swal-input1').value;
                    var sigla = document.getElementById('swal-input2').value;
                    var duracao = document.getElementById('swal-input3').value;
                    var area = document.getElementById('swal-input4').value;
                    cadastraCurso(nome, sigla, duracao, area);
                   


                }
            })

            if (formValues) {
                Swal.fire(JSON.stringify(formValues));

            }
            carregaSelect_areas();

        });
        $(document).on('click', '.btn-remover', function () {
         
            var curso = $(this).data('nome');
            
            Swal.fire({
                title: 'Tem Certeza que deseja excluir o curso de ' + curso + '?',
                text: "Esse curso será excluido permanentemente do banco de dados!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, Excluir!',
                 
            }).then((result) => {
                if (result.value) {

                    var id = $(this).data('cod');           
                    
                   deletaCurso(id);
                   
                    
                }
            });
        });
        $(document).on('click', '.btn-editar', function () {
            var id = $(this).data('cod');
            carregaCurso(id);
           

        });
        $(document).on('click','.btn-detalhes',function(){
            

        });


    });
</script>
<?php
$jquery = ob_get_clean(); //JAVA SCRIPT FIM======================================




ob_start(); //CSS INICIO=========================================================
?>
<link href="../../layouts/style_padrao/assets/css/sweetalert2.css" rel="stylesheet" type="text/css"/>
<link href="../../layouts/style_padrao/assets/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<style>
    .label-modal{
        float: left;
        font-size: 17px;
        font-weight: 400;
    }
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
    .nav-secon{
        margin-bottom: 50px;
    }
</style>
<?php
$style = ob_get_clean(); //CSS FIM===============================================


require_once '../../layouts/estilo_home/pg01.php';
?>
