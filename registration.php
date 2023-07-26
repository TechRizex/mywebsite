<?php
session_start();
header('location:signin.php');

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
$email=$_POST['email'];
$mobno=$_POST['mobilenumber'];
$curcitynm=$_POST['currentcname'];


$que="select * from signin where username='$users' && password='$password'";
$result=mysqli_query($con,$que);
$num=mysqli_num_rows($result);
if($num==1){
    echo "Duplicate data";
}
else
{
    $qy="insert into signin (username,password,mobilenumber,email,currentcity) values( '$users','$password','$mobno','$email','$curcitynm')";
    $n=mysqli_query($con,$qy);
    
}
?>