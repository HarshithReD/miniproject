<?php
	session_start();
	if(isset($_SESSION['userid'])&&(isset($_SESSION['username']))){
	?>
		<title>Home</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/style1.css" rel="stylesheet">

		<div id="header">
		<div id="profile_heading">
		<br><button id="profile_button"></button> <?php
			echo '<b>WELCOME &nbsp '.$_SESSION['username'].'</b>';
		?></div>
		<nav id="nav_menu">
		<br><br>
			<ul id="menu" >
				<li id="menu1" class="items"><b>DISCUSSION FORUM</b></li>
				<li id="menu2" class="items"><b>CALENDER</b></li>
			</ul> 
		</nav>
		</div>
		<div id="profile_items">
			<ul id="profile_nav">
				<li id="profile_details" class="profile_li">Profile details</li>
				<li id="change_password" class="profile_li">Change password</li>
				<li id="logout" class="profile_li">Logout</li>
			</ul>
		</div>
		<section id="main_body">
			
		
		</section>
		
		<input type="button" id='logout' onclick="fun()" value="logout">
	<?php

}
else{
	header("location:index.php");
}
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/discussion.js"></script>

	


