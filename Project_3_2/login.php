<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Insert your Qusetion</title>
</head>
<!-- ./logo/hstu_logo_.png -->
<body >
<header>
     
       <nav class="n">
         <div class="menu-container">
         <div class="menu">
           
              <li class="item" ><a class="aa" href="main.php">Home</a></li>
              <li class="item" ><a class="aa" href="cr_password.php">CR</a></li>
              <li class="item" ><a class="aa" href="https://hstu.ac.bd/uploads/curriculam/cse_new_syllabus_2017.pdf">CSE Syllabus</a></li>
              
            </div>
            <div class="menu">
            <li class="item" ><a class="aa" href="https://hstu.ac.bd/page/all_notice/type/f/id/2">Notice Board</a></li>
              
              <li class="item" ><a class="aa" href="login.php">Log in</a></li>
              <li class="item" ><a class="aa" href="registration.php">Sign up</a></li>
              <li class="item" ><a class="aa" href="contact.php">Contact</a></li>
            </div>
         </div>
       </nav>
   </header>
  <div class="container">
  <form action="" method="POST">
   <div class="title">
    Student login Form
   </div>
     

    <div class="form">
    <div class="input_field">
          <label>UserName</label>
          <input type="text" class="input" name="username" onfocus="this.value=''" required>
        </div>

        
        <div class="input_field">
          <label>Password</label>
          <input type="password" value="" class="input" name="pass"    required>
        </div>
        
        
         
        <div class="input_field">
          <input type="submit" value="register" class="bnt" name="submit">


        </div>
    </div>
    </form>
  </div>
  
</body>
</html>
<?php

  if(isset($_POST["submit"])){
    $servername="localhost";
    $username="root";
    $password="";
    $dp_name="project_3_2";

   
   $user=$_POST['username'];
   $pass=$_POST['pass'];
  $con= mysqli_connect($servername,$username,$password,$dp_name);

  $sql1="SELECT * FROM `insert_information` where first_name='$user' and password='$pass'" ;
  $result1=mysqli_query($con,$sql1);
  
   if($result1){
     
      // header("Location: welcome.php);
      echo'<script>
      
       window.location.href="student_display.php";
    
      </script>';
     
    
  }
  else{
    
    echo'<script>
    alert("Password and Username do not match!!!");
 
   </script>';
  

  }
}



?>