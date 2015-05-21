$(document).ready(function(){
	$('.tableauInterractif').on('click', function(e){
/*
		$('tr.tableauCache').each(function() {
			$(this).hide();
		})
*/
		if($(this).hasClass('tOuvert')) {
			$(this).next('tr').slideToggle();
			$(this).removeClass('tOuvert');
			$(this).find('td.fleche i').removeClass('flecheActif');
		}
		else{
			$(this).next('tr').slideToggle();
			$(this).addClass('tOuvert');
			$(this).find('td.fleche i').addClass('flecheActif');
		}
		
	})
	
	$('#FormulaireAdminForm').on('submit', function(e){
		e.preventDefault();
		$('#rechercheCachee').val($('#txtRecherche').val());
		var motif = $('#txtRecherche').val();
		$.ajax({
			url:'/employeurs/recherche/' + motif,
			success: function(rechercheEmployeur){
				$('table').html(rechercheEmployeur);
				$('.tableauInterractif').on('click', function(e){
/*
					$('tr.tableauCache').each(function() {
						$(this).hide();
					})
*/
					$(this).next('tr').slideToggle();
				})
			}
		})	
	})
});