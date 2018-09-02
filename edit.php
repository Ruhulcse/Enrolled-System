<?php
  $id=$_POST['id'];
  $name=$_POST['name'];
  $dept=$_POST['dept'];
  $birth=$_POST['birth'];
  $father=$_POST['father'];
  $mother=$_POST['mother'];
  $address=$_POST['address'];
  $contact=$_POST['mobile'];

  $conn=mysqli_connect('localhost','root','','sms');
  $sql="UPDATE student SET name='$name',id='$id',dept='$dept',birth='$birth', father='$father',mother='$mother',father='$father',mobile='$contact',address='$address' WHERE id=$id ";
  if(mysqli_query($conn,$sql))
 {
 	header("Location: show.php?id=".$id);
 }
 else
 {
 	echo "Update again please";
 }
 
?>