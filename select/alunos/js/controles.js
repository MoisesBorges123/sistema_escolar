$(document).ready(function(){
        $('#table_id0').DataTable();
        carregaTable('tese');
        $(document).on('input','#txt_telefone',function(){
            phoneValidate($(this));
        });
        $(document).on('click','#novoAluno',function(){
            var matricula = Math.trunc(gerarMatricula());            
           const { value: formValues } =  Swal.fire({
          title: 'Abrir Turma',
          html:
            '<label class="label-modal">Nome do Aluno</label><input placeholder="Nome Completo" id="txt_nomeAluno" class="swal3-input"><br>' +
            '<label class="label-modal">Matricula</label><input  type="number" id="txt_matricula" value='+matricula+' class="swal3-input"><br>' +                     
            '<label class="label-modal">Telefone</label><input type="text" id="txt_telefone" class="swal3-input"><br>',                                 
            
          focusConfirm: false,
          preConfirm: () => {
            
              var nome=document.getElementById('txt_nomeAluno').value;
              var matricula=document.getElementById('txt_matricula').value;              
              var telefone=document.getElementById('txt_telefone').value;
              
              cadastraAluno(nome,matricula,telefone);
          }
        })
        
        if (formValues) {
          Swal.fire(JSON.stringify(formValues));
         
        }
        carregaSelect_cursos();
        phoneValidate($(this));
        
        });
        $(document).on('click', '.btn-remover', function () {
         
            var aluno = $(this).data('nome');
            
            Swal.fire({
                title: 'Tem Certeza que deseja excluir o aluno ' + aluno + '?',
                text: "Esse aluno será excluido permanentemente do banco de dados!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, Excluir!',
                 
            }).then((result) => {
                if (result.value) {

                    var id = $(this).data('cod');
            
                    
                    deletaAluno(id,aluno);
                       
                    
                    
                }
            });
        });
        $(document).on('click', '.btn-editar', function () {
            var id = $(this).data('cod');
            carregaTurma(id);
           

        });
        
        
    
    });
    