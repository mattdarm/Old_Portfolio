<?php
header("Location: index.html#contact");
$to      = 'md.matt.dar@gmail.com';
$name = $_POST['name'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['email'] . "\r\n" .
         'Content-type: text/html; charset=utf-8';

mail($to, $name, $message, $headers);
?>
