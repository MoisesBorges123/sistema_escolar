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
