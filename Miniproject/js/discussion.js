
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
			if(data.rows==0){
					$('#main_body').append('<div class="alert-warning" style="margin-left:50px;padding:10px;text-align:center;width:100%;">There are no posts here</div>');
			}else{
			
			for(i=data.rows;i>=1;i--){
				var comments=data[i].comments;
				var commentstrings=comments.split(';');
				$('#main_body').append('<u><div class="posts"><div class="sender"><span id="sender_roll">'+data[i].sender+' :</span> &nbsp'+data[i].message+'</div><div class="date">'+data[i].date+'</div><div class="comment"><input type="textarea" class="comment_textareac" id="comment_textareac'+i+'" rows="20" cols="190" placeholder="Write a message..."><input type="button" class="btn btn-danger" value="post" onclick="postcc(\'' + i + '\')"><input type="button" class="btn btn-default" value="View Comments" onclick="viewcomments(\''+i+'\')"></div></div>');
		
				$.each(commentstrings,function(key,value){
					if(key<=2){
					var splittedcomment=value.split(',');
					var commentsender=splittedcomment[0];
					var commentdata=splittedcomment[1];
					var commentdate=splittedcomment[2];
					if(commentsender==null||commentdata==null||commentdate==null){

					}else{
					
					$('#main_body').append('<div class="comments_section" name="comment_section'+i+'" style="display:none;"><span class="post_sender">'+commentsender+':</span> &nbsp'+commentdata+'<div class="post_date">'+commentdate+'</div></div>')
				}
				}
				});
			$('#mainbody').append('<hr width="100%" height="3px"/>');
				}
				
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
			if(data.rows==0){
					$('#main_body').append('<div class="alert-warning" style="margin-left:50px;padding:10px;text-align:center;width:100%;">There are no posts here</div>');
			}else{
			
			for(i=data.rows;i>=1;i--){
				var comments=data[i].comments;
				var commentstrings=comments.split(';');
				
				$('#main_body').append('<u><div id="post'+i+'"class="posts"><div class="sender"><span id="sender_roll">'+data[i].sender+' :</span> &nbsp'+data[i].message+'</div><div class="date">'+data[i].date+'</div><div class="comment"><input type="textarea" class="comment_textareac" id="comment_textareac'+i+'" rows="20" cols="190" placeholder="Write a message..."><input type="button" class="btn btn-danger" value="post" onclick="postdd(\'' + i + '\')"><input type="button" class="btn btn-default" value="View Comments" onclick="viewcomments(\''+i+'\')"></div></div>');
				$.each(commentstrings,function(key,value){
					if(key<=2){
					var splittedcomment=value.split(',');
					var commentsender=splittedcomment[0];
					var commentdata=splittedcomment[1];
					var commentdate=splittedcomment[2];
					if(commentsender==null||commentdata==null||commentdate==null){

					}else{
					
					$('#main_body').append('<div class="comments_section" name="comment_section'+i+'" style="display:none;"><span class="post_sender">'+commentsender+':</span> &nbsp'+commentdata+'<div class="post_date">'+commentdate+'</div></div>')
				}
				}
				
			});
				$('#mainbody').append('<hr width="100%" height="3px"/>');
		}
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
}
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
}
function fun(){
	location.href='logout.php';
}
function classposts(){
	$('#main_body').html('<h1>Class Discussions</h1>');
	var clsarray={};
	$.ajax({
		url:"getsessionvariables.php",
		dataType:"json",
		success:function(data){
			if(data.profile=="faculty"){
				var classes=data.classes;
				var classarray=classes.split(';');
				$('#main_body').append('<br>')
				$.each(classarray,function(key,value){
					var index=value;
					$('#main_body').append('<input type="button" style="margin-left:50px;" class="btn btn-default" onclick="getClass(\'' + value + '\');" value="' + value + '">');
					
				});
				
			}
			else if(data.profile=="student"){

		$('#main_body').append('<input type="textarea" id="textarea_class" class="input-sm"  placeholder="Enter a message..."><input type="button" id="post_class" class="btn btn-primary" onclick="post_class()" value="post">');
		$.ajax({
		url:"classwise.php",
		type:"post",
		
		dataType:"json",
		success:function(data){
			if(data.rows==0){
					$('#main_body').append('<div class="alert-warning" style="margin-left:50px;padding:10px;text-align:center;width:100%;">There are no posts here</div>');
			}else{
			var i=0;
			for(i=data.rows;i>=1;i--){
				var comments=data[i].comments;
				var commentstrings=comments.split(';');
				
				$('#main_body').append('<u><div id="post'+i+'"class="posts"><div class="sender"><span id="sender_roll">'+data[i].sender+' :</span> &nbsp'+data[i].message+'</div><div class="date">'+data[i].date+'</div><div class="comment"><input type="textarea" class="comment_textareac" id="comment_textareac'+i+'" rows="20" cols="190" placeholder="Write a message..."><input type="button" class="btn btn-danger" value="post" onclick="postccl(\'' + i + '\')"><input type="button" class="btn btn-default" value="View Comments" onclick="viewcomments(\''+i+'\')"></div></div>');
				$.each(commentstrings,function(key,value){
					if(key<=2){
					var splittedcomment=value.split(',');
					var commentsender=splittedcomment[0];
					var commentdata=splittedcomment[1];
					var commentdate=splittedcomment[2];
					if(commentsender==null||commentdata==null||commentdate==null){

					}else{
					
					$('#main_body').append('<div class="comments_section" name="comment_section'+i+'" style="display:none;"><span class="post_sender">'+commentsender+':</span> &nbsp'+commentdata+'<div class="post_date">'+commentdate+'</div></div>');
				}
			}
		});
				$('#mainbody').append('<hr width="100%" height="3px"/>');
		} 
	}
		}
	});
}
}

});
}
function post_class(){
	var posted_data=$('#textarea_class').val();
	$.ajax({
		url:"getsessionvariables.php",
		dataType:"json",
		success:function(data){

	
	if(posted_data==""){
		
	}
	else if(data.profile=="faculty"){
		var year=sessionStorage.getItem('classyear');
		var department=sessionStorage.getItem('classdepartment');
		var section=sessionStorage.getItem('classsection');
		$.ajax({
		url:"post_insertclsf.php",
		type:"post",
		data:{posted_data:posted_data,year:year,department:department,section:section},
		dataType:"json",
		success:function(data){
			if(data.success){

		$('#main_body').append('<input type="textarea" id="textarea_class" class="input-sm"  placeholder="Enter a message..."><input type="button" id="post_class" class="btn btn-primary" onclick="post_class()" value="post">');

				classposts();
				alert('Your message is posted!!');
				
			}
			
		}
	});
	}
	else if(data.profile=="student")
		{
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
	
}
});
}


function postClassf(index){

	var posted_data=$('#textarea_class').val();
	if(posted_data==""){
		
	}
	else{
		var cls=index.split(',');
		years=cls[0];
		departments=cls[1];
		sections=cls[2];
		
	}
}
function getClass(index){


	var cls=index.split(',');
	
	var years=cls[0];
	var departments=cls[1];
	var sections=cls[2];
	sessionStorage.setItem('classyear',years);
	sessionStorage.setItem('classdepartment',departments);
	sessionStorage.setItem('classsection',sections);


		$.ajax({
		url:"classwisef.php",
		type:"post",
		data:{year:years,department:departments,section:sections},
		dataType:"json",
		success:function(data){
			if(data.rows==0){
						$('#main_body').append('<input type="textarea" id="textarea_class" class="input-sm"  placeholder="Enter a message..."><input type="button" id="post_class" class="btn btn-primary" onclick="post_class()" value="post"><br><br>');		
					$('#main_body').append('<div class="alert-warning" style="margin-left:50px;padding:10px;text-align:center;width:100%;">There are no posts here</div>');
			}else{
					$('#main_body').append('<input type="textarea" id="textarea_class" class="input-sm"  placeholder="Enter a message..."><input type="button" id="post_class" class="btn btn-primary" onclick="post_class()" value="post">');

			var i=0;
			for(i=data.rows;i>=1;i--){
				var comments=data[i].comments;
				var commentstrings=comments.split(';');
				
				$('#main_body').append('<u><div id="post'+i+'"class="posts"><div class="sender"><span id="sender_roll">'+data[i].sender+' :</span> &nbsp'+data[i].message+'</div><div class="date">'+data[i].date+'</div><div class="comment"><input type="textarea" class="comment_textareac" id="comment_textareac'+i+'" rows="20" cols="190" placeholder="Write a message..."><input type="button" class="btn btn-danger" value="post" onclick="postcclf(\'' + i + '\')"><input type="button" class="btn btn-default" value="View Comments" onclick="viewcomments(\''+i+'\')"></div></div><hr width="100%" height="3px"/>');
				$.each(commentstrings,function(key,value){
					if(key<=2){
					var splittedcomment=value.split(',');
					var commentsender=splittedcomment[0];
					var commentdata=splittedcomment[1];
					var commentdate=splittedcomment[2];
					if(commentsender==null||commentdata==null||commentdate==null){

					}else{
					
					$('#main_body').append('<div class="comments_section" name="comment_section'+i+'" style="display:none;"><span class="post_sender">'+commentsender+':</span> &nbsp'+commentdata+'<div class="date">'+commentdate+'</div></div>')
				}
			}
		}); 
	}
}
}
	});	
		classposts();
	

}
	function postcc(index){
		var x='comment_textareac'+index;

		var comment=$('#'+x).val();
		
		$.ajax({
			url:"postcomments.php",
			data:{comments:comment,index:index},
			type:"post",
			dataType:"json",
			success:function(data){

				if(data.success==1){
				alert('comment posted!!');
				collegeposts();
			}
			}
		});
		
	}function postccl(index){
		var x='comment_textareac'+index;

		var comment=$('#'+x).val();
		
		$.ajax({
			url:"postcommentscls.php",
			data:{comments:comment,index:index},
			type:"post",
			dataType:"json",
			success:function(data){

				if(data.success==1){
				alert('comment posted!!');
				classposts();
			}
			}
		});
		
	}
	function postcclf(index){
		var x='comment_textareac'+index;

		var comment=$('#'+x).val();
		var year=sessionStorage.getItem('classyear');
		var department=sessionStorage.getItem('classdepartment');
		var section=sessionStorage.getItem('classsection');
		
		$.ajax({
			url:"postcommentsclsf.php",
			data:{comments:comment,index:index,year:year,department:department,section:section},
			type:"post",
			dataType:"json",
			success:function(data){

				if(data.success==1){
				alert('comment posted!!');
				classposts();
			}
			}
		});
		
	}
	function postdd(index){
		var x='comment_textareac'+index;

		var comment=$('#'+x).val();
		
		$.ajax({
			url:"postcommentsd.php",
			data:{comments:comment,index:index},
			type:"post",
			dataType:"json",
			success:function(data){

				if(data.success==1){
				alert('comment posted!!');
				departmentposts();
			}
			}
		});
		
	}
	 function viewcomments(index){
	 	$('div[name="commentheading'+index+'"]').slideToggle();

			$('div[name="comment_section'+index+'"]').slideToggle();


	}