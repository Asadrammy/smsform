<?php
$insert=false;
if(isset($_POST['enrollment_date']))
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
$enrollment_date=$_POST['enrollment_date'];

$sql="INSERT INTO `enrollments` (`student_id`, `class_id`, `enrollment_date`) VALUES ('$student_id', '$class_id', '$enrollment_date');";
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
    <title>Enrollment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-actions {
            text-align: center;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #5cb85c;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enrollment Form</h2>
        <form action="enrollment.php" method="POST">
            <div class="form-group">
                <label for="student_id">Student ID</label>
                <input type="text" id="student_id" name="student_id" placeholder="Enter Student ID" required>
            </div>
            <div class="form-group">
                <label for="class_id">Class ID</label>
                <input type="text" id="class_id" name="class_id" placeholder="Enter Class ID" required>
            </div>
            <div class="form-group">
                <label for="enrollment_date">Enrollment Date</label>
                <input type="date" id="enrollment_date" name="enrollment_date" required>
            </div>
            <div class="form-actions">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

