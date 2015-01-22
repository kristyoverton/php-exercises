<?php
session_start();

if (isset($_SESSION['timessubmitted'])) {
	$_SESSION['timessubmitted']++;
} else {
	$_SESSION['timessubmitted'] = 1;
}

?>
<!doctype html>
<html>
<head>
	<style type="text/css">
		#green {
			border:1px solid black;
			background-color: #ccffcc;
			margin:10px auto;
			padding:10px;
		}

		#main {
			border:1px solid black;
			padding:10px;
			margin:10px auto;
		}
	</style>
</head>
<body>
	<div id="green">
		<p>Thanks for submitting this form! You have submitted this form 
			<?= $_SESSION['timessubmitted'] ?>
		times now.</p>
	</div>
	<div id="main">
		<h2>Submitted Information</h2>
		<p>Name: <?= $_POST['yourname'] ?></p>
		<p>Dojo Location: <?=$_POST['dojolocation'] ?></p>
		<p>Favorite Language: <?= $_POST['favlang'] ?></p>
		<p>Comments: <?= $_POST['comments'] ?></p>
	</div>

</body>
</html>