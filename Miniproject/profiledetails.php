<?php
	session_start();
	if(isset($_SESSION['userid'])&&(isset($_SESSION['username']))){
		include "header.php";
	?>
	<script type="text/javascript" src="js/profiledetails.js"></script> 
	<link href="css/profilestyle1.css" rel="stylesheet">
	
		<section id="profile_body"><?php
		if($_SESSION['profile']=="student"){?>
			<br><b> USER NAME : </b> <?php echo $_SESSION['username'];?></b><br>
			<b>USER ID :</b> <?php echo $_SESSION['userid'];?></b><br>
			<b>YEAR :</b> <?php echo $_SESSION['year'];?></b><br>
			<b>BRANCH :</b> <?php echo $_SESSION['department'];?></b><br>
			<b>SECTION :</b> <?php echo $_SESSION['section'];?></b><br>
		<?php
		}
		
		if($_SESSION['profile']=="faculty"){
			echo '<br><br><br><br><b> USER NAME </b> '.$_SESSION['username'].'</b><br>';
			echo '<b>USER ID</b>  '.$_SESSION['userid'].'</b><br>';
		}
?>		
		</section>
		
		
	<?php

}
else{
	header("location:index.php");
}
?>
