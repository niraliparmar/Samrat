// JavaScript Document

$(function() {
	$( '#date' ).datepicker({ dateFormat:'dd-mm-yy'});
	$( '#dob' ).datepicker({ 
	dateFormat:'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	yearRange: '1950:2010'
	
	});
	$('#in_time ,#out_time').timepicker({
	ampm: true,
	stepMinute: 1,
	});
	
});

