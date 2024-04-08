
<?php
function Connection(){
    $conn=mysqli_connect('localhost','roshan','Pass@123','Biling') or die("Connected Failed");
    return $conn;
    }
$conn=Connection();
function CreateAccount($username,$pass,$mno,$email)
{
    $conn=Connection();
    $query="insert into UserData(UserName,Password,mobileNo,email) values('$username','$pass','$mno','$email');";

    if(mysqli_query($conn,$query))
    {
        
        return true;
    }
    return false;
}

    if(isset($_POST['acc'])){
        $name=$_POST['uname'];
        $pass=$_POST['pass'];
        $phno=$_POST['phno'];
        $email=$_POST['email'];

        $res=CreateAccount($name,$pass,$phno,$email);
        if($res)
            header("Location:../UI/login.php");
        else
            header("Location:../UI/CreateAccount.php");

        
        
    }
    
    

?>