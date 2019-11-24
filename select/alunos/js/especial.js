
function dadosCarregados(nome,matricula,telefone,id){
        var update = null;
     
             const { value: formValues } =  Swal.fire({
          title: 'Aluno '+nome,
          html:
            '<label class="label-modal">Noma do Aluno</label><input value="'+nome+'" placeholder="Nome Completo" id="swal-input1" class="swal3-input"><br>' +
            '<label class="label-modal">Nº Matricula</label><input type="number" value='+matricula+' placeholder="" id="swal-input2" class="swal3-input"><br>' +            
            '<label class="label-modal">Contato</label><input type="text" value="'+telefone+'" placeholder="Telefone" id="swal-input3" class="swal3-input"><br>' ,            
            
            
         
          focusConfirm: false,
         
          preConfirm: () => {
            
              var nome2=document.getElementById('swal-input1').value;
              var matricula2 = document.getElementById('swal-input2').value;
              var telefone2=document.getElementById('swal-input3').value;
              
              
          
                  editaAluno(nome2,matricula2,telefone2,id);
                          
                 
          }         
          
        })
          
          

        if (formValues) {
          //Swal.fire(JSON.stringify(formValues));          
        }
     
        
        }
