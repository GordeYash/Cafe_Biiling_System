<?php
    session_start();

if(isset($_GET['index']))
{
        $index=$_GET['index'];
       
       if(isset($_SESSION['values'][$index]))
            unset($_SESSION['values'][$index]);
           
header("Location:../UI/Order.php");

}







?>