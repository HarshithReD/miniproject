<?php
session_start();
$json_array['success']=0;
$userid=$_SESSION['userid'];
$id=$_POST['index']+1;
$comment=$_POST['comments'];
$year=$_SESSION['year'];
$department= $_SESSION['department'];
$section=$_SESSION['section'];
$date=date("Y-m-d");
$con=mysqli_connect('localhost','root','','discussion');
$q="SELECT * FROM `$year` WHERE `id` = $id";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($res);
$previouscomments=$row['comments'];
if($previouscomments==''){
	
	$data=$userid.','.$comment.','.$date;
$query="UPDATE `$year` SET `comments` = '$data' WHERE `$year`.`id` = '$id';";
$res=mysqli_query($con,$query);
if($res){
	
	$json_array["success"]=1;
}


}else{
$data=$previouscomments.';'.$userid.','.$comment.','.$date;
$query="UPDATE `$year` SET `comments` = '$data' WHERE `$year`.`id` = '$id';";
$res=mysqli_query($con,$query);
if($res){
	$json_array["success"]=1;
}

}

echo json_encode($json_array);
?>