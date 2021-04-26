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
        <p>You are now user dashboard page.</p>
        <p></p>
        <p>MENU</P>
        <p><a href="addcourse.php">Add Course</a></p>
        <p><a href="viewcourse.php">View all your courses</a></p>
        <p><a href="editcourse.php">Edit Course</a></p>
        <p><a href="deletecourse.php">Delete Couurse</a></p>

        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>