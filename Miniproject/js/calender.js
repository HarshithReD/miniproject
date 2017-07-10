$('#menu2').click(function(){
	$('#main_body').html('');
	$('#main_body').append('<div id="datepicker"></div>');
	$('#datepicker').datepicker();
});