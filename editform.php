<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$enrollment_id=$_GET['enrollment_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from enrollments where enrollment_id='$enrollment_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $enrollment_id=$row['enrollment_id'];

    $student_id=$row['student_id'];
    $class_id=$row['class_id'];
    $enrollment_date=$row['enrollment_date'];
   }
   ?>

<form action="update.php" method="POST">
<input type="hidden"  name="enrollment_id" value="<?php echo $enrollment_id;?>"><br><br>
    <label>student_id:</label>
<input type="id" name="student_id" value="<?php echo $student_id;?>"><br><br>
<label>class id:</label>
<input type="id" name="class_id" value="<?php echo $class_id;?>"><br><br>
<label>Enrollment date:</label>
<input type="date" name="enrollment_date" value="<?php echo $enrollment_date;?>"><br><br>


<input type="submit" Value="updated"/>
</form>