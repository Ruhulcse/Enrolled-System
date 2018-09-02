<?php 
  $id=$_GET['id'];
  $conn=mysqli_connect('localhost','root','','sms');
  $sql="SELECT *FROM student WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  $std=mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>new page</title>
	<link rel="stylesheet" type="text/css" href="ds.css">
</head>
<body>
	

  <div class="left">
  	<br>
  	<a class="button btn-info" href="first.php">View All student</a>
  </div>

  <div class="right">
    
    <h1 class="center" style="color:#36c108"><?php echo $std['name'];?>'s Full information</h1>
    <hr>
    <div class="td">
    	<table class="tab">
    	  <tr>
    	  	<th>Name: </th>
    	  	<td class="it"><?php echo $std['name']?> <hr></td>
    	  </tr>
    	  <tr>
    	  	<th>ID: </th>
    	  	<td class="it"><?php echo $std['id']?><hr></td>
    	  </tr>
       	  <tr>
    	  	<th>Department: </th>
    	  	<td class="it"><?php echo $std['dept']?><hr></td>
    	  </tr>
    	  <tr>
    	  	<th>Birth Date: </th>
    	  	<td class="it"><?php echo $std['birth']?><hr></td>
    	  </tr>
    	  <tr>
    	  	<th>Father's Name: </th>
    	  	<td class="it"><?php echo $std['father']?><hr></td>
    	  </tr>
    	  <tr>
    	  	<th>Mother's Name: </th>
    	  	<td class="it"><?php echo $std['mother']?><hr></td>
    	  </tr>
    	  <tr>
    	  	<th>Contact: </th>
    	  	<td class="it"><?php echo $std['mobile']?><hr></td>
    	  </tr>
    	  <tr>
    	  	<th>Address: </th>
    	  	<td class="it"><?php echo $std['address']?><hr>
    	  	</td>
    	  </tr>
    	</table>
    </div>
  </div>
</body>
</html>