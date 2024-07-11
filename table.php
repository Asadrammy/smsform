<?php


$servername="localhost";
$username="root";
$password="";
$db="sms";
$con= mysqli_connect($servername, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from attendance";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
   echo "<th>"."Attendance id."."</th>";
    echo "<th>"."Student name."."</th>";
    echo "<th>"."class name"."</th>";
    echo "<th>"."date"."</th>";
    echo "<th>"."status"."</th>";
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
   $attendance_id=$row['attendance_id'];
   echo "<tr>";
   echo "<td>".$row['attendance_id']."</td>";
   echo "<td>".$row['student_id']."</td>";
   echo "<td>".$row['class_id']."</td>";
   echo "<td>".$row['date']."</td>";
   echo "<td>".$row['status']."</td>";
   echo "<td>"."<a href='editing.php?attendance_id=".$attendance_id."'>"."Edit"."</a>"."</td>";
   echo "<td>"."<a href='delete.php?attendance_id=".$attendance_id."'>"."Delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";

?>