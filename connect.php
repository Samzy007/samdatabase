
<?php
$localhost = "localhost"; //your host name
$username = "root"; // your database name
$password = ""; // your database password
$dbname = "samdb";

$con = mysqli_connect($localhost, $username, $password, $dbname);


if($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}
echo "connected successfully"
"INSERT into `test` (username, password, email, create_datetime) VALUES ('Samzy', '" . md5($password) . "', 'fish@me.com', '15/04/2012')";


/* end of file */
?>