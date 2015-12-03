<?php

define('CRLF', "\r\n");

$from_email = $_POST['email'];
$from_name = $_POST['name'];

$subject = $_POST['subject'];
$message = $_POST['message'];

$headers  = 'MIME-Version: 1.0' . CRLF;
$headers .= 'Content-type: text/html; charset=utf-8' . CRLF;
$headers .= "From: {$from_name} <{$to_email}>" . CRLF;
$headers .= 'To: Inteligra <hello@inteligra.co>' . CRLF;

mail($to, $subject, $message, $headers);

header('Location: http://inteligra.co');

exit();
