<?php
if(isset($_POST['Player'])){
	$Player = $_POST['Player'];
	
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Duck Hunt</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/mole.css">
	
</head>
<body>
		<div id="container">
		<p class="timer"><p>
		
		<!-- divs for keeping the duck inside dom-->
		<!-- **************** -->
		<!--  **********************-->
		<div id="left"></div>
		<div id="bird"></div>
		<div id="right"></div>	
	
		<!-- the welcome box when page loads -->
		<!--  **********************-->
		<!--  **********************-->
		<div id="welcomeBox">

		<section class="col-md-12" id="animate">
			<h1>Destroyer of Ducks</h1>
			<form method="POST" action="index.php">

				<div id="titleBox">
					
					<div class="intro">
						<th class="playerName">Enter Your Name</th>
						<input name="Player" type="text" placeholder="Player" >
						<!-- <button type="Submit" value="Submit" id="nameButton" >Submit</button> -->
						<button id="startButton">Start</button>
					</div>
					<p id="playerWelcomeBanner"> Are you ready to blast some ducks?</p>
					
				</div>
			</form>
		</section>
		
		<audio id="hitSound">
			<source src="./sound/hit.mp3"></source>
		</audio>
		<audio id="countDownTimer">
			<source src="./sound/startgame.mp3">
		</audio>
		</div>
		<!--  **********************-->
		<!--  **********************-->
		<!-- the welcome box when page loads -->
		<div id="birdStartPoint">
			<div class="startHere" id="start1"><img src="/images/greenduck.gif"></div>
			<div class="startHere" id="start2"><img src="/images/greenduck.gif"></div>
			<div class="startHere" id="start3"><img src="/images/greenduck.gif"></div>
			<div class="startHere" id="start4"><img src="/images/greenduck.gif"></div>
			<div class="startHere" id="start5"><img src="/images/greenduck.gif"></div>
			<div class="startHere" id="start6"><img src="/images/greenduck.gif"></div>
			<div class="startHere" id="start7"><img src="/images/greenduck.gif"></div>
			<div class="startHere" id="start8"><img src="/images/greenduck.gif"></div>
			<div class="startHere" id="start9"><img src="/images/greenduck.gif"></div>
		</div>
	</div>

		<!-- ALL OF DATA ON BOTTEM OF SCREEN -->
		<!--  **********************-->
		<!--  **********************-->
	<div id="stats">
		
		
		<div id="ducks" class="trackShots">
			<h4><p>Ducks</p></h4>
				<p class="hits"></p>
		</div>
		<div id="shotsTaken" class="trackShots">
			<h4><p>Shots</p></h4>
				<p class="shots">0</p>
		</div>
		<div id="time" class="trackShots">
			<h4><p>Time Left</p></h4>
				<p class="gameTime"></p>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="/js/jquery.min.js"></script>
	<script src="/css/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/mole.js"></script>

</body>
</html>