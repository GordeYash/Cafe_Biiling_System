<?php
function Connection(){
    $conn=mysqli_connect('localhost','roshan','Pass@123','Biling') or die("Connected Failed");
    return $conn;
}

function addProduct($pname,$price)
{
        $conn=Connection();
        $query="insert into Product(pname,price) values ('$pname','$price')";
        if(mysqli_query($conn,$query))
            return true;
        return false;
}
function deleteProduct($id)
{
        $conn=Connection();
        $query="delete from Product where id='$id'";
        if(mysqli_query($conn,$query))
            return true ;
        return false;
}

function updateProduct($id,$name,$price)
{
        $conn=Connection();
        $query="update Product set pname='$name',price='$price' where id='$id'";

        if(mysqli_query($conn,$query))
            return true;
        return false;
}

if(isset($_POST['product']))
{
    $name=$_POST['pname'];
    $price=$_POST['price'];

    $flag=addProduct($name,$price);
    if($flag)
        header("Location:../UI/Product.php");
    else
        header("Location:../UI/Product.php");
}


    $id=$_REQUEST['id'];
    echo $id;
    $rs=deleteProduct($id);
    if($rs)
        header("Location:../UI/Product.php");
    else
        header("Location:../UI/Product.php");



if(isset($_POST['upProduct']))
{
    $id=$_POST['idval'];
    $name=$_POST['pname'];
    $price=$_POST['price'];

    $flag=updateProduct($id,$name,$price);
    if($flag)
        header("Location:../UI//Product.php");
    else
        header("Location:../UI/UpdateProduct.php");

} 

?>