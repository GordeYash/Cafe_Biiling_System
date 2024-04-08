<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    <link rel="stylesheet" href="../CSS/Statistics.css">
</head>
<body>
<?php include("NavBar.php");?>
<div class="container mt-5">
    <h2 class="text-center mb-4">All Orders</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Table NO</th>
      <th scope="col">User Name</th>
      <th scope="col">Total</th>
      <th scope="col">Payment</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>

    </tr>
  </thead>
 
  <tbody>
  <?php
$conn=mysqli_connect('localhost','roshan','Pass@123','Biling') or die("Connected Failed");

$query="select * from orders";

$rs=mysqli_query($conn,$query);
if(mysqli_num_rows($rs)>0){
while($row=mysqli_fetch_assoc($rs))
{

?>
    <tr>
      <td><?php echo "".$row['table_no'].""; ?></td>
      <td><?php echo "".$row['uname'].""; ?></td>
      <td><?php echo "".$row['total_amount'].""; ?> rs</td>
      <td><?php echo "".$row['payment_type'].""; ?></td>
      <td><?php echo "".$row['date'].""; ?></td>
      <td><?php echo "".$row['time'].""; ?></td>

      

    </tr>
    <?php 
    
}}?>
  </tbody>
</table>
</div>
</body>
</html>

