<?php

	//PHP Script by Josh McIntyre
	//Writes unique email form submissions from html page to .txt file
	//then redirects the user back to the Home page after 3 seconds
	$myfile = fopen("newfile.txt", "r+") or die("File does not exist!");	//opens file in update mode(read&write)
	$email = $_POST['userEm'].PHP_EOL;			//PHP.EOL is newline (/n in C++)
	$found = false;
	while(! feof($myfile)) {
  		$line = fgets($myfile);				//reads in each line of the .txt file
		if($line === $email) $found = true;		//checks for duplicate emails
  	}
	if(! $found) fwrite($myfile, $email);			//sanitizes the input, only writing unique emails
	fclose($myfile);

	//Redirects back to Contact Page
	if ( isset( $_POST['submit'] ) ) {
		echo "<h2>You have successfully subscribed to the Team Syrus Newsletter!</h2>";
		echo "<h3>Redirecting you back to the Home page in 3 seconds...</h3>";
		header('Refresh: 3; URL=http://www.rccsuits.com/index.html');
	}
	exit;
?>