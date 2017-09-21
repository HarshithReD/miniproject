<?php
$json_array=["success"=>0];
$con=mysqli_connect('localhost','root','','users');
$addclub=$_POST['club'];
$id=$_POST['id'];
$q="SELECT `club` FROM `login` WHERE `roll no`='$id'";
$result=mysqli_query($con,$q);
$row = mysqli_fetch_assoc($result);
$x=$row['club'];
if($x==null){
$query1="UPDATE `login` SET `club`='$addclub' WHERE `roll no`='$id'";
$res1=mysqli_query($con,$query1);
if($res1){
	$json_array["success"]=1;
}
}
else{
$y=$x.';'.$addclub;
$query2="UPDATE `login` SET `club`='$y' WHERE `roll no`='$id'";
$res2=mysqli_query($con,$query2);
if($res2){
	$json_array["success"]=1;
}	
}
echo json_encode($json_array);
?>