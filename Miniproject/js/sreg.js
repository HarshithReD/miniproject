$(function(){
    $('#year').click(function() {
        $('#yearbox').hide();
		$('#changeyr').hide();
		if($(this).is(':checked')){
            $('#yearbox').show();
			$('#changeyr').show();
		}
        else{
            $('#yearbox').hide();
			$('#changeyr').hide();
		}
    });
    
    $('#club').click(function() {
		$('#addclubbox').hide();
		$('#addbtn').hide();
		$('#deletebtn').hide();
		$('#add').hide();
		$('#delete').hide();
        if(!$(this).is(':checked')){
			$('#addclubbox').hide();
			$('#deleteclubbox').hide();
			$('#addbtn').hide();
			$('#deletebtn').hide();
		}
		else{
            $('#addbtn').show();
			$('#deletebtn').show();
			
		}
    });
	$('#addbtn').click(function(){
		$('#addbtn').hide();
		$('#addclubbox').show();
		$('#add').show();
	});
	$('#deletebtn').click(function(){
		$('#deletebtn').hide();
		$('#deleteclubbox').show();
		$('#delete').show();
	});
	$('#add').click(function(){
		$('#addbtn').show();
		$('#addclubbox').hide();
		$('#add').hide();
		var addtextbox=$('#addclubbox');
		$.ajax({
			
		});
	});
	$('#delete').click(function(){
		$('#deletebtn').show();
		$('#deleteclubbox').hide();
		$('#delete').hide();
	});
	
	$('#addclass').click(function(){
		var id=$('#frollno').val();
		var year=$('.year option:selected').text();
		var branch=$('.branch option:selected').text();
		var section=$('.section option:selected').text();
		$.ajax({
			url:'insert_classes.php',
			data:{id:id,year:year,branch:branch,section:section},
			dataType:'json',
			type:'post',
			success:function(data){

				$('#view').html('class is set').css('display','');
				$(window).scrollTop(0);
			}
		});
	});
	
});

$('#changeyr').click(function(){
	var rollno=$('#rno').val();
	var year=$('#yearbox').val();
	$.ajax({
		url:
		data:{r:rollno,yr:year},
		dataType:'json',
		type:'post',
		success:function(data){
			
		}
		
	});
	
	
});

function slogin(){
		var rno=$("#sno").val();
		var name=$("#sname").val();
		var pass=$("#spass").val();
		var branch=$("#sbranch").val();
		var section=$("#ssection").val();
		var year=$("#syr").val();
		
		if((rno =="")||(name=="")||(pass=="")||(branch=="")||(section=="")||(year=="")  ){
			alert("fill all the details");
			return false;
		}
	}

