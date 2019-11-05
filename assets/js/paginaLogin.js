$(document).ready(function(){
    btn_entrar = 1;
    $('#txt_chave_acesso').mask('AAAA-AAAA-A');
    $(document).on('click','#btn-login',function(){
        btn_entrar=1;
        
    });
    $(document).on('click','#btn-sou_novo',function(){
        btn_entrar=2;
        
    });
    $(document).on('click','#btn-entrar',function(){
        if(btn_entrar==1){
            $('#formLogin1').submit();
            
        }else{
            if($('#senha').val()==$('#senha2').val()){
                $('#formSou_novo').submit();                
            }else{
                
            }
           
        }
    });
    
    $('#formLogin1').validate({
        rules:{
            
            txt_login:{
              required:true
              
            },
            txt_senha:{
                required:true,          
            },
           
        }
    });
    $('#formSou_novo').validate({
        rules:{
            txt_nome_completo:{
              required: true  
            },
            txt_login:{
              required:true
              
            },
            txt_senha:{
                required:true,
                rangelength:[7,15]
            },
            txt_senha2:{
              required: true,
              equalTo:"#txt_senha_2"
            },
            txt_chave_acesso:{
                required: true,
                minlength:11
            }
        }
    });
    /*
    function cadastrar_usuario(nome,login,senha,token){
        $.ajax({
            url:'',
            type:'POST',
            data:{txt_nome_completo:nome,txt_login:login,txt_senha},
            dataType:'JSON',
            success: function(data){
                
            },
            beforeSend: function(){
                
            }
        });
    }*/
});


