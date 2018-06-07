jQuery(document).ready(function() {
	$('#lform').on('submit', function(event){
		event.preventDefault();

		var form_data = $(this).serialize();
		$.ajax({
			url:(this).attr("acctiom"),
			method:"POST",
			data: $(this).serialize(),
			success:function(data){
				alert("OK");
			}})
		}
	});
});
