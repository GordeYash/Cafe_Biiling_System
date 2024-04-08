<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../CSS/Orders.css">
    <script src="../JS/Order.js"></script>
</head>
<body>
<?php include("NavBar.php");?>
<div class="container mt-5 ml-auto w-100 ">
  <h3 class=" text-center">User Orders</h3>
<form class=" mr-auto ml-auto w-50 mb-5" method="POST">
  
  <div class="form-group w-30">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
    
  </div>
  <div class="form-group w-30">
    <label for="exampleInputEmail1">Table No</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Table No" name="tno">
    
  </div>  <div class="form-group w-30">
    <label for="exampleInputEmail1">product Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="pname">
    
  </div> 
   <div class="form-group w-30">
    <label for="exampleInputEmail1">Product Quantity</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter quantity" name="quantity">
    
  </div>

<div class="container">
  <button type="submit" class="btn btn-primary" name="cart">Add Cart</button>

</div>
</form> 
</div> 
<hr>
<div class="container">
<table class="table ">
  <thead>
    <tr>
      <th scope="col ">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total Price</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
  <?php
        session_start();
        $nm=$_POST['pname'];
        $qt=$_POST['quantity'];
        $name=$_POST['name'];
        $table=$_POST['tno'];
        $_SESSION['username']=$_POST['name'];
        $_SESSION['tno']=$_POST['tno'];

        $conn=mysqli_connect('localhost','roshan','Pass@123','Biling') or die("Connected Failed");
        $query="select * from Product where pname='$nm'";


      $rs=mysqli_query($conn,$query);
      if(mysqli_num_rows($rs)>0){
      $row=mysqli_fetch_assoc($rs);
      $price=$row['price'];
        $_SESSION['values'][]=array($nm,$qt,$price);
      }
      

    ?>
  <tbody>
    <?php 
      $total=0;
      foreach($_SESSION['values'] as $index=> $value){
        $total+=$value[1]*$value[2];
    ?>
    <tr>
      <th scope="row"><?php echo $value[0];?></th>
      <td id="qunt"><?php echo $value[1];?></td>
      <td><?php echo $value[2]; ?> rs</td>
      <td><?php echo $value[1]*$value[2]; ?> rs</td>
      <td>
          <a class="btn btn-danger" href="../Controller/ordersControl.php?index=<?php echo $index;?>">Delete</a>
      </td>

    </tr>
    <?php
  
}
      
  ?>
    <tr>
      <td></td>
      <td></td>
      <td>Total</td>
      <td><?php echo $total;?> rs</td>
      <td>
<a class="btn btn-warning" href="../UI/bill.php">payment</a>
</td>

    </tr>
  </tbody>
  
</table>
</div>

</body>
</html>
