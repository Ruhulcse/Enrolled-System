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
<body class="back">
  <h1 class="h" style="margin-left:557px;">Data recod successfully found!!
  </h1>
   <img class="img" src="image/happy.png">
  <div class="left">
    <br>
    <a class="button btn-info " href="first.php">View student list</a>
  </div>

  <div class="right">
    <h2 class="h" style="text-align: center; font-style: italic;">This is <?php echo $std['name']?></h2>
    <br>
    <h2 class="center h">Here is <?php echo $std['name']?>'s short informatin</h2>
    <hr>
    <div>
      <table >
        <thead>
          <th class="sp">Name</th>
          <th class="sp">ID</th>
          <th class="sp">Dept</th>
          <th class="sp">Birth</th>
          <th class="sp">Action</th>
        </thead>
        <tbody>
              <tr>
                <td class="center h"><?php echo $std['name'] ?></td>
                   <td class="center h"><?php echo $std['id'] ?></td>
                   <td class="center h"><?php echo $std['dept'] ?></td>
                   <td class="center h"><?php echo $std['birth']?></td>
                   <td class="special">
                      <a class="button btn-primary" href="show.php?id=<?php echo $std['id'];?>">View Full Info</a>
                      <a class="button btn-warning" href="update.php?id=<?php echo $std['id'];?>">update</a>
                      <a class="button btn-danger" onclick=" return confirm('are you sure')" href="delete.php?id=<?php echo $std['id'];?>">delete</a>  
                  </td> 
              </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>