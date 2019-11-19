$(document).ready(function(){
        $('#table_id0').DataTable();
        carregaTable('tese');
        $(document).on('click','#novoCurso',function(){
           const { value: formValues } =  Swal.fire({
          title: 'Abrir Turma',
          html:
            '<label class="label-modal">Nome da Turma</label><input placeholder="Nome da Turma" id="txt_nomeTurma" class="swal3-input"><br>' +
            '<label class="label-modal">Data Abertura</label><input placeholder="Periodo Inicio" type="date" id="txt_periodoInicio" class="swal3-input"><br>' +                     
            '<label class="label-modal">Curso</label><select class="swal3-input" id="txt_cursos"><option value="">Selecione</option></select><br>',
            
          focusConfirm: false,
          preConfirm: () => {
            
              var nome=document.getElementById('txt_nomeTurma').value;
              var inicio=document.getElementById('txt_periodoInicio').value;              
              var curso=document.getElementById('txt_cursos').value;
              
              cadastraTurma(nome,inicio,curso);
          }
        })

        if (formValues) {
          Swal.fire(JSON.stringify(formValues));
         
        }
        carregaSelect_cursos();
        
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
        
        
    
    });
    