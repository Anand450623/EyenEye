<?php

$name = $_POST['name'];
$email = $_POST['email'];
$Mobile = $_POST['Mobile'];
$message = $_POST['message'];

$formcontent=" From: $name \n Phone: $Mobile \n Message: $message";

$subject = "Query from Eye&Eye";


$header = "From: Team Eye&Eye <eyeneye.noreply@gmail.com>\r\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$header.= "X-Priority: 1\r\n";

if(mail($email, $subject, $formcontent, $header))
{
	echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}	
else 
{
    echo '<p>Something went wrong. Please try again!</p>';
}

?>
