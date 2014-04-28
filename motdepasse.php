<?php 
	if (isset($_POST['pass'])) {
		#if (isset($_POST['pass2'])) {
	$pass = $_POST['pass'];
	$pass2 = $_POST['pass2'];
	if ($pass == 'active') {
	#if (is_numeric($pass) && is_numeric($pass2)) {
		#if ($pass == "active") {
		$como = fopen("com3","w");
		fwrite($como,chr(97));
		fclose($como);
		echo("<div class='com'><p>pass: ");
		echo($pass);
		echo("</p>");
		echo("<p>pass2: ");
		echo($pass2);
		echo("</p> </div>");
		}
		}
	
?>
