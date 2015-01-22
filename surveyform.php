<!DOCTYPE html>

<?php
	session_start();
?>
<html>
<head>
	<title="Survey Form"></title>
	<style>
		form > div {
			padding:1em 1em 1em 3em;

		}

		#textarea {
			height:100px;
			width:300px;
			display: block;
		}

		input {
			font-size: 1em;
			border-radius: 5px;
			

		}

		#main {
			width:60%;
			margin:0px auto;
			border:1px solid black;
			padding:10px	;
		}

	</style>
</head>
<body>
	<div id="main">
			<form action="process2.php" method="post">
				<div>
					<label for="yourname">Your Name:</label>
					<input type="text" name="yourname">
				</div>
				<div>
					<label for="dojolocation">Dojo Location:</label>
					<select name="dojolocation">
						<option value="Mountain View">Mountain View</option>
						<option value="Bellevue">Bellevue</option>
					</select>
				</div>
				<div>
					<label for="favlang">Favorite Language:</label>
					<select name="favlang">
						<option value="Javascript">Javascript</option>
						<option value="PHP">PHP</option>
						<option value="Ruby">Ruby</option>
					</select>
				</div>
				<div>
					<label for="comments">Comments (optional):</label>
					<input type="textarea" name="comments" id="textarea"></input>
				</div>
				<div>
					<input type="submit" value="submit">
				</div>
			</form>
	</div>

</body>
</html>