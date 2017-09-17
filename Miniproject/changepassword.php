<?php
	session_start();
	if(isset($_SESSION['userid'])&&(isset($_SESSION['username']))){
		include "header.php";
		

$con=mysqli_connect('localhost','root','','users');
if(isset($_POST['sub'])){
	$old_pass=$_POST['old_pass'];
	$new_pass=md5($_POST['new_pass']);
	$userid=$_SESSION['userid'];
	$query="UPDATE `login` SET `password` = '$new_pass' WHERE `login`.`roll no` = '$userid';";
	$res=mysqli_query($con,$query);
	if(!$res)
		echo 'failed';
	else{
		?>
		<div id="success" class="alert alert-success">Your password has been changed!!</div>
		<?php
	}
}




}
else{
	header("location:index.php");
}
?>

	
		<script type="text/javascript" src="js/changepassword.js"></script> 
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/changepasswordstyle1.css" rel="stylesheet">
		<section id="changepassword">
		<div id="change">
			<form name="f" action="changepassword.php" method="post">
			<input type="password" class="input-sm" id="old" name="old_pass" placeholder="Enter your old password.."><br>
			<input type="password" class="input-sm" id="new" name="new_pass" placeholder="Enter your new password.."><br>
			<input type="submit" class=" btn btn-primary" name="sub" value="Change">
			</form>
		</div>
		</section>
		

		
	

