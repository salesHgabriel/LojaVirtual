$(document).ready( function () {

	$('.btn-apaga-registros').on('click', function () {
		if(confirm("Deseja apagar o registro?")){
			return true;
		}
		return false;

	});

	//Plugin Data-table
	$('.table_listar_data-table').DataTable({

		"language":{
			"sEmptyTable": "Nenhum registro encontrado",
			"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
			"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
			"sInfoFiltered": "(Filtrados de _MAX_ registros)",
			"sInfoPostFix": "",
			"sInfoThousands": ".",
			"sLengthMenu": "_MENU_ Resultados por página",
			"sLoadingRecords": "Carregando...",
			"sProcessing": "Processando...",
			"sZeroRecords": "Nenhum registro encontrado",
			"sSearch": "Pesquisar",
			"oPaginate": {
				"sNext": "Próximo",
				"sPrevious": "Anterior",
				"sFirst": "Primeiro",
				"sLast": "Último"
			},
			"oAria": {
				"sSortAscending": ": Ordenar colunas de forma ascendente",
				"sSortDescending": ": Ordenar colunas de forma descendente"
			}
		}
	});

	$('.sidebar-menu').tree();


	$("#inputCpf").mask("000.000.000-00")  //cpf mask
	$("#cep").mask("00000-000")  //cep mask
	$("#inputData").mask("00/00/0000")  //data mask


	$("#phone").blur(function () {//telefone mask
		if($(this).val().length === 15){
			$("#phone").mask("(00) 00000-0009")
		}else{
			$("#phone").mask("(00) 0000-00009")
		}
	})

	$( "#formCadastroCliente" ).validate({
		rules: {
			nome: {
				required: true,
				minlength:6,
				minWords:2
			},
			telefone:{
				required: true,
			},
			cep:{
				required: true,
			},
			data_Nascimento:{
				required: true,
			},
			email: {
				required: true,
				email: true
			},
			cpf:{
				required: true,
				cpfBR: true
			},
			numero:{
				number:true,
				required:true
			},
			bairro:{
				required:true
			},
			cidade:{
				required:true
			},
			senha:{
				required:true,
				minlength:8
			},
			estado:{
				required:true,
		}

		}

	});
});




