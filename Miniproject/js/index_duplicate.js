$(function(){
 var y = true;
    $("#flip").click(function () {
        $("#admindiv").animate({
            left: y ? '+=200px' : '-=200px'
        }, 'slow');
        y = !y;
    });
});

$('#spass').focusin(function(){
	var id=$('#sid').val();
	if(id==""){
		$('#sid').focus().css('border','1.5px solid red');
		
		
	}else{
		$('#sid').css('border','');
	}
});


$('#fpass').focusin(function(){
	var id=$('#fid').val();
	if(id==""){
		$('#fid').focus().css('border','1.5px solid red');
		
		
	}else{
		$('#fid').css('border','');
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


