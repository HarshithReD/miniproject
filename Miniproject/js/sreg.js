$(function(){
    $('#year').click(function(){
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
	$('#club').click(function(){
		$('#addclubbox').hide();
		$('#add').hide();
		if($(this).is(':checked')){
			$('#add').show();
			$('#addclubbox').show();
		}
		else{
			
		}
		
	});
	$('#add').click(function(){
		var club=$('#addclubbox').val();
		var id=$('#rno').val();
		$.ajax({
			url:"add_club.php",
			type:"post",
			data:{id:id,club:club},
			datatype:"json",
			success:function(data){
				alert('club added');
			}
	});
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
function slogin(){
		var rno=$("#srno").val();
		var name=$("#sname").val();
		var pass=$("#spass").val();
		var branch=$("#sbranch").val();
		var section=$("#ssection").val();
		var year=$("#syr").val();
		
		if(rno ==null || name ==null || pass ==null || branch ==null || section ==null || year ==null){
			alert("fill all the details");
			return false;
		}

	}
function flogin(){
		var rno=$("#frno").val();
		var name=$("#fname").val();
		var pass=$("#fpass").val();
		if(rno =="" || name =="" || pass ==""){
			alert("fill all the details");
			return false;
		}
}
function df(){
	var f=$("#delf").val();
	if(f ==""){
		alert('Enter faculty id');
		return false;
	}
}
function ds(){
	var s=$("#dels").val();
	if(s ==""){
		alert('Enter student id');
		return false;
	}
}

