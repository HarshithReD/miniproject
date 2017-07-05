$('#profile_button').click(function(){
	$(this).toggleClass('active');
});
$('#menu1').click(function(){
	$('#main_body').html('');
	$.ajax({
		url:"discussion.php",
		type:"post",
		
		dataType:"json",
		success:function(data){
			var i=0;
			for(i=0;i<data.rows;i++){
				$('#main_body').append('<u>'+data[i].sender+'@'+data[i].date+'</u>:'+data[i].message+'<br><br>');
				
				
				
			}
		}
		
	});
});
function fun(){
	location.href='logout.php';
}