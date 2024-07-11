<?php

$student_id=$_POST['student_id'];
$class_id=$_POST['class_id'];
$enrollment_date=$_POST['enrollment_date'];



$enrollment_id=$_POST['enrollment_id'];

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
   $slc="update enrollments set student_id='$student_id',class_id='$class_id',enrollment_date='$enrollment_date' where enrollment_id='$enrollment_id'";
   $result=mysqli_query($con,$slc);
   if($result){
      echo "<script>
  window.alert('deleted');
  </script>";
      header('location:table.php');
  }
      else{
         echo"not deleted to db";}
         ?>