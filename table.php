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
   $slc=" select * from enrollments";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
    echo "<th>"."Enrollment id."."</th>";
    echo "<th>"."Student Id"."</th>";
    echo "<th>"."Class id"."</th>";
    echo "<th>"."Enrollment Date"."</th>";
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
   $enrollment_id=$row['enrollment_id'];
   echo "<tr>";
   echo "<td>".$row['enrollment_id']."</td>";
   echo "<td>".$row['student_id']."</td>";
   echo "<td>".$row['class_id']."</td>";
   echo "<td>".$row['enrollment_date']."</td>";
   echo "<td>"."<a href='editform.php?enrollment_id=".$enrollment_id."'>"."Edit"."</a>"."</td>";
   echo "<td>"."<a href='delete.php?enrollment_id=".$enrollment_id."'>"."Delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";

?>

