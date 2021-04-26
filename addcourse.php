<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user addcoure page. Please select your prefer course</p>
        <p></p>
        <p></P>
        <p><a href="addcourse.php">Add Course</a></p>
        <p><a href="viewcourse.php">View all your courses</a></p>
        <p><a href="editcourse.php">Edit Course</a></p>
        <p><a href="deletecourse.php">Delete Couurse</a></p>

        <p><a href="logout.php">Logout</a></p>
    </div>
    <label for="course">Choose a course:</label>

<select name="course" id="course">
  <option value="pyton">Pyton</option>
  <option value="php">PHP</option>
  <option value="java">Java</option>
  <option value="html">Html</option>
</select>
</body>
</html>