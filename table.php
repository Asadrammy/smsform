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
   $slc=" select * from notifications";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
   echo "<th>"."Notification"."</th>";
    echo "<th>"."User Id."."</th>";
    echo "<th>"."mressage"."</th>";
    echo "<th>"."date"."</th>";
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
   $notification_id=$row['notification_id'];
   echo "<tr>";
   echo "<td>".$row['notification_id']."</td>";
   echo "<td>".$row['user_id']."</td>";
   echo "<td>".$row['message']."</td>";
   echo "<td>".$row['date_sent']."</td>";
   echo "<td>"."<a href='edit.php?notification_id=".$notification_id."'>"."Edit"."</a>"."</td>";
   echo "<td>"."<a href='delete.php?notification_id=".$notification_id."'>"."Delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";

?>