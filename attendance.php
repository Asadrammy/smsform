<?php
$insert=false;
if(isset($_POST['student_id']))
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

//echo "connecting to the database "
$student_id=$_POST['student_id'];
$class_id=$_POST['class_id'];
$date=$_POST['date'];
$status=$_POST['status'];


$sql="INSERT INTO `attendance` (`student_id`, `class_id`, `date`, `status`) VALUES ('$student_id', '$class_id', '$date', '$status');";
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




?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Attendance Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    label {
      font-weight: bold;
      color: #555;
    }

    input[type=text], input[type=date] {
      width: calc(100% - 20px);
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type=radio] {
      margin-right: 8px;
      vertical-align: middle;
    }

    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 10px;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2>Student Attendance Form</h2>
  <form action="attendance.php" method="POST">
    <label for="student_id">Student ID:</label><br>
    <input type="text" id="student_id" name="student_id" required><br><br>

    <label for="class_id">Class ID:</label><br>
    <input type="text" id="class_id" name="class_id" required><br><br>

    <label for="date">Date:</label><br>
    <input type="date" id="date" name="date" required><br><br>

    <label>Status:</label><br>
    <input type="radio" id="status_present" name="status" value="present" required>
    <label for="status_present">Present</label><br>

    <input type="radio" id="status_absent" name="status" value="absent">
    <label for="status_absent">Absent</label><br>

    <input type="radio" id="status_late" name="status" value="late">
    <label for="status_late">Late</label><br>

    <input type="radio" id="status_excused" name="status" value="excused">
    <label for="status_excused">Excused</label><br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>