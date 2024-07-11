<?php

$student_id=$_POST['student_id'];
$subject_id=$_POST['subject_id'];
$grade=$_POST['grade'];
$date_recorded=$_POST['date_recorded'];
$grade_id=$_POST['grade_id'];

$server ="localhost";
$username="root";
$password="";
$db="sms";
//$sno=$_GET['sno'];
$con= mysqli_connect($server, $username, $password,$db);
if($con){
echo "connected to db";}
else{
   echo"not connected to db";}
   $slc="update grades set student_id='$student_id',subject_id='$subject_id',grade='$grade',date_recorded='$date_recorded' where grade_id='$grade_id'";
   $result=mysqli_query($con,$slc);
   if($result){
      echo "<script>
  window.alert('deleted');
  </script>";
      header('location:table.php');
  }
      else{
         echo"not delete to db";}
         ?>