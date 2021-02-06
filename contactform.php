<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $mailTo = "georgeyofficial@gmail.com";
  $headers = "From: georgyofficial@gmail.com";
  $txt = "Email: ".$email."\n\n""You have received a message from ".$name.".\n\n".$message;
  
  mail($mailTo, $txt, $headers);
  header("Location: index.php?mailsend");
}
