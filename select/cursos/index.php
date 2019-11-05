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
                <div class="col-md-7">
                    <h4 class="text-white">Meus Cursos</h4>                    
                </div>
                <div class="col-md-4">
                    <button id="novoCurso" class="btn btn-info">Novo Curso</button>                    
                </div>
            </div>
        </div>      
    </div>
</nav>
<table id="table_id" class="table table-active table-warning table-head-bg-warning table-light">
    <thead>
        <tr>
            <th>Curso</th>
            <th>Sigla</th>
            <th>Duração</th>
            <th>Aréa</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody id="mytable">
        
    </tbody>
</table>

<?php
$conteudo = ob_get_clean();//FIM CONTEÚDO=======================================




ob_start();//JAVASCRIPT INCIO===================================================
$variaveis1=null;
$resposta='mytable';
$load="carregando";
$page='./carregaTable.php';
$namefunction='carregaTable';
$fn->ajax_buscar($variaveis1, $resposta, $load, $page, $namefunction);

$variaveis1=null;
$resposta='txt_areas';
$load="carregando";
$page='./carregaSelect_areas.php';
$namefunction='carregaSelect_areas';
$fn->ajax_buscar($variaveis1, $resposta, $load, $page, $namefunction);
?>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-sweetalert2/sweetalert2.all.js" type="text/javascript"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-sweetalert2/sweetalert2.js" type="text/javascript"></script>
<script src="../../layouts/style_padrao/assets/js/plugin/jquery-dataTable/jquery.dataTables.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#table_id').DataTable();
        carregaTable('tese');
        $(document).on('click','#novoCurso',function(){
           const { value: formValues } =  Swal.fire({
          title: 'Novo Curso',
          html:
            '<input placeholder="Nome do Curso" id="swal-input1" class="swal3-input"><br>' +
            '<input placeholder="Sigla do Curso" id="swal-input4" class="swal3-input"><br>' +
            '<input placeholder="Duração (mêses)" type="number" id="swal-input2" class="swal3-input"><br>'+
            '<input placeholder="Área de Atuação (mêses)" type="number" id="swal-input3" class="swal3-input"><br>'+
            '<select class="swal3-input" id="txt_areas"><option value="">Selecione</option></select><br>',
            
          focusConfirm: false,
          preConfirm: () => {
            return [
              document.getElementById('swal-input1').value,
              document.getElementById('swal-input2').value,
              document.getElementById('swal-input3').value,
              document.getElementById('swal-input4').value
            ]
          }
        })

        if (formValues) {
          Swal.fire(JSON.stringify(formValues))
        }
        carregaSelect_areas();
        });
    });
</script>
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
