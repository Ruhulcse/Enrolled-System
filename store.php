<?php
 $name=$_POST['name'];
 $id=$_POST['id'];
 $dept=$_POST['dept'];
 $birth=$_POST['birth'];
 $father=$_POST['father'];
 $mother=$_POST['mother'];
 $mobile=$_POST['mobile'];
 $address=$_POST['address'];
 $conn=mysqli_connect('localhost','root','','sms');
 $sql="INSERT INTO student VALUES('$name','$id','$dept','$birth','$father','$mother','$mobile','$address');";
 if(mysqli_query($conn,$sql))
 {
 	header("Location: first.php");
 }
 else
 {
 	echo "sorry not insterted try again";
 }
