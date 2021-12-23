<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="cssadmin.css">

<title>Untitled Document</title>

<style>
.foter{margin-top:40%; text-align:center; background:#000000; color:#FFFFFF; padding:20px;}

</style>
</head>

<body dir="rtl" background="images/2.jpeg">
<?php
session_start();

 if($_SESSION['login'] != true){
  header("location:login.php");
 }

?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
     <?php
     echo @_SESSION['name'] ;


    ?>
	</a>
     <nav>
  
    <div class="header">

      <ul>
        <li> <a aria-current="page" href="#">الرئيسية</a></li>
        
        <li> <a aria-current="page" href="#">صفحة 2</a> </li>
    
        <li>  <a href="#">صفحة 3</a>  </li>
     </ul>

      </nav>
         <form method="post" >
        <button class="btn btn-outline-light" name="logout">Logout</button>
        </form>
        </div>
</nav>
</div>
<?php
if(isset($_POST['logout'])){
session_destroy();
header("location:login.php");
}

?>
<br><br>
<h1><center><font color="black"><B>Welcome To Our Company network</B></font></center></h1>

<div class="foter">
لوحة تحكم الادمن
</div>

</body>
</html>
