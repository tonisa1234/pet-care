<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
  <div class="img">
   
       <div class="nav">
          <div class="logo">
             <h4><i><b>PeTLoVeR</b></i></h4>
              
          </div>
          <div class="links" id="links">
           <i class="fa fa-close"onclick="closeMenu()"  ></i>
            <ul>
             <a href="#"><li>Home</li></a>
             <a href="#"><li>Our Story</li></a>
             <a href="#"><li>Services</li></a>
             <a href="#"><li>About Doctors</li></a>
             <a href="#"><li>Take An Appoinment</li></a>
            </ul> 
           
            
          </div>
          <i class="fa fa-bars" onclick="showMenu()" ></i>
       </div>
       <div class="title" >
          <h2><a href="login.php">ADMIN</a></h2>
          <h2><a href="login.php">PATIENTS</a></h2>
          <h2><a href="login.php">DOCTOR</a></h2>
       </div>
       
   </div>
   
    <script>
        var show = document.getElementById("links");
        function showMenu(){
            show.style.right="0";
        }
        function closeMenu(){
            show.style.right="-200px";
        }
        
        
                           
    </script>
</body>
</html>




























