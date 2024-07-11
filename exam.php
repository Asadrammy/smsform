<?php
$insert=false;
if(isset($_POST['subject_id']))
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
$subject_id=$_POST['subject_id'];
$exam_date=$_POST['exam_date'];
$total_marks=$_POST['total_marks'];

$sql="INSERT INTO `exams` ( `subject_id`, `exam_date`, `total_marks`) VALUES ('$subject_id', '$exam_date', '$total_marks');";
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
    <title>Exam Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="exam.php" method="POST" class="exam-form">
            <h2>Enter Exam Details</h2>
            <div class="form-group">
                <label for="subject_id">Subject ID</label>
                <input type="number" id="subject_id" name="subject_id" required>
            </div>
            <div class="form-group">
                <label for="exam_date">Exam Date</label>
                <input type="date" id="exam_date" name="exam_date" required>
            </div>
            <div class="form-group">
                <label for="total_marks">Total Marks</label>
                <input type="number" id="total_marks" name="total_marks" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>