
function dadosCarregados(nome,matricula,telefone,id){
        var update = null;
             const { value: formValues } =  Swal.fire({
          title: 'Aluno '+nome,
          html:
            '<label class="label-modal">Noma da Turma</label><input value="'+nome+'" placeholder="Nome do Curso" id="swal-input1" class="swal3-input"><br>' +
            '<label class="label-modal">Data Abertura</label><input type="date" value='+matricula+' placeholder="" id="swal-input2" class="swal3-input"><br>' +            
            '<label class="label-modal">Data Conclusão</label><input type="date" value='+telefone+' placeholder="" id="swal-input5" class="swal3-input"><br>' +            
            
            
         
          focusConfirm: false,
         
          preConfirm: () => {
            
              var nome2=document.getElementById('swal-input1').value;
              var inicio2 = document.getElementById('swal-input2').value;
              var curso2=document.getElementById('swal-input4').value;
              var fim2=document.getElementById('swal-input5').value;
              console.log(nome2);
              
          
                  editaTurma(nome2,inicio2,fim2,curso2,id);
                          
                 
          }         
          
        })
          
          if(update!=null && update==0){
                alert('deu certo');
           }else if(update==1){ 
                alert('deu errado');
               
           }

        if (formValues) {
          //Swal.fire(JSON.stringify(formValues));          
        }
        
         var page = './carregaSelect_cursos.php';
               $.ajax({
                   type: 'POST',
                   dataType:'html',
                   url:page,
                   beforeSend:function(){
                     Swal.showLoading(); 
                   },success:function(msg){                
                                 
                    $('#swal-input4').html(msg);
                    $('#swal-input4').val(curso);
                    Swal.hideLoading() ;
                       }
        
    });
        
        }
