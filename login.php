<?php
$con = mysqli_connect("localhost","root","","user");

$usertrim = trim($_POST['username']);

$usertrip= stripcslashes($usertrim);

$finaluser = htmlspecialchars($usertrip);

$passtrim = trim($_POST['password']);

$passtrip = stripcslashes($passtrim);
$finalpass = htmlspecialchars($passtrip);

$sql ="SELECT * FROM user_tbl where username = '$finaluser' AND password = '$finalpass'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>=1)
{
    header("Location:success.html");
}

else
{
    header("Location:fail.html");
}

$con->close();

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "user";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $user = $_POST['username'];
// $pass = $_POST['password'];

// $sql = "SELECT * FROM user_tbl WHERE username = '" . $user . "' AND password = '" . $pass . "'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) 
// {
//     header("Location:success.html");
// } else 
// {
//     header("Location:fail.html");
// }

// $conn->close();



?> 