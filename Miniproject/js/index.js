
$('#fid').focusin(function(){
	$('#ffeedback').html('Please enter the user id..').css('color','red').fadeIn();
});
$('#sub').click(function(){
	var sid=$('#sid').val();
	var spass=$('#spass').val();
	if(sid==""){
		
		return false;
	}
	else if(spass==""){
		$('#sfeedback').html('Please enter the password').css('color','red').fadeIn();
		return false;
	}
	
});


$('#sub1').click(function(){
	var fid=$('#fid').val();
	var fpass=$('#fpass').val();
	if(fid==""){
		alert('Enter the userid');
		
	}
	if(fpass==""){
		alert('Enter the password');
		return false;
	}
	
});