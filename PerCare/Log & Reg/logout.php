<?php
session_start();

if(isset($_POST['type']) && $_POST['type']=='ajax'){
  if((time()-$_SESSION['last_active_time'])>10){
    echo"logout";
  }
}
else{
  $_SESSION['last_active_time']=time();
  if(isset($_SESSION['last_active_time'])){
    if((time()-$_SESSION['last_active_time'])>10){
      header('location:login.php');
      die();
    }
  }
}
  ?>
