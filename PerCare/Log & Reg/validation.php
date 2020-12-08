<?php
session_start();
header('location:login.php');
$conn=mysqli_connect("localhost","root","") or die (mysql_error());
mysqli_select_db($conn,"registration");
  $email=$_POST['email'];
  $password=$_POST['psw'];
$s = "select * from student_info where email='$email'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1){
  echo"Email Already taken";
}
else
  {
    $reg = "insert into student_info(email,password) values ('$email','$password')";
    mysqli_query($conn,$reg);
  }
?>
