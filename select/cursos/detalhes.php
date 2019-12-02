<?php
require_once '../../funcoes/php/myfuctions.php';
$fn = new myfunctions;
$fn->construtor();
$titulo_aba = 'Mão na Roda - Sistema Escolar';

if(!empty($_GET['curso'])){
    $curso = $_GET['curso'];
    $link = $fn->conecta();
    $sql="select * from cursos where id_curso='".$curso."'";
    $resultado=mysqli_query($link, $sql);
    while($row= mysqli_fetch_assoc($resultado)){
        $nome_curso=$row['nome_curso'];
        $periodos=$row['duracao'];
        
    }
ob_start(); //INICIO CONTEÚDO===================================================
?>
<div class="card">
    <div class="card-header bg-warning">
        <h4 class="text-white"><?= utf8_encode($nome_curso) ?></h4>
    </div>
    <div class="card-body">
        
        
        
        <div class="accordion" id="accordionExample">
             <?php
        for($i=1;$periodos>=$i;$i++){
      ?>
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?= $i ?>" aria-expanded="true" aria-controls="collapseOne<?= $i ?>">
          Periodo <?= $i ?>
        </button>
      </h2>
    </div>

    <div id="collapseOne<?= $i ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <div class='row'>
              <div class="col-md-8">
                  <p>Disciplinas</p>                  
                  <ul>
                      <?php 
                      $sql = "select * from matriz where curso = '".$curso."' and periodo_referente = '".$i."'";
                      $resultado2=mysqli_query($link, $sql);
                      if(mysqli_affected_rows($link)>0){
                           while($row= mysqli_fetch_assoc($resultado2)){
                                $id_matriz = $row['id_matriz'];
                            }
                            $sql="select * from matriz_disciplina, disciplina where matriz_disciplina.disciplina=disciplina.id_disciplina and matriz_disciplina. matriz='".$id_matriz."'";
                            $resultado = mysqli_query($link, $sql);
                            while($row = mysqli_fetch_assoc($resultado)){
                                echo"<li><p>".utf8_encode($row['nome_disciplina'])."&nbsp;&nbsp; <i class='text-danger la la-times-circle btn-deleta-disciplina' data-id='".$row['id_matrizDisciplina']."'></i> </p> </li>";
                            }
                      }else{
                          echo"<li style=\"list-style: none;\"><p  class='h4'>Ementa não cadastrada</p></li>";
                      }
                      ?>
                      
                      <li id="disciplina<?=$i?>" class="li-disciplina2" style="list-style: none;">
                          
                              <div class="row">
                                  <div class="col-md-8">
                                      <input class="form-control" id="txt_disciplina2<?=$i?>" id="txt_disciplina2<?=$i?>"/>&nbsp;                                  
                                  </div>
                                  <div class="col-md-2">
                                      <button data-id="<?=$i?>" class="btn btn-primary btn-adicionar2">Adicionar</button>
                                  </div>
                                  <div class="col-md-2">
                                      <button  class="btn btn-danger btn-cancelar" data-id="<?=$i?>">Cancelar</button>
                                  </div>
                              </div>
                  
                      </li>
                      
                      <li id="disciplina2<?=$i?>" class="li-disciplina1" style="list-style: none;">
                          <div class="row">
                              <div class="col-md-10">
                                  <select class="form-control disciplina" id="txt_disciplina1<?=$i?>" data-id="<?=$i?>">
                                      <option value="">Selecione</option>
                                      <?php
                                      $sql="select * from disciplina where ativo='1' order by nome_disciplina asc";
                                      $resultado = mysqli_query($link, $sql);
                                      while ($row= mysqli_fetch_assoc($resultado)){
                                          echo"<option value ='".$row['id_disciplina']."'>".utf8_encode($row['nome_disciplina'])."</option>";
                                      }                                      
                                      ?>
                                      <option value="-1">Outro</option>
                                  </select>
                              </div>
                              <div class="col-md-2">
                                  <button  data-id="<?=$i?>" class="btn btn-primary btn-adicionar1">Adicionar</button>
                              </div>
                          </div>
                      </li>
                  </ul>                  
              </div>
          </div>
      </div>
    </div>
  </div>
            
            <?php
        }
        ?>

 

</div>
        
        
            
          
          
        </div>
        <div class="card-category"></div>
    </div>
    
</div>
<?php
$conteudo = ob_get_clean(); //FIM CONTEÚDO=======================================
}
ob_start();
$variaveis1=['txt_disciplina','curso','periodo'];
$resposta='teste';
$resposta2=" location.reload();";
$load='teste';
$page="../../insert/disciplina/salvar.php";
$namefunction="cadastrarDisciplina";
$tipoEnvio='HTML';
$fn->ajax_buscar2($variaveis1, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);

$variaveis1=['txt_disciplina','curso','periodo'];
$resposta='teste';
$resposta2=" location.reload();";
$load='teste';
$page="../../insert/disciplina/salvar2.php";
$namefunction="cadastrarDisciplina";
$tipoEnvio='HTML';
$fn->ajax_buscar2($variaveis1, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);

$variaveis1=['id'];
$resposta='teste';
$resposta2=" location.reload();";
$load='teste';
$page="../../delete/disciplina/excluir.php";
$namefunction="deletaDisciplina";
$tipoEnvio='HTML';
$fn->ajax_buscar2($variaveis1, $resposta, $resposta2, $load, $page, $namefunction, $tipoEnvio);
?>
<script>
    curso ="<?=$curso?>"
</script>
<script src="js/detalhes.js" type="text/javascript"></script>
<?php
$jquery = ob_get_clean();
require_once '../../layouts/estilo_home/pg01.php';