function dadosCarregados(nome,sigla,duracao,area,id){
        var update = null;
             const { value: formValues } =  Swal.fire({
          title: 'Curso de '+nome,
          html:
            '<label class="label-modal">Curso</label><input value="'+nome+'" placeholder="Nome do Curso" id="swal-input1" class="swal3-input"><br>' +
            '<label class="label-modal">Sigla</label><input value='+sigla+' placeholder="Sigla do Curso" id="swal-input2" class="swal3-input"><br>' +
            '<label class="label-modal">Nº Periodos</label><input value='+duracao+' placeholder="Duração (nº períodos)" type="number" id="swal-input3" class="swal3-input"><br>'+            
            '<label class="label-modal">Area de Atuação</label><select class="swal3-input" id="swal-input4"><option value="">Selecione</option></select><br>',
            
         
          focusConfirm: false,
         
          preConfirm: () => {
            
              var nome2=document.getElementById('swal-input1').value;
              var sigla2 = document.getElementById('swal-input2').value;
              var duracao2=document.getElementById('swal-input3').value;
              var area2=document.getElementById('swal-input4').value;              
              
          
                  update = editaCurso(nome2,sigla2,duracao2,area2,id);
                  console.log(update);
                  if(update==0 && update!=null){
                         $('#respostas').html("<div class='alert alert-success'>Registro editado com sucesso</d>");
                      setTimeout(function(){
                         $('#respostas').html("");
                      },3000);
                     
                  }else{
                      
                  }
                 
                 
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
        
         var page = './carregaSelect_areas.php';
               $.ajax({
                   type: 'POST',
                   dataType:'html',
                   url:page,
                   beforeSend:function(){
                     Swal.showLoading(); 
                   },success:function(msg){                
                                 
                    $('#swal-input4').html(msg);
                    $('#swal-input4').val(area);
                    Swal.hideLoading() ;
                       }
        
    });
        
        }