
$(document).ready(function(){
	setTimeout(function(){
		collegeposts();
	},10);
});

$('#menu0').click(function(){
		collegeposts();
});
$('#department_dis').click(function(){
	departmentposts();
});

);
function collegeposts(){
	$('#main_body').html('<h1> College Discussions</h1>');
$('#main_body').append('<input type="textarea" id="textarea_college" class="input-sm" placeholder="Enter a message..."><input type="button" class="btn btn-primary" id="post_college" onclick="post()" value="post">');
	$.ajax({
		url:"college.php",
		type:"post",
		
		dataType:"json",
		success:function(data){
			
			var i=0;
			for(i=0;i<data.rows;i++){
				$('#main_body').append('<u><div class="posts"><div class="sender"><span id="sender_roll">'+data[i].sender+' :</span> &nbsp'+data[i].message+'</div><div class="date">'+data[i].date+'</div><div class="comment"><input type="textarea" class="comment_textareac" rows="2" cols="190" placeholder="Write a message..."><input type="button" class="comment_sendc" value="post"></div></div><hr width="100%" height="3px"/>');
				
				
				
			}
		}
		
	});
}
function departmentposts(){
	$(this).toggleClass('active');
	$('#main_body').html('<h1>Department Discussions</h1>');
	$('#main_body').append('<input type="textarea" id="textarea_department" placeholder="Enter a message..."><input type="button" id="post_department" onclick="post_department()" value="post">');
	$.ajax({
		url:"discussion.php",
		type:"post",
		
		dataType:"json",
		success:function(data){
			var i=0;
			for(i=0;i<data.rows;i++){
				$('#main_body').append('<u><div id="post'+i+'"class="posts"><div class="sender"><span id="sender_roll">'+data[i].sender+' :</span> &nbsp'+data[i].message+'</div><div class="date">'+data[i].date+'</div><div class="comment"><input type="textarea" class="comment_textaread" rows="2" cols="190" placeholder="Write a message..."><input type="button" class="comment_sendd" value="post"></div></div><hr width="100%" height="3px"/>');
				
				
				
			}
		}
		
	});
}
function post(){
	var posted_data=$('#textarea_college').val();
	$.ajax({
		url:"post_insertc.php",
		type:"post",
		data:{posted_data:posted_data},
		dataType:"json",
		success:function(data){
			
			if(data.success){
				collegeposts();
				alert('Your message is posted!!');
				
			}
			
		}
	});
};
function post_department(){
	var posted_data=$('#textarea_department').val();
	$.ajax({
		url:"post_insertd.php",
		type:"post",
		data:{posted_data:posted_data},
		dataType:"json",
		success:function(data){
			
			if(data.success){
				departmentposts();
				alert('Your message is posted!!');
				
			}
			
		}
	});
};
function fun(){
	location.href='logout.php';
}