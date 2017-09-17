
		<title>Home</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="jquery-ui.css">
		<style>
			.eventshow .ui-state-default{
				background-color:orange;
				color: white;
			}
			.eventshowde .ui-state-default{
				background-color:green;
				color: white;
			}
			.eventshowcl .ui-state-default{
				background-color:blue;
				color: white;
			}
			#datepicker{
				margin-top: 100px;
				margin-left:200px;
				 font-size:30px;
			}
		</style>

		<div id="header">
		<div id="profile_heading">
		<br><button id="profile_button"></button> <?php
			echo '<b>WELCOME &nbsp '.$_SESSION['username'].'</b>';
		?></div>
		<nav id="nav_menu">
		<br><br>
			<ul id="menu" >
				<li id="menu0" class="items"><b>HOME</b></li>
				<li id="menu1" class="items"><b>ACTIVITY ROOM</b></li>
				<li id="menu2" class="items"><b>CALENDAR</b></li>
			</ul> 
		</nav>
		</div>
		
			<ul id="discussion_ul" style="display:none">
				<li id="department_dis" class="discussion_li">Department Wise</li>
				<li id="class_dis" class="discussion_li">Class wise</li>
			</ul>
		
		<div class="profile_items" style="display:none">
			<ul id="profile_nav">
				<li id="profile_details" class="profile_li">Profile details</li>
				<li id="change_password" class="profile_li">Change password</li>
				<li id="logout" class="profile_li">Logout</li>
			</ul>
		</div>
		<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/discussion.js"></script>
<script type="text/javascript" src="js/discussion_li.js"></script>


<script type="text/javascript" src="jquery-ui.js"></script> 
<script type="text/javascript" src="js/calender.js"></script> 
<script type="text/javascript" src="js/profile.js"></script> 
