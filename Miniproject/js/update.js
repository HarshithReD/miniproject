function changeyr(){
	var year=$('#yearbox').val();
	var id=$('#rno').val();
	$.ajax({
		url:"insert_year.php",
		type:"post",
		data:{id:id,year:year},
		datatype:"json",
		success:function(data){
			alert('year updated');
		}
	});
};