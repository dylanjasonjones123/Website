<?php

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $number = $_POST['number'];
  $message = $_POST['message'];

  $mailTo = "scaldygains@gmail.com"
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name."\n \n".$message;


  mail($mailTo, $txt, $headers);
  header("LocationL contact.html?mailsend")
}
