<?php

$EmailFrom = "coryschires@gmail.com";
$EmailTo = "coryschires@gmail.com";
$Subject = "CorySchires.com - Question";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

?>
