<?php
$con = mysqli_connect("localhost","root" , "" , "company") or die ("can not connect") ;
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $pass = $_POST['pass'];
 
 $sql =mysqli_query($con,"insert into users(user_name,password) VALUES('$name','$pass')");
 
    if(empty($name) || empty($pass)){
        echo "you havn not insert the field";
        header("refresh:2;url=Adduser.php");
    }else{
        if($sql=true){
            echo "the data is inserted";
        }else{
            echo " error data";
        }
    }
}




?>