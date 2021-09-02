
var letras = new Array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l");
var parts = window.location.pathname.split("/");
var lastSegment = parts.pop();   
$(function () {
	if ($(".btn-activar").length > 0) {
		$(".btn-activar, .btn-desactivar").on("click", function() {
			activar();
		});
	}

	if ($("input[name='notificacion_fecha_inicio']").length > 0) {
		$("input[name='notificacion_fecha_inicio']").datepicker({
			autclose: true,
			format: 'yyyy-mm-dd'
		});
	}

	if ($("input[name='notificacion_fecha_fin']").length > 0) {
		$("input[name='notificacion_fecha_fin']").datepicker({
			autclose: true,
			format: 'yyyy-mm-dd'
		});
	}

	if ($("input[name='chkbox_rango_fechas']").length > 0) {
		validar_fechas();
		$("input[name='chkbox_rango_fechas']").on("ifChanged", function() {
			validar_fechas();
		});
	}

	// imagen
	imagen();

	// attachment
	attachment();
	
$("#chkbox_11").click(function(){
	var checks = document.getElementsByClassName("checkbox-paises");
	for (var i = 1; i <= checks.length ; i++) {
		$("#chkbox_"+i).prop('checked',false);
	}
})

function unchecktodosTag(){
	$("#chkbox_11").prop('checked',false);
}

});

function validar_fechas() {
	if ($("input[name='chkbox_rango_fechas']").is(':checked')) {
		$("#notificacion_fecha_inicio").removeAttr("disabled");
		$("#notificacion_fecha_fin").removeAttr("disabled");
	} else {
		$("#notificacion_fecha_inicio").attr("disabled", "disabled");
		$("#notificacion_fecha_fin").attr("disabled", "disabled");
	}
}

function attachment() {
	if ($("input[name='producto_attachment']").length > 0) {
		$("input[name='producto_attachment']").on("change", function() {
			$(".btn-borrar-attachment").trigger("click");
		});
	}
	if ($(".btn-borrar-attachment").length > 0) {
		$(".btn-borrar-attachment").on("click", function() {
			$("input[name='input_attachment_borrar']").val("1");
			$(".div-file-attachment").remove();
		});
	}
}

function imagen() {
	if ($("input[name='banner_imagen']").length > 0) {
		$("input[name='banner_imagen']").on("change", function() {
			$(".btn-borrar-imagen").trigger("click");
		});
	}
	if ($("input[name='video_imagen']").length > 0) {
		$("input[name='video_imagen']").on("change", function() {
			$(".btn-borrar-imagen").trigger("click");
		});
	}
	if ($(".btn-borrar-imagen").length > 0) {
		$(".btn-borrar-imagen").on("click", function() {
			$("input[name='input_imagen_borrar']").val("1");
			$(".img_banner").remove();
			$(".img_video").remove();
			setTimeout(function () {
				$(".btn-borrar-imagen").remove();
			}, 50);
		});
	}
}

function activar(campo) {
	var activo = $("input[name='activo']").val();
	activo = (activo == 1) ? 0 : 1;
	$("input[name='activo']").val(activo);

	switch(activo) {
		case 1:
			$(".btn-activar").removeClass("activar");
			$(".btn-activar").addClass("desactivar");
			$(".btn-desactivar").removeClass("desactivar");
			$(".btn-desactivar").addClass("activar");
			break;
		default:
			$(".btn-activar").removeClass("desactivar");
			$(".btn-activar").addClass("activar");
			$(".btn-desactivar").removeClass("activar");
			$(".btn-desactivar").addClass("desactivar");
			break;
	}

	// guardar el estado
	var registro = $("input[name='registro']").val();
	if (registro != "") {
		$.post(document.location.href, { seccion: 'estatus', registro: registro, estatus: activo }, function( data ) {
			if (data != "") {
				mensaje("Se ha cambiado el estatus", "success");
			}
		});
	}
	
}

function mensaje(mensaje, tipo_alerta) {
	$(document).scrollTop(0);
	$("#mensaje-alerta").removeClass();
	$("#mensaje-alerta").addClass("alert alert-" + tipo_alerta);
	$("#mensaje-alerta span").html(mensaje);
	$("#mensaje-alerta").show();

	$(".alert").fadeTo(2000, 500).slideUp(500, function(){
	    $(".alert").slideUp(500);
	    	location.reload();

	});
}

function bloquear_submit() {
	if ($(".btn-submit").length > 0) {
		setTimeout(function () {
			$(".btn-submit").attr("disabled", "disabled");
			$(".div-guardando").show();
		}, 50);
	}
}

function solo_numeros(e) {
	var tecla = (document.all) ? e.keyCode : e.which;

	if (tecla == 8 || tecla == 9 || tecla == 13 || tecla == 18 || tecla == 37 || tecla == 38 || tecla == 39 || tecla == 40 || tecla == 91) return true;

	patron = new RegExp('^[0-9]+$');
	te = String.fromCharCode(tecla);
	return patron.test(te);
}

$("#chkbox_11").click(function(){
	var checks = document.getElementsByClassName("checkbox-paises");
	for (var i = 1; i <= checks.length ; i++) {
		$("#chkbox_"+i).prop('checked',false);
	}
})

function unchecktodosTag(){
	$("#chkbox_11").prop('checked',false);
}
$(document).ready(function(){
	var ordenInputs = document.getElementsByClassName("orden");
	var ids = []
	for (var i = 0; i < ordenInputs.length; i++) {
		ids.push(ordenInputs[i].id);
		
	}
	 $("input").blur(function(){
	 	var valor= $("input")
	 	var order = [];
	 	for (var i = 0; i < valor.length; i++) {
	 		if(valor[i].className == "orden"){
	 			order.push(valor[i].id +","+valor[i].value);
	 			console.log(order);
	 			
	 		}
	 	}
	 	var updateUrl = "";
	 	var table = [];
	 	lastSegment = parts[3];
	 	switch (lastSegment){
	 		case 'videos':
				 		table= 'marcas'
	 			break;
	 		case 'banners':
				 		table =  'tiendas'
	 			break;

	 	}
	 	
	 	
	 	 updateUrl =  '/orden/updateorder'
          try{
                jQuery.ajax({
                      type: "POST",
                      url: updateUrl,
                      data:   { 
                        orden: order,
                        table: table
                      },
                      success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve

                               //console.log(response);
                            //$('.load').removeClass('loader');
                            //location.reload();

                   }
                 });       
          }catch(err){
            console.log(err);
          }
	  });
  /*$("input").blur(function(){
    alert("This input field has lost its focus.");
  });*/
});