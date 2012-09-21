// JavaScript Document
$(document).ready(function(e){
	$.ajax({
				type: 'get',
				url: 'controller/country.php',
				data: {update_country: country, country_id: country_id, type: 'update_country' }
			});						   
});