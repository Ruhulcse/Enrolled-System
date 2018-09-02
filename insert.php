<!DOCTYPE html>
<html>
<head>
	<title>new page</title>
	<link rel="stylesheet" type="text/css" href="ds.css">
</head>
<body class="inbody">
  <h1 class="center">Add student Full information</h1>
  <hr style="border: 2px solid #ff6464;">
  <div class="left">
  	<br>
  	<a class="button btn-info" href="index.php">View student list</a>
  </div>

  <div class="right">
    <form action="store.php" method="POST">
          <div class="form-group">
            <label class="it ic" for="Name">Name :</label>
            <input required type="text" class="form-control" name="name" placeholder="Enter student name">
          </div>
          <div class="form-group">
            <label class="it ic" for="ID">Student ID :</label>
            <input type="text" class="form-control" name="id" placeholder="Student's ID">
          </div>
          <div class="form-group">
            <label class="it ic" for="Dept">Department :</label>
            <input type="text" class="form-control" name="dept" placeholder="student's department">
          </div>
          <div class="form-group">
            <label class="it ic" for="Birth">Birth Year :</label>
            <input type="text" class="form-control" name="birth" placeholder="Ex: 01/07/2018">
          </div>
          <div class="form-group">
            <label class="it ic" for="Father">Father name :</label>
            <input type="text" class="form-control" name="father" placeholder="student's Father name">
          </div>
          <div class="form-group">
            <label class="it ic" for="Mother">Mother name :</label>
            <input type="text" class="form-control" name="mother" placeholder="student's mother name">
          </div>
          <div class="form-group">
            <label class="it ic" for="Mobile">Mobile :</label>
            <input type="text" class="form-control" name="mobile" placeholder="student's Mobile">
          </div>
          <div class="form-group">
            <label class="it ic" for="Address">Address: </label>
            <input type="text" class="form-control" name="address" placeholder="student's Address">
          </div>
          <button type="submit" class="button btn-info">Submit</button>
        </form>

  </div>
</body>
</html>