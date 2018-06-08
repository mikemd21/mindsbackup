jQuery(document).ready(function() {
	$('#lform').on('submit', function(event){
		event.preventDefault();

		var form_data = $(this).serialize();
		$.ajax({
			url:$(this).attr("action"),
			method:$(this).attr("method"),
			data: $(this).serialize(),
			success:function(data){
                if (data == "OK"){
                    $('#lform')[0].reset();
                    window.location.replace('cpaciente');
                }else{
                    $('#alert_action').fadeIn().html('<div class="alert alert-danger alert-dismissable"><b>Error: </b>Contraseña Incorrecta</div>');
                    $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                        $(this).remove();
                    });
                }

			}
        })
	});

    $('#rpform').on('submit', function(event){
		event.preventDefault();

		var form_data = $(this).serialize();
		$.ajax({
			url:$(this).attr("action"),
			method:$(this).attr("method"),
			data: $(this).serialize(),
			success:function(data){
                if (data == "OK"){
                    $('#alert_action').fadeIn().html('<div class="alert alert-success alert-dismissable"><b>Correcto: </b>Se guardaron los datos correctamente</div>');
                    $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                        $(this).remove();
                    });
                }else{
                    $('#alert_action').fadeIn().html('<div class="alert alert-danger alert-dismissable"><b>Error: </b>'+data+'</div>');
                    $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                        $(this).remove();
                    });
                }

			}
        })
	});
});
