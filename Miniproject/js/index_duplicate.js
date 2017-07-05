$('#spass').focusin(function(){
	var id=$('#sid').val();
	if(id==""){
		$('#sid').focus().css('border','3px solid red');
		
		
	}else{
		$('#sid').css('border','');
	}
});

$('#sub').click(function(){
	var sid=$('#sid').val();
	var spass=$('#spass').val();
	if(sid==""){
		alert('Enter the userid');
		return false;
	}
	if(spass==""){
		alert('Enter the password');
		return false;
	}
	
});


$('#sub1').click(function(){
	var fid=$('#fid').val();
	var fpass=$('#fpass').val();
	if(fid==""){
		alert('Enter the userid');
		return false;
	}
	if(fpass==""){
		alert('Enter the password');
		return false;
	}
	
});


