<?php 
 $conn=mysqli_connect('localhost','root','','sms');
  $sql="SELECT *FROM student";
  $result=mysqli_query($conn,$sql);
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>new page</title>
  <link rel="stylesheet" type="text/css" href="ds.css">
</head>
<body class="wc">
  <h1 style="font-size: 49px;font-style: italic;color: #6fd080;">Welcome to Student enrollment system</h1>
  <br>
  <div class="left">
    <br>
    <a class="button btn-info" href="insert.php">Add new student</a>
  </div>

  <div class="right">

    <div class="search">
       <form id="searchthis" action="search.php" method="POST">
        <input id="namanyay-search-box"  type="text" name="search" placeholder="search student by ID">
        <input id="namanyay-search-btn" type="submit" value="search">
       </form>
    </div>
    
    <h1 class="center">Student list and their info</h1>
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
          <?php while($row=mysqli_fetch_assoc($result)){?>
              <tr>
                <td class="center it" style="width: 144px;"><?php echo $row['name'] ?></td>
                   <td class="center it"><?php echo $row['id'] ?></td>
                   <td class="center it"><?php echo $row['dept'] ?></td>
                   <td class="center it"><?php echo $row['birth']?></td>
                   <td class="special">
                      <a class="button btn-primary" href="show.php?id=<?php echo $row['id'];?>">View Full Info</a>
                      <a class="button btn-warning" href="update.php?id=<?php echo $row['id'];?>">update</a>
                      <a class="button btn-danger" onclick=" return confirm('are you sure')" href="delete.php?id=<?php echo $row['id'];?>">delete</a>  
                  </td> 
              </tr>
         <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
