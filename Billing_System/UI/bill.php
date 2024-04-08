<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("Links.php");
    
    

    ?>
    <div class="container w-50  mt-5  ">
      <form method="post">
    <h2 class="ms-4">The Apex Cafe</h2>
        <p><?php date_default_timezone_set("Asia/Dhaka");
        session_start();
echo date('d-m-Y h:i:s A'); ?></p>
    <p>Name : <?php echo $_SESSION['username'];?> <br>Table : <?php echo $_SESSION['tno'];?></p>
    <table class="table w-50 mt-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">quantity</th>
      <th scope="col">total</th>
    </tr>
  </thead>
  <tbody>
  <?php 
      $total=0;
      foreach($_SESSION['values'] as $index=> $value){
        $total+=$value[1]*$value[2];
    ?>
    <tr>
      <th scope="row"><?php echo $value[0];?></th>
      <td id="qunt"><?php echo $value[2];?> rs</td>
      <td><?php echo $value[1]; ?> </td>
      <td><?php echo $value[1]*$value[2]; ?> rs</td>
    </tr>
    <?php
  
}
      
  ?>
   <tr>
      <td></td>
      <td></td>
      <td>Total</td>
      <td><?php echo $total;?> rs</td>
</tr>
<tr><td></td>
<td></td><td></td>
      <td>
    <button type="submit" class="btn btn-warning" name="payment" >Payment</button>
</td>

    </tr>
  </tbody>
</table>
</form>
</div>
<?php
  if(isset($_POST["payment"]))
  {
    $name=$_SESSION['username'];
    $table=$_SESSION['tno'];
    $total;
    $payment="cash";
    $date=date("Y-m-d");
    $t=date("H:i:s");
    //session_destroy();
    $conn=mysqli_connect('localhost','roshan','Pass@123','Biling') or die("Connected Failed");

    $query="insert into orders values($table,'$name','$total','$payment','$date','$t')";

    $rs=mysqli_query($conn,$query);
     
    
    header("Location:../UI/Order.php");
     
}

?>
</body>
</html>

