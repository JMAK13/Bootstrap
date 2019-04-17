<?php

	//Write to file
	$myfile = fopen("newfile.txt", "r+") or die("File does not exist!");	//opens file in update mode(read&write)
	$tmp = $_POST['userEm'];
	$email = $_POST['userEm'].PHP_EOL;			//PHP.EOL is newline (/n in C++)
	while(!feof($myfile)) {
  		$line = fgets($myfile);				//reads in each line of the .txt file
		if($line === $tmp) fwrite($myfile, $email);	//sanitizes the input, only writing unique emails
  	}
	fclose($myfile);

	//Redirects back to Contact Page
	if ( isset( $_POST['submit'] ) ) {
		echo "<h2>You have successfully subscribed to the Team Syrus Newsletter!</h2>";
		echo "<h3>Redirecting you back to the Home page in 3 seconds...</h3>";
		header('Refresh: 3; URL=http://www.rccsuits.com/index.html');
	}
	exit;
?>