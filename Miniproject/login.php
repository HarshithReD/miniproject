<?php 
 $con=mysqli_connect("localhost","root","","users");

	 $id=$_POST['sid'];
	 $pass=$_POST['spass'];
	 $q="SELECT * FROM `login` WHERE `roll no` = '$id' AND `password` = '$pass'";
	 $res=mysqli_query($con,$q);
	$rows=mysqli_num_rows($res);
	 if($rows==0){
		echo "failed";
	 }
	else
	{
		echo "success";
	}
 
 

?>
