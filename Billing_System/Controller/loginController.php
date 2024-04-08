<?php
function Connection(){
    $conn=mysqli_connect('localhost','roshan','Pass@123','Biling') or die("Connected Failed");
    return $conn;
}

    
function getData($uname,$pass)
{
    $conn=Connection();

        $query="select * from UserData where UserName='$uname' AND Password='$pass'";
        $flag=0;
        $flag=mysqli_query($conn,$query);
            
    return $flag;

}
    if(isset($_POST['login']))
    {
        $name=$_POST['uname'];
        $pass=$_POST['pass'];
        $flag=getData($name,$pass);
        if(mysqli_num_rows($flag)>0){
            header("Location:../UI/Home.php");
        }
        else
            header("Location:../UI/login.php");


    }

    

?>