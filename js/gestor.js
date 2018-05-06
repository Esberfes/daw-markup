
$("#nuevoEnviar").click(function(){
	
	let nombre = $("#nuevoNombre").val();
	let categoria = $("#nuevoCategoria").val();
	let autor = $("#nuevoAutor").val();
	let duracion = $("#nuevoDuracion").val();
	let url = $("#nuevoUrl").val();
	let subtitulo = $("#nuevoSubtitulo").val();
	let indice = $("#nuevoIndice").val();
	let descripcion = $("#nuevoDescripcion").val();
	
	descripcion = descripcion.replace(/\n/g, "::");
	indice = indice.replace(/\n/g, "::");
	
	console.log(descripcion);
	$.ajax({
		url: 'php/functions.php',
		type: 'post',
		dataType: 'json',
		success: function (data) {
			console.log(data);	
			
			$("#nuevoNombre").val("");
			$("#nuevoAutor").val("");
			$("#nuevoDuracion").val("");
			$("#nuevoUrl").val("");
			$("#nuevoSubtitulo").val("");
			$("#nuevoIndice").val("");
			$("#nuevoDescripcion").val("");
		},
		data: { 
			nombre : nombre,
			categoria : categoria,
			autor : autor,
			duracion : duracion,
			url : url,
			subtitulo : subtitulo,
			indice : indice,
			descripcion : descripcion
		}
	});
});

$("#btnEliminar").click(function(){
	
	let id = $("#idEleminar").val();
	$.ajax({
		url: 'php/functions.php',
		type: 'post',
		dataType: 'json',
		success: function (data) {
			console.log(data);	
			$("#idEleminar").val("");
		},
		data: { 
			eliminar : true,
			id : id,
		}
	});
});

$("#btnBackup").click(function(){
	$.ajax({
		url: 'php/functions.php',
		type: 'post',
		dataType: 'json',
		success: function (data) {
			console.log(data);	
		},
		data: { 
			restaurar : true,
		}
	});
});