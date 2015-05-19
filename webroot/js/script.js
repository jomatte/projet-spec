$(document).ready(function(){

	$('.tableauInterractif').on('click', function(e){
		$('tr.tableauCache').each(function() {
			$(this).hide();
		})
		$(this).next('tr').slideToggle('slow');
	})
	
});