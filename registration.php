<?php
 session_start();
 header('location:index.php');
 
 $con=mysqli_connect('localhost','root','');

 mysqli_select_db($con,'registration');
 
 $name = $_POST['user'];
 $pass = $_POST['password'];

 $s="select * from logintable where name = '$name' ";

 $result=mysqli_query($con,$s);

 $num=mysqli_num_rows($result);

 if($num==1)
 {
     echo"username already taken";
 }
 else
 {
     $reg=" insert into logintable(name,password) values ('$name','$pass')";
     mysqli_query($con,$reg);
     echo"Registration Successful";
 }

?>