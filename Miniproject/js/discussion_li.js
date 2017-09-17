$('#menu1').mouseenter(function(){
	
		$('#discussion_ul').slideDown();
		
	
});
$('#menu0').mouseenter(function(){
	
		$('#discussion_ul').slideUp();
		
		
});
$('#menu2').mouseenter(function(){
	
		$('#discussion_ul').slideUp();
		
	
	
});

$('#department_dis').click(function(){
	
		$('#discussion_ul').slideToggle();
		$('#menu1').css('border-bottom','solid 3px #03abf9').css('background-color','white').css('color','black');
		$('#menu0').css('border-bottom','').css('background-color','black').css('color','white');
		$('#menu2').css('border-bottom','').css('background-color','black').css('color','white');
	
});
$('#discusion_ul').mouseenter(function(){
	
		$('#discussion_ul').show();
	
});
$('#discusion_ul').mouseleave(function(){
	
		$('#discussion_ul').slideToggle();
	
});
$('#menu2').click(function(){
	
		$('#discussion_ul').slideUp();
		$('#menu2').css('border-bottom','solid 3px #03abf9').css('background-color','white').css('color','black');
		$('#menu1').css('border-bottom','').css('background-color','black').css('color','white');
		$('#menu0').css('border-bottom','').css('background-color','black').css('color','white');
	
});
$('#menu0').click(function(){
	$('#menu0').css('border-bottom','solid 3px #03abf9').css('background-color','white').css('color','black');
		$('#menu2').css('border-bottom','').css('background-color','black').css('color','white');
		$('#menu1').css('border-bottom','').css('background-color','black').css('color','white');
		$('#discussion_ul').slideUp();
	
});
$(document).dblclick(function(){
	 $('#discussion_ul').hide();
	 $('.profile_items').hide();
});
$('#class_dis').click(function(){
	
		$('#discussion_ul').slideToggle();
		$('#menu1').css('border-bottom','solid 3px #03abf9').css('background-color','white').css('color','black');
		$('#menu0').css('border-bottom','').css('background-color','black').css('color','white');
		$('#menu2').css('border-bottom','').css('background-color','black').css('color','white');
	
});
$('#profile_button').mouseenter(function(){
	$('.profile_items').slideDown();
});
	
