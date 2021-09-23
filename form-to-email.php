<?php
if (isset($_POST['submit']))
{
echo "error; you need to submit the form !" ;
}
$name = $_POST['Nom'];
$visitor_email= $_POST['Email'];
$message = $_POST['message'];

$email_from ='nedermfarrej@gmail.com';
$email_subject ="New form Submission";
$email_body = "You have received a new submission form $name.\n".
    "email adresse : $visitor_email\n".
    "Here is the message :\n $message".
$to = "nedermfarrej@gmail.com";
$headers = "From :$email_from";

mail($to,$email_subject,$email_from,$headers);
?>