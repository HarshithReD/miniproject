
$(document).ready(function(){
	setTimeout(function(){
		collegeposts();
		$('#menu0').css('border-bottom','solid 3px #03abf9').css('background-color','white').css('color','black');
	},10);
});

$('#menu0').click(function(){
	$('#menu0').css('border-bottom','solid 3px #03abf9').css('background-color','white').css('color','black');
		collegeposts();
});
$('#department_dis').click(function(){
	departmentposts();
});
$('#class_dis').click(function(){
	classposts();
});

function collegeposts(){
	$('#main_body').html('<h1> College Discussions</h1>');
$('#main_body').append('<input type="textarea" id="textarea_college" class="input-sm" placeholder="Enter a message..."><input type="button" class="btn btn-primary" id="post_college" onclick="post()" value="post">');
	$.ajax({
		url:"college.php",
		type:"post",
		
		dataType:"json",
		success:function(data){
			
			
			for(i=data.rows;i>=1;i--){
				$('#main_body').append('<u><div class="posts"><div class="sender"><span id="sender_roll">'+data[i].sender+' :</span> &nbsp'+data[i].message+'</div><div class="date">'+data[i].date+'</div><div class="comment"><input type="textarea" class="comment_textareac" id="comment_textareac'+i+'" rows="20" cols="190" placeholder="Write a message..."><input type="button" class="btn btn-danger" value="post" onclick="postcc('+i+')"></div></div><hr width="100%" height="3px"/>');
				
				
				
			}
		}
		
	});
}
function departmentposts(){
	$('#main_body').html('<h1>Department Discussions</h1>');
	$('#main_body').append('<input type="textarea" id="textarea_department" class="input-sm" placeholder="Enter a message..."><input type="button" class="btn btn-primary" id="post_department" onclick="post_department()" value="post">');
	$.ajax({
		url:"discussion.php",
		type:"post",
		
		dataType:"json",
		success:function(data){
			
			for(i=data.rows;i>=1;i--){
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
function classposts(){
	$('#main_body').html('<h1>Class Discussions</h1>');
	$('#main_body').append('<input type="textarea" id="textarea_class" class="input-sm"  placeholder="Enter a message..."><input type="button" id="post_class" class="btn btn-primary" onclick="post_class()" value="post">');
	$.ajax({
		url:"classwise.php",
		type:"post",
		
		dataType:"json",
		success:function(data){
			var i=0;
			for(i=data.rows;i>=1;i--){
				$('#main_body').append('<u><div id="post'+i+'"class="posts"><div class="sender"><span id="sender_roll">'+data[i].sender+' :</span> &nbsp'+data[i].message+'</div><div class="date">'+data[i].date+'</div><div class="comment"><input type="textarea" class="comment_textaread" rows="2" cols="190" placeholder="Write a message..."><input type="button" class="comment_sendd" value="post"></div></div><hr width="100%" height="3px"/>');
			}
		}
	});
}
function post_class(){
	var posted_data=$('#textarea_class').val();
	if(posted_data==""){
		
	}
	else{
		$.ajax({
		url:"post_insertcls.php",
		type:"post",
		data:{posted_data:posted_data},
		dataType:"json",
		success:function(data){
			if(data.success){
				classposts();
				alert('Your message is posted!!');
				
			}
			
		}
	});
	}
};
function postcc(index){

	var d=$('#comment_textareac'+index).val();
	
}