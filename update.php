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
<body style="background-color:#9fad6a;">
  <div class="left">
  	<br>
  	<a class="button btn-info" href="first.php">View student list</a>
  </div>

  <div class="right">
    
    <h2 class="center">Update <?php echo $std['name'];?>'s Information</h2>

    <form action="edit.php?id=<?php echo $id?>" method="POST">
          <div class="form-group">
            <label class="it" for="Name">Name :</label>
            <input required type="text" class="form-control" name="name" value="<?php echo $std['name'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="ID">Student ID :</label>
            <input type="text" class="form-control" name="id" value="<?php echo $std['id'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Dept">Department :</label>
            <input type="text" class="form-control" name="dept" value="<?php echo $std['dept'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Birth">Birth Year :</label>
            <input type="text" class="form-control" name="birth" value="<?php echo $std['birth'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Father">Father name :</label>
            <input type="text" class="form-control" name="father" value="<?php echo $std['father'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Mother">Mother name :</label>
            <input type="text" class="form-control" name="mother" value="<?php echo $std['mother'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Mobile">Mobile :</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $std['mobile'];?>">
          </div>
          <div class="form-group">
            <label class="it" for="Address">Address: </label>
            <input type="text" class="form-control" name="address" value="<?php echo $std['address'];?>">
          </div>
          <button type="submit" class="button btn-info">Update Me</button>
        </form>

  </div>
</body>
</html>