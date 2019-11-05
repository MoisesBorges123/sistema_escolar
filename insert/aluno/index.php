<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$fn->construtor();
$titulo_aba = 'Mão na Roda - Sistema Escolar';

            
ob_start(); //INICIO CONTEÚDO
?>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h3>Novo Aluno</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php 
                        $label="Matricula";
                        $type = "text";
                        $id="txt_matricula";$name="txt_matricula";
                        $placeholder="0000000-00";
                        $tam=12;
                        $fn->insereINPUT($label, $type, $id, $name, $placeholder, $comentario='', $tam, $id_label='');
                        
                        $label="Nome";
                        $type = "text";
                        $id="txt_nome";$name="txt_nome";
                        $placeholder="Nome Completo";
                        $tam=12;
                        $fn->insereINPUT($label, $type, $id, $name, $placeholder, $comentario='', $tam, $id_label='');
                        
                        $label="Telefone";
                        $type = "text";
                        $id="txt_telefone";$name="txt_telefone";
                        $placeholder="(00) 0000-0000";
                        $tam=7;
                        $fn->insereINPUT($label, $type, $id, $name, $placeholder, $comentario='', $tam, $id_label='');
                        
                        $label="Curso";
                        $value = "id_curso";
                        $option="nome_curos";
                        $id="txt_curso";$name="txt_curso";
                        $placeholder="";
                        $tam=6;
                        $sql = "select * from cursos";
                        $fn->insereSELECT_1($sql, $value, $option, $label, $name, $id, $tam);
                        
                        $label="Turma";
                        $value = "id_turma";
                        $option="nome_turma";
                        $id="txt_nome";$name="txt_nome";
                        $placeholder="Nome Completo";
                        $tam=6;
                        $sql = "select * from turmas";
                        $fn->insereSELECT_1($sql, $value, $option, $label, $name, $id, $tam);
                    
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$conteudo = ob_get_clean();//FIM CONTEÚDO


require_once '../../layouts/estilo_home/pg01.php';
?>
