var baseurl = 'http://localhost/json_codeigniter/';
$(document).ready(function(){

	$(".cargar_json").click(function(){

		$.post(baseurl + 'jsonci/provincias_json', function(data){

			var result = JSON.parse(data);

			$.each(result, function(i, val){

				$(".contenedor_json").append('<li>' + val.provincia + '</li>');

			});

		});

		$(this).hide();

		$(".contenedor_json").prepend('<input type="button" class="ocultar" value="Ocultar" />');

	});

	$(".ocultar").live('click',function(){

		$(this).remove();
		$(".contenedor_json").html('');
		$(".cargar_json").show();

	});

});