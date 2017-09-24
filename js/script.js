$().ready( function() {
	//METODO PARA VALIDAR APENAS LETRAS NO NOME
	jQuery.validator.addMethod("alpha", function (value) {
		var regexp = new RegExp(/^[a-zA-Z ]+$/);
		return regexp.test(value);
	})
	//INICIAR VALIDACAO DO FORM
	var validado = $("#formulario").validate({
		//REGRAS
		rules:{
			nome:{
				required:true,
				alpha:true,
				minlength:2
			},
			email:{
				required:true,
				email:true
			},
			senha:{
				required:true,
				minlength:5,
			}

		},
		//MENSAGENS
		messages:{
			nome:{
				required:"Esse campo não pode ser vazio",
				alpha:"Digite apenas letras",
				minlength:"No mínimo 2 caracteres"
			},
			email:{
				required:"Esse campo não pode ser vazio",
				email:"Entre com um email válido"
			},
			senha:{
				required:"Esse campo não pode ser vazio",
				minlength:"No mínimo 5 caracteres"
			}
		},
		//QUANDO SUCESSO
		invalidHandler: function(event, validator) {
			alert("Preencha os dados corretamente");
		},
		submitHandler : function(form) {
			enviarForm(form);
		}
	});

	function enviarForm(form) {
		var dados = $(form).serialize();
		console.log(dados);
		jQuery.ajax({
			type: "POST",
			url: "index.php",
			data: dados,
			success: function( data )
			{
				console.log(data);
			},
			complete: function( data )
			{
				console.log('Muda de Pagina');
				if(data){
					var local = window.location.href.split('/');
				}
				if(local[local.length-1] == "insert"){
					$(location).attr('href', './select');
				}else{
					$(location).attr('href', '../select');
				}
			}
		});
	}

	$(".acao.deletar").click( function(){ 
		$confirme = confirm("Tem certeza que deseja deletar?");
		
		if($confirme){
			jQuery.ajax({
				type: "POST",
				url: "index.php",
				data: "tipo=delete&id="+$(this).attr('id'),
				success: function( data )
				{
					console.log( data );
				},
				complete: function( data )
				{
					location.reload();
				}
			});
		}
		
	});
		
});