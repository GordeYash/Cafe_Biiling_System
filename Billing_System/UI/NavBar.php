<?php
include("Links.php");
echo "<link rel='stylesheet' href='/Billing_System/CSS/NavBar.css' type='text/css'/>";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mx-auto">
  <a class="navbar-brand fs-3" href="#">The Apex Cafe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  navbar-right ml-auto mb-1 mb-lg-0 text-center">
      <li class="nav-item active mr-autoS">
        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Order.php">Orders <span class="sr-only">(current)</span></a>
      </li> <li class="nav-item active">
        <a class="nav-link" href="Product.php">Products <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="statistics.php">Statistics <span class="sr-only">(current)</span></a>
</li>

      
    </ul>
    
  </div>
</nav>