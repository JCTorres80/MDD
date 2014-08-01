<?php

function emailMe($name, $email, $message){
	$to      = 'jctorres80@fullsail.edu';
	$subject = 'from: '.$name;
	$headers = 'From: yourawesomeapp@fullsail.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	return mail($to, $subject, $message, $headers);
}

if(isset($_POST["name"])){
	if(emailMe($_POST["name"], $_POST["email"], $_POST["message"])){
		header("Location: success.html");
	} else {
		header("Location: failure.html");
	}
}

header("Location: index.html");

?>