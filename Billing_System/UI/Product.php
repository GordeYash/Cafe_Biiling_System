<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../CSS/Product.css">
</head>
<body >
    <?php include("NavBar.php"); ?>
    <div class="container mt-5 ml-auto w-100 align-items-cente">
  <h3 class="text-center ">Product Info</h3>
<form class=" ml-auto mr-auto w-50 " action="../Controller/ProductData.php" method="POST">
  
  <div class="form-group w-30">
    <label for="exampleInputEmail1">Enter Product name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product Name" name="pname" required>
    
  </div>
  <div class="form-group w-30">
    <label for="exampleInputEmail1">Product Price</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Price" name="price" required>
    
  

  <button type="submit" class="btn btn-primary mt-2 ml-auto" name="product">Submit</button>
</form> 
</div> 
</div>
<hr>
<div class="container mt-5">
    <h2 class="text-center mb-4">All Orders</h2>
<table class="table ">
  <thead>
    
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $conn=mysqli_connect('localhost','roshan','Pass@123','Biling') or die("Connected Failed");

      $query="select * from Product";

      $rs=mysqli_query($conn,$query);
    if(mysqli_num_rows($rs)>0){
      while($row=mysqli_fetch_assoc($rs))
      {

    ?>
    <tr>
      <td><?php echo "".$row['id'].""; ?></td>
      <td><?php echo "".$row['pname'].""; ?></td>
      <td><?php echo "".$row['price']." Rs"; ?></td>

      <td><a class="btn btn-success" href="/Billing_System/UI/UpdateProduct.php?id=<?php  echo $row['id']; ?>">Update</a>
      <a class="btn btn-success" href="/Billing_System/Controller/ProductData.php?id=<?php  echo $row['id']; ?>" name="delete">Delete</a></td>
    </tr>
  
    <?php
    }}
    
    ?>
  </tbody>
</table>
</div>
</body>
</html>
