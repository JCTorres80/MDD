<?php

function emailMe($name, $email, $message){
	$to      = 'jctorres80@fullsail.edu';
	$subject = 'from: '.$name;
	$headers = 'From: yourawesomeapp@fullsail.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
}

if(isset($_POST["name"])){
	emailMe($_POST["name"], $_POST["email"], $_POST["message"]);
}

header("Location: index.html");

?>