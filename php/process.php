<?php
session_start();
$con =@mysqli_connect("localhost","root", "" ,"company") or die ("can not connect");

$name = $_POST['name'];
$passw = $_POST['pass'];

$sql ="select * from users where user_name ='$name' and password = '$passw'";
$query = mysqli_query($con , $sql);
if(@mysqli_num_rows($query)){
   
    $_SESSION['user'] =$name ;
    $_SESSION['login'] =true;

    header("location:admin.php");
}else {
    echo "wrong data";
}

?>