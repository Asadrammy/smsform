<?php
$insert=false;
if(isset($_POST['exam_id']))
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
$exam_id=$_POST['exam_id'];
$student_id=$_POST['student_id'];
$obtained_marks=$_POST['obtained_marks'];


$sql="INSERT INTO `exam_results` (`exam_id`, `student_id`, `obtained_marks`) VALUES ('$exam_id', '$student_id', '$obtained_marks');";

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
    <title>Exam Results Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="examresult.php" method="POST">
            <h2>Enter Exam Results</h2>
            <label for="exam_id">Exam ID:</label>
            <input type="number" id="exam_id" name="exam_id" required>

            <label for="student_id">Student ID:</label>
            <input type="number" id="student_id" name="student_id" required>

            <label for="obtained_marks">Obtained Marks:</label>
            <input type="number" id="obtained_marks" name="obtained_marks" required>

            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>




