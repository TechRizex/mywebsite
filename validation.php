<?php
session_start();
header('location:login.php');

$con =mysqli_connect('localhost','root'  );
if($con){
  echo "connection successfull";
}
else
{
    echo "no Connection";
}

mysqli_select_db($con,'session');

$users=$_POST['users'];
$password=$_POST['password'];

$que="select * from signin where username='$users' && password='$password'";
$result=mysqli_query($con,$que);
$num=mysqli_num_rows($result);
if($num==1){
     $_SESSION['username']=$users;
     header('location:home.php');
}

else
{
     header('location:login.php');
}
?>