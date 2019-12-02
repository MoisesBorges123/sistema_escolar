$(document).ready(function(){
        $('#table_id0').DataTable();
        carregaTable(turma);
        
        $(document).on('click', '.btn-remover', function () {
         
            var aluno = $(this).data('nome');
            
            Swal.fire({
                title: 'Tem Certeza que deseja excluir o aluno ' + aluno + '?',
                text: "Essa turma será excluido permanentemente do banco de dados!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, Excluir!',
                 
            }).then((result) => {
                if (result.value) {

                    var id = $(this).data('cod');
            
                    
                    deletaAluno(id,turma);
                       
                    
                    
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
            var turma = $(this).datar('cod');
            window.location.href="./detalhes.php?turma="+turma
        });
        
        function carregaPeriodos(campo){
            
                campo.append("<option value=''>Selecione</option>");
            for(var i=1; i<=12;i++){
                campo.append("<option value='"+i+"'>Periodo "+i+"</option>");
            }
            
        }
        
        
        function deletaTurma(id,aluno) {
               var page = '../../delete/matricula/excluir.php';
                
               $.ajax({
                   type: 'POST',
                   dataType:'JSON',
                   cache:false,
                   url:page,
                   beforeSend:function(){
                      
                   },
                   data:{id:id},
                   success:function(msg){                   
                     carregaTable();
                  
                     var erro = msg.erro;
                     if(erro==0){
                        Swal.fire(
                            'Registro Excluido!',
                            'O <b>' + aluno + '</b> foi excluido com sucesso.',
                            'success'
                            );
                    
                    }else{
                        Swal.fire(
                            'OPS! Ocorreu um erro.',
                            'Não foi possível esse aluno <b>' + aluno + '</b>.',
                            'error'
                            );
                    
                    }
                     
                                            
                   }
               },'json');
               
           }
        
    
    });
    