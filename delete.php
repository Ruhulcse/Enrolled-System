<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','sms');
$sql="DELETE FROM student WHERE id=$id";
if(mysqli_query($conn,$sql))
{
 
	header("Location: first.php");
}
else
{
	echo "Deletion is not posssible ";
}
?>