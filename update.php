<?php

$user_id=$_POST['user_id'];
$message=$_POST['message'];
$date_sent=$_POST['date_sent'];
$notification_id=$_POST['notification_id'];
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
   $slc="update notifications set user_id='$user_id',message='$message',date_sent='$date_sent' where notification_id='$notification_id'";
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