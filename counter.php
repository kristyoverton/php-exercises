<!DOCTYPE html>

<?php
	session_start();

	if (isset($_SESSION['numvisits'])) {
		$_SESSION['numvisits']++;
	} else {
		$_SESSION['numvisits'] = 1;
	}

?>
<html>
<head>
	<title="Visit Counter"></title>
	<style>
		h1 {
			font-family: sans-serif;
			font-size: 4em;
		}

		input {
			background-color: blue;
			color:white;
			font-size: 1em;
			border-radius: 5px;

		}

		#main {
			width:60%;
			margin:0px auto;
			text-align: center;
		}

		#counter {
			border:3px solid blue;
		}
	</style>
</head>
<body>
	<div id="main">
		<h1>You visited the site</h1>
		<div id="counter">
			<h1><?= $_SESSION['numvisits'] ?></h1>
		</div>
			<h1>times</h1>
			<form action="process.php" method="post">
			<input type="submit" value="Reset">
			</form>
	</div>

</body>
</html>