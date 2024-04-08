<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <?php  include( "Links.php");?>
    <?php 
    
    function Connection(){
      $conn=mysqli_connect('localhost','roshan','Pass@123','Biling') or die("Connected Failed");
      return $conn;
  }
  
      
  function getData($id)
  {
      $conn=Connection();
  
          $query="select * from Product where id='$id'";
          $flag=0;
          $flag=mysqli_query($conn,$query);
              
      return $flag;
  
  }
    $id=$_GET['id'];
    $rs=getData($id);
    $row=mysqli_fetch_assoc($rs);
    ?>
    <h1 class="mt-5 text-center">Update Product </h1>
    <div class="container w-50 mt-5">
    <form class=" ml-auto mr-auto w-50 " action="../Controller/ProductData.php" method="POST">
  
  <div class="form-group w-30">
    <label for="exampleInputEmail1">Enter Product name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product Name" name="pname" value="<?php echo $row['pname'];?>">
    
  </div>
  <div class="form-group w-30">
    <label for="exampleInputEmail1">Product Price</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Price" name="price" value="<?php echo $row['price'];?>">
    
  <input type="hidden" value="<?php echo $id; ?>" name="idval">

  <button type="submit" class="btn btn-primary mt-2 ml-auto" name="upProduct">Update</button>
</form> 
</div>
</body>
</html>