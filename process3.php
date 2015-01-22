<?php
session_start();

if (!isset($_SESSION['secretnumber'])) {
	header('location: greatnumbergame.php');	
} else {

	if (! is_numeric($_POST['guess']) || $_POST['guess'] < 1 || $_POST['guess'] > 100) {
		header('location: greatnumbergame.php?badnumber=true');
	} else if ($_POST['guess'] > $_SESSION['secretnumber']) {
		header('location: greatnumbergame.php?wrong=high');
	} else if ($_POST['guess'] < $_SESSION['secretnumber']) {
		header('location: greatnumbergame.php?wrong=low');
	} else if ($_POST['guess'] == $_SESSION['secretnumber']) {
		header('location: greatnumbergame.php?win=true');
	}
}
?>