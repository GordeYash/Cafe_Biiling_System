<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/createAccount.css">
</head>
<body>
    <?php include("Links.php"); ?>
<div class="container mt-5 ml-auto w-50 align-items-cente h-50">
  <h3 class="text-center mt-5 ">Create Account</h3>
<form class=" ml-auto mr-auto w-50 mt-5" action="../Controller/createAccountControll.php" method="post">
  
  <div class="form-group w-30">
    <label for="exampleInputEmail1">Enter User name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name" name="uname" required>

    <div class="form-group w-30">
    <label for="exampleInputEmail1">Enter Phone No</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone No" name="phno"> <div class="form-group w-30" required>

    <label for="exampleInputEmail1">Enter Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User email" name="email" required>
    
  </div>
  <div class="form-group w-30">
    <label for="exampleInputEmail1">Enter a Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password" name="pass" required>
    
  <div class="container mt-2  w-50 ">
  <button type="submit" class="btn btn-primary mt-2 " name="acc">Create Accout</button>
  
</div>
</form> 
</div> 
</div>
</body>
</html>