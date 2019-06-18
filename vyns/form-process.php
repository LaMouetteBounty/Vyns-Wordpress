<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "1b34f9be27-5be302@inbox.mailtrap.io";
$Subject = "New Message Received";
// $Body = "
// <html>
// <head>
// </head>
// <body>
// <p><u>test</u><p>
// </body>
// </html>"
// ;
// prepare email body text
$Body = "";
$Body .= "<h1>REPONSE FORMULAIRE</h1>";
$Body .= "<br>";
$Body .= "<b>Name:</b>";
$Body .= $name;
$Body .= "<br>";
$Body .= "<br>";
$Body .= "<b>Email:</b>";
$Body .= $email;
$Body .= "<br>";
$Body .= "<br>";
$Body .= "<b>Message:</b>";
$Body .= $message;


$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
// send email
$success = mail($EmailTo, $Subject, $Body,  implode("\r\n", $headers), "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>