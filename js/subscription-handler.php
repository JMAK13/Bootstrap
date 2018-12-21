<?php

	//Write to file
	$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
	$email = $_POST['userEm'].PHP_EOL;	//PHP.EOL is newline (/n in C++)
	fwrite($myfile, $email);
	fclose($myfile);

	//Redirects back to Contact Page
	if ( isset( $_POST['submit'] ) ) {
		header('Location: http://localhost/Bootstrap/Contact.html');
	}
	exit;
?>