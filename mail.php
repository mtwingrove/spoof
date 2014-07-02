<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php

$email_to = $_POST['tTo'];
$email_subject = $_POST['tSubject'];
$email_message = $_POST['tBody'];
$email_from = $_POST['tFrom'];
$pass = $_POST['tPass'];

//Set the password
$currPass = 'password';
 
 if ($pass == $currPass){
    // create email headers
    $headers = 'From: '.$email_from."\r\n".
               'Reply-To: dnr@test.com'."\r\n" .
               'MIME-Version: 1.0\r\n' .
               'Content-type:text/html;charset=iso-8859-1' . '\r\n';
               'X-Mailer: PHP/' . phpversion().'\r\n';
     $result = mail($email_to, $email_subject, $email_message, $headers); 
 
     if ($result) echo 'Sent!';
     if (!$result) echo 'Mail did not send.';
 }
 else{
		echo 'Wrong password.';
	}
?>
</html>
