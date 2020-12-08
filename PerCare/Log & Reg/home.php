<?php
require("logout.php");
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
setInterval(function(){
  check_user();
},2000);
function check_user(){
  jQuery.ajax({
    url:'logout.php',
    type:'post',
    data:'type=ajax',
    success:function(result){
      if(result=='logout'){
        window.location.href='login.php';
      }
    }
  });
}
</script>


<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body  style=" background: #c1befa">

     <div>
       <h3 style="float: center">Welcome to Home page</h3>
       <p style="color:#802600;">Your session will finish automatically after 10 minutes!!</p>
     </div>

 </bod>
 </html>
