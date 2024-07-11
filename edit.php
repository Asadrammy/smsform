<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$notification_id=$_GET['notification_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from notifications where notification_id='$notification_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $notification_id=$row['notification_id'];

    $user_id=$row['user_id'];
    $message=$row['message'];
    $date_sent=$row['date_sent'];
    
  
   }
   ?>

<form action="update.php" method="POST">
    <h2>Notification</h2>
    <input type="hidden"  name="notification_id"  value="<?php echo $notification_id;?>"><br><br>
    <label for="student_id">user ID:</label>
    <input type="id"  name="user_id"  value="<?php echo $user_id;?>"><br><br>

    <label for="amount">Message:</label>
    <input type="text" name="message" value="<?php echo $message;?>"><br><br>

    <label for="due_date">date sent:</label>
    <input type="date"  name="date_sent"  value="<?php echo $date_sent;?>"><br><br>

    
    <input type="submit" value="Submit">
</form>