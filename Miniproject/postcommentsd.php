<?php
session_start();
$json_array['success']=0;
$userid=$_SESSION['userid'];
$id=$_POST['index'];
$comment=$_POST['comments'];
$department=$_SESSION['department'];
$date=date("Y-m-d");
$con=mysqli_connect('localhost','root','','discussion');
$q="SELECT * FROM `$department` WHERE `id` = $id";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($res);
$previouscomments=$row['comments'];
if($previouscomments==''){
	
	$data=$userid.','.$comment.','.$date;
$query="UPDATE `$department` SET `comments` = '$data' WHERE `$department`.`id` = '$id';";
$res=mysqli_query($con,$query);
if($res){
	
	$json_array["success"]=1;
}


}else{
$data=$previouscomments.';'.$userid.','.$comment.','.$date;
$query="UPDATE `$department` SET `comments` = '$data' WHERE `$department`.`id` = '$id';";
$res=mysqli_query($con,$query);
if($res){
	$json_array["success"]=1;
}

}

echo json_encode($json_array);
?>