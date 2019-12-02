$(document).ready(function(){
        $('#table_id0').DataTable();
        carregaTable('tese');
        $(document).on('click','#novoCurso',function(){
          const { value: formValues } =  Swal.fire({
          title: 'Abrir Turma',
          html:
            '<label class="label-modal">Nome da Turma</label><input placeholder="Nome da Turma" id="txt_nomeTurma" class="swal3-input"><br>' +
            '<label class="label-modal">Data Abertura</label><input placeholder="Periodo Inicio" type="date" id="txt_periodoInicio" class="swal3-input"><br>' +                     
            '<label class="label-modal">Periodo</label><select id="txt_periodo" class="swal3-input"></select><br>' +                     
            '<label class="label-modal">Curso</label><select class="swal3-input" id="txt_cursos"><option value="">Selecione</option></select><br>'+
            '<label class="label-modal">Periodo</label><br><textarea style="width:100%;" rows="4" placeholder="Observações" id="txt_observacao" class="swal3-input"></textarea><br>',                     
            
          focusConfirm: false,
          preConfirm: () => {
            
              var nome=document.getElementById('txt_nomeTurma').value;
              var inicio=document.getElementById('txt_periodoInicio').value;              
              var curso=document.getElementById('txt_cursos').value;
              var periodo = document.getElementById('txt_periodo').value;
              var observacao = document.getElementById('txt_observacao').value;
              cadastraTurma(nome,inicio,curso,periodo,observacao);
              
          }
        })

        if (formValues) {
          Swal.fire(JSON.stringify(formValues));
         
        }
        carregaSelect_cursos();
        carregaPeriodos($('#txt_periodo'));
        });
        $(document).on('click', '.btn-remover', function () {
         
            var turma = $(this).data('nome');
            
            Swal.fire({
                title: 'Tem Certeza que deseja excluir a turma de ' + turma + '?',
                text: "Essa turma será excluido permanentemente do banco de dados!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, Excluir!',
                 
            }).then((result) => {
                if (result.value) {

                    var id = $(this).data('cod');
            
                    
                    deletaTurma(id,turma);
                       
                    
                    
                }
            });
        });
        $(document).on('click', '.btn-editar', function () {
            var id = $(this).data('cod');
            carregaTurma(id);
           

        });
        $(document).on('click','.btn-add-aluno',function(){
            var turma = $(this).data('cod');
            var matricula = Math.trunc(gerarMatricula());
            const { value: formValues } =  Swal.fire({
          title: 'Adicionar Aluno',
          html:
            '<label class="label-modal">Nome Aluno</label><select class="swal3-input" id="txt_alunos"><option value="">Selecione</option></select><br>',
            
            
          focusConfirm: false,
          preConfirm: () => {
            
              var nome = document.getElementById('txt_alunos').value;
              
              matriculaAluno(nome,turma,matricula);
          }
        })

        if (formValues) {
          Swal.fire(JSON.stringify(formValues));
         
        }
        carregaSelect_alunos();
        
        });
        
        $(document).on('click','.btn-detalhes',function(){
            var turma = $(this).data('cod');
            window.location.href="./detalhes.php?turma="+turma
        });
        
        function carregaPeriodos(campo){
            
                campo.append("<option value=''>Selecione</option>");
            for(var i=1; i<=12;i++){
                campo.append("<option value='"+i+"'>Periodo "+i+"</option>");
            }
            
        }
    
    });
    