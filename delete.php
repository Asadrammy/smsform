<?php


$server ="localhost";
$username="root";
$password="";
$db="sms";
$attendance_id=$_GET['attendance_id'];
$con= mysqli_connect($server, $username, $password,$db);
if($con){
echo "connected to db";}
else{
   echo"not connected to db";}
   $slc="delete from attendance  where attendance_id='$attendance_id'";
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