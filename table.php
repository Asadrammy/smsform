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
   $slc=" select * from fees";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
   echo "<th>"."fees id."."</th>";
    echo "<th>"."Student id."."</th>";
    echo "<th>"."Amount"."</th>";
    echo "<th>"."Date"."</th>";
    echo "<th>"."Status"."</th>";
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
    $fee_id=$row['fee_id'];
    echo "<tr>";
    echo "<td>".$row['fee_id']."</td>";
    echo "<td>".$row['student_id']."</td>";
    echo "<td>".$row['amount']."</td>";
    echo "<td>".$row['due_date']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<td>"."<a href='edit.php?fee_id=".$fee_id."'>"."Edit"."</a>"."</td>";
    echo "<td>"."<a href='deleted.php?fee_id=".$fee_id."'>"."Delete"."</a>"."</td>";
 
     echo "</tr>";
 }
 echo "</table>";
 
 ?>