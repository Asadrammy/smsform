<?php

$student_id=$_POST['student_id'];
$amount=$_POST['amount'];
$due_date=$_POST['due_date'];
$status=$_POST['status'];
$fee_id=$_POST['fee_id'];

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
   $slc="update fees set student_id='$student_id',amount='$amount',due_date='$due_date',status='$status' where fee_id='$fee_id'";
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