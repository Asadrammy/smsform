<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$grade_id=$_GET['grade_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from grades where grade_id='$grade_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $grade_id=$row['grade_id'];

    $student_id=$row['student_id'];
    $subject_id=$row['subject_id'];
    $grade=$row['grade'];
    $date_recorded=$row['date_recorded'];
  
   }
   ?>

<form action="update.php" method="POST" id="gradesForm">
<input type="hidden" id="student_id" name="grade_id" value="<?php echo $grade_id;?>"><br><br>
    <label for="student_id">Student ID:</label>
    <input type="text" id="student_id" name="student_id" value="<?php echo $student_id;?>"><br><br>

    <label for="subject_id">Subject ID:</label>
    <input type="text" id="subject_id" name="subject_id" value="<?php echo $subject_id;?>"><br><br>

    <label for="grade">Grade:</label>
    <input type="text" id="grade" name="grade" value="<?php echo $grade;?>"><br><br>
<br><br>
    <label for="date_recorded">Date Recorded:</label>
    <input type="date" id="date_recorded" name="date_recorded" value="<?php echo $date_recorded;?>"><br><br>

<br><br>
    <input type="submit" value="Submit">
</form>