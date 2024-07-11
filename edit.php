<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$fee_id=$_GET['fee_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from fees where fee_id='$fee_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $fee_id=$row['fee_id'];

    $student_id=$row['student_id'];
    $amount=$row['amount'];
    $due_date=$row['due_date'];
    $status=$row['status'];
  
   }
   ?>

<form action="update.php" method="POST">
    <h2>Student Fees Form</h2>
    <input type="hidden"  name="fee_id"  value="<?php echo $fee_id;?>"><br><br>
    <label for="student_id">Student ID:</label>
    <input type="text" id="id" name="student_id"  value="<?php echo $student_id;?>"><br><br>

    <label for="amount">Amount :</label>
    <input type="number" id="amount" name="amount" value="<?php echo $amount;?>"><br><br>

    <label for="due_date">Due Date:</label>
    <input type="date" id="due_date" name="due_date"  value="<?php echo $due_date;?>"><br><br>

    <label>Status:</label>
    
        <input type="radio" id="status_pending" name="status" value="pending" checked>
        <label for="status_pending">Pending</label>
    
    
        <input type="radio" id="status_paid" name="status" value="paid">
        <label for="status_paid">Paid</label>
    

    <input type="submit" value="Submit">
</form>