$(document).ready(function(){
         $('.li-disciplina2').hide();
         
    $(document).on('input','.disciplina',function(){            
        var disciplina2 = 'disciplina2'+$(this).data('id');
        var disciplina = 'disciplina'+$(this).data('id');
    
        if($(this).val()==-1){
            $('#'+disciplina2).hide(300);
            $('#'+disciplina).show(300);
            $(this).val("");
        }else{
            if(disciplina.hide()==true){
                $('#'+disciplina2).show(300);                
                $('#'+disciplina).hide(300);               
                
            }
        }
  
    });
    
    
    $(document).on('click','.btn-cancelar',function(){
        var disciplina2 = 'disciplina2'+$(this).data('id');
        var disciplina = 'disciplina'+$(this).data('id');
        
               
               $('#'+disciplina2).show(300);
                $('#'+disciplina).hide(300); 

  
        
    });
    
    $(document).on('click','.btn-adicionar1',function(){
        var periodo = $(this).data('id');
        var disciplina1 = 'txt_disciplina1'+periodo;
        var disciplina = $('#'+disciplina1).val();       
        if (disciplina!= null){
            
        cadastrarDisciplina(disciplina,curso,periodo);
        }
    });
    $(document).on('click','.btn-adicionar2',function(){
        var periodo = $(this).data('id');
        var disciplina1 = 'txt_disciplina2'+periodo;
        var disciplina = $('#'+disciplina1).val();        
        if (disciplina!= null){
            cadastrarDisciplina(disciplina,curso,periodo);
            
        }
    });
    
    $(document).on('click','.btn-deleta-disciplina', function(){
       var disciplina = $(this).data('id');
       deletaDisciplina(disciplina);
    });
    
    });
    