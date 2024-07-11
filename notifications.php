<?php
$insert=false;
if(isset($_POST['user_id']))
{
$server="localhost";
$username="root";
$password="";
$db="sms";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}
$sql="SELECT * FROM `classes`";
$result=mysqli_query($con,$sql);

//echo "connecting to the database "
$user_id=$_POST['user_id'];
$message=$_POST['message'];
$date_sent=$_POST['date_sent'];

$sql="INSERT INTO `notifications` (`user_id`, `message`,`date_sent` ) VALUES ('$user_id', '$message', '$date_sent')";
//echo $sql;

if ($con->query($sql)==true){
    //echo"successfully inserted";
    $insert=true;
}
else{
echo"ERROR:$sql <br> $con->error";
}
$con->close();
}
$server="localhost";
$username="root";
$password="";
$db="sms";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}
$sql="SELECT * FROM `classes`";
$result=mysqli_query($con,$sql);




?>





<!DOCTYPE html>
<html>
<head>
    <title>Notification Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<form action="notifications.php" method="POST" class="notification-form">
    <h2>Notification Form</h2>
    <label for="user_id">User ID:</label>
    <input type="text" id="user_id" name="user_id" required><br><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea><br><br>

    <label for="date_sent">Date Sent:</label>
    <input type="date" id="date_sent" name="date_sent" required><br><br>

    <input type="submit" value="Send Notification">
</form>

</body>
</html>