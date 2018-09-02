<?php
  $id=$_POST['search'];
  $conn=mysqli_connect('localhost','root','','sms');
  $sql="SELECT *FROM student WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  $std=mysqli_fetch_assoc($result);
  if($result)
  {
    if(mysqli_num_rows($result)<1)
    {
     header("Location: not_found.php");
    }
    else
    {
      header("Location: found.php?id=".$id);
    }
  }
  else
  {
    echo "query failed";
  }
?>
