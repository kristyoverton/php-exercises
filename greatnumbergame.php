<!DOCTYPE html>

<?php
	session_start();

	if (!isset($_SESSION['secretnumber'])) {
		$_SESSION['secretnumber'] = rand(1,100);
	}
//	echo $_SESSION['secretnumber'];
?>
<html>
<head>
	<title="Survey Form"></title>
	<style>
		form > div {
			padding:1em;

		}

		input {
			font-size: 1em;
			border-radius: 5px;

		}

		#main {
			width:980px;
			margin:0px auto;
			border:1px solid black;
			font-family: sans-serif;
			text-align: center;
		}

		div #low, div #right, div #high {
			width:250px;
			height:300px;	
			display: inline-block;
			margin:0px;
			vertical-align: top;
			margin-bottom: 10px;
		}
<?php 		if (isset($_GET['wrong'])) {
				if ($_GET['wrong']=='low') {
?>					div #low {
						background-color: #dd0000;
					}					
<?php 			} else if ($_GET['wrong']=='high') {
?>					div #high {
						background-color: #dd0000;
					}	
<?php			}
			}
				
			if (isset($_GET['win']) && $_GET['win'])	{
?>				div #right {
					background-color: #00dd00;
				}
<?php 		}	
?>
	</style>
</head>
<body>
	<div id="main">
		<h1>Welcome to the Great Number Game!</h1>
		<h2>I am thinking of a number between 1 and 100</h2>
<?php 		if (isset($_GET['badnumber']) && $_GET['badnumber']) {
				echo "<h1 style='color:red'> I said, enter a NUMBER between ONE and ONE HUNDRED!</h1>";
			}

?>	<h2>Take a guess!</h2>
			<form action="process3.php" method="post">
			
				<div id="low">
<?php 			if (isset($_GET['wrong'])) {
					if ($_GET['wrong']=='low') {
?>						<h1 style="color:white">Too low!</h1>					
<?php  				} 	
				}
?>				</div>
			
				<div id="right">
<?php 				if (isset($_GET['win']) && $_GET['win']) {
?>						<h1 style="color:white"><?= $_SESSION['secretnumber'] ?> was the number!</h1>
<?php 					unset($_SESSION['secretnumber']);
?>						<input type="submit" value="Play Again">
<?php		  				} else {
?>						<input type="text" name="guess">
						<div>
							<input type="submit" value="submit">
						</div>
<?php 					}
?>				</div>
			
				<div id="high">
<?php 				if (isset($_GET['wrong'])) {
						if ($_GET['wrong']=='high') {
?>							<h1 style="color:white">Too high!</h1>					
<?php  					} 	
					}
?>				</div>

			</form>
	</div>

</body>
</html>