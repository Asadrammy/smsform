<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$exam_id=$_GET['exam_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from exams where exam_id='$exam_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $exam_id=$row['exam_id'];

    $subject_id=$row['subject_id'];
    $exam_date=$row['exam_date'];
    $total_marks=$row['total_marks'];
   }
   ?>

<form action="update.php" method="POST">
<input type="hidden"  name="exam_id" value="<?php echo $exam_id;?>"><br><br>
    <label>subject id:</label>
<input type="id" name="subject_id" value="<?php echo $subject_id;?>"><br><br>
<label>exam date:</label>
<input type="date" name="exam_date" value="<?php echo $exam_date;?>"><br><br>
<label>Total marks:</label>
<input type="text" name="total_marks" value="<?php echo $total_marks;?>"><br><br>
<input type="submit" Value="updated"/>
</form>