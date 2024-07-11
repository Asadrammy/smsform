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
$subject_id=$_POST['subject_id'];
$grade=$_POST['grade'];
$date_recorded=$_POST['date_recorded'];

$sql="INSERT INTO `grades` (`student_id`, `subject_id`, `grade`, `date_recorded`) VALUES ('$student_id', '$subject_id', '$grade', '$date_recorded');";
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
<html>
<head>
<title>Grades form</title>
</head>
<body>
<link rel="stylesheet" href="styles.css">
<h2>Student Grades Form</h2>

<form action="grades.php" method="POST" id="gradesForm">
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" required><br><br>

    <label for="subject_id">Subject ID:</label>
    <input type="text" id="subject_id" name="subject_id" required><br><br>

    <label for="grade">Grade:</label>
    <input type="text" id="grade" name="grade" required>
<br><br>
    <label for="date_recorded">Date Recorded:</label>
    <input type="date" id="date_recorded" name="date_recorded" required>

<br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
