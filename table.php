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
   $slc=" select * from grades";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
   echo "<th>"."grade id."."</th>";
    echo "<th>"."Student id."."</th>";
    echo "<th>"."Subject id"."</th>";
    echo "<th>"."grade"."</th>";
    echo "<th>"."date_recorded"."</th>";
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
    $grade_id=$row['grade_id'];
    echo "<tr>";
    echo "<td>".$row['grade_id']."</td>";
    echo "<td>".$row['student_id']."</td>";
    echo "<td>".$row['subject_id']."</td>";
    echo "<td>".$row['grade']."</td>";
    echo "<td>".$row['date_recorded']."</td>";
    echo "<td>"."<a href='edit.php?grade_id=".$grade_id."'>"."Edit"."</a>"."</td>";
    echo "<td>"."<a href='delete.php?grade_id=".$grade_id."'>"."Delete"."</a>"."</td>";
 
     echo "</tr>";
 }
 echo "</table>";
 
 ?>