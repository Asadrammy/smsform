<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$attendance_id=$_GET['attendance_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from attendance where attendance_id='$attendance_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $attendance_id=$row['attendance_id'];

    $student_id=$row['student_id'];
    $class_id=$row['class_id'];
    $date=$row['date'];
    $status=$row['status'];
  
   }
   ?>

<form action="update.php" method="POST">
<input type="hidden" id="student_id" name="attendance_id" value="<?php echo $attendance_id;?>"><br><br>

    <label for="student_id">Student ID:</label><br>
    <input type="text" id="student_id" name="student_id" value="<?php echo $student_id;?>"><br><br>

    <label for="class_id">Class ID:</label><br>
    <input type="text" id="class_id" name="class_id"  value="<?php echo $class_id;?>"><br><br>

    <label for="date">Date:</label><br>
    <input type="date" id="date" name="date"  value="<?php echo $date;?>"><br><br>

    <label>Status:</label><br>
    <input type="radio" id="status_present" name="status" value="present" ><br>
    <label for="status_present">Present</label><br>

    <input type="radio" id="status_absent" name="status" value="absent"><br>
    <label for="status_absent">Absent</label><br>

    <input type="radio" id="status_late" name="status" value="late"><br>
    <label for="status_late">Late</label><br>

    <input type="radio" id="status_excused" name="status" value="excused"><br>
    <label for="status_excused">Excused</label><br><br>

    <input type="submit" value="Submit">
  </form>