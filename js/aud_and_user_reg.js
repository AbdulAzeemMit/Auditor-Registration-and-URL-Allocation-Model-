// $('#form').reset();

function deleteRow() {
	$('DIV.product-item').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}


function addMore() {
	//$("#product").append('<h5 style="display:inline;float:left;margin-left:480px;">'+' URL</h5><h5 style="display:inline;float:left;margin-left:110px;">'+' CRITICAL</h5><h5 style="display:inline;float:left;margin-left:55px;">'+' AUDITOR</h5><h5 style="display:inline;float:left;margin-left:75px;">'+' REMARKS</h5>');
	
	$("<div>").load("aud_reg_input.php", function() {
		
			$("#product").append($(this).html());
	});	
}