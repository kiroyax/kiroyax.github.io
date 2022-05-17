<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "Od:" . $name . "<" . $email . ">\r\n";
$recipient = "naukajazdybis@gmail.com";

mail($recipient, 'Temat', $message, $mailheader)
or die("Wystąpił błąd");
