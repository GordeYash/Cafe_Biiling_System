<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <?php include("Links.php"); ?>
<div class="container mt-5 ml-auto w-50 align-items-cente h-50">
  <h3 class="text-center mt-5 ">Login Page</h3>
<form class=" ml-auto mr-auto w-50 mt-5" action="../Controller/loginController.php" method="post">
  
  <div class="form-group w-30">
    <label for="exampleInputEmail1">Enter User name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name" name="uname">
    
  </div>
  <div class="form-group w-30">
    <label for="exampleInputEmail1">Enter a Password</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password" name="pass">
    
  <div class="container mt-2  w-50 ">
  <a type="submit" class="btn btn-primary mt-2 " href="CreateAccount.php">Create Accout</a>
  <button type="submit" class="btn btn-primary mt-2" name="login">Login</button>
</div>
</form> 
</div> 
</div>
</body>
</html>