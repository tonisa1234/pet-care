<?php
session_start();
$conn=mysqli_connect("localhost","root","") or die (mysql_error());
mysqli_select_db($conn,"registration");
$msg = "";
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['psw'];
  $s="select *from student_info where email='$email' and password='$password';";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 1)
{
  $_SESSION['email']=$email;
  header('location:home.php');
  die();
}
else
  {
    $msg ="wrong email or password....";
  }
}
?>

<html>
<head>
 <title></title>
 <link href="style.css" rel="stylesheet" type="text/css"></link>
</head>
<body>
 <div class="log-box">
 <img class="usrimg" src="usr.png" />
 <h2>
Login to your Account</h2>
<form method="post">
    Email<br />

    <input name="email" placeholder="Enter Email" required="" type="text" />
    Password<br />

    <input name="psw" placeholder="Enter Password" required="" type="Password" />
    <input name="login" type="submit" value="Sign In" />
    <a href="#">Forget Password</a><br>
    <div style="color: red">
      <?php echo $msg ?>
    </div>
 </form>
</div>
</body>
</html>
