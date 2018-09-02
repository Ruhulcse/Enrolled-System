<?php
  $user=$_POST['username'];
  $pass=$_POST['password'];
  if($user=='admin')
  {
  	if($pass=='admin')
  	{
  		header("Location: first.php");
  	}
  }
  else
  {
  	  $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  }

?>