function resposta(status,mensagem,icone,tempo){
     var placementFrom = 'top';
		var placementAlign = 'right';
		var state = status;        
		var content = {};

		content.message = mensagem;
		content.title = '';
		
		content.icon = icone;
		
		
		content.url = '';
		content.target = '_blank';
               
		$.notify(content,{
			type: state,
			placement: {
				from: placementFrom,
				align: placementAlign
			},
                        offset: 20,
                        spacing: 10,
                        allow_dismiss: true,
                        z_index: 1031,
                        delay: 7000,
			time: tempo,
                        showProgressbar: false,
                        
                        animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                        },
                        
                        
                        
                });
}

function resposta2(titulo,mensagem,status){
                 Swal.fire(
                    titulo,
                    mensagem,
                    status
                );
}

function dadosCarregados(nome,inicio,fim,curso,id){
        var update = null;
             const { value: formValues } =  Swal.fire({
          title: 'Turma de '+nome,
          html:
            '<label class="label-modal">Noma da Turma</label><input value="'+nome+'" placeholder="Nome do Curso" id="swal-input1" class="swal3-input"><br>' +
            '<label class="label-modal">Data Abertura</label><input type="date" value='+inicio+' placeholder="" id="swal-input2" class="swal3-input"><br>' +            
            '<label class="label-modal">Data Conclusão</label><input type="date" value='+fim+' placeholder="" id="swal-input5" class="swal3-input"><br>' +            
            '<label class="label-modal">Curso</label><select class="swal3-input" id="swal-input4"><option value="">Selecione</option></select><br>',
            
         
          focusConfirm: false,
         
          preConfirm: () => {
            
              var nome2=document.getElementById('swal-input1').value;
              var inicio2 = document.getElementById('swal-input2').value;
              var curso2=document.getElementById('swal-input4').value;
              var fim2=document.getElementById('swal-input5').value;
              
              
          
                  editaTurma(nome2,inicio2,fim,curso,id);
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
