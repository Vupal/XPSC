<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Insert your Qusetion</title>
</head>
<body>

<header>
    
       <nav>
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
<main>
    
<div class="container">
  <form action="registration.php" method="POST">
   <div class="title">
     Registration form
   </div>

    <div class="form">
        <div class="input_field">
          <label>UserName</label>
          <input type="text" class="input" name="firstname" onfocus="this.value=''" required>
        </div>
        <div class="input_field">
          <label>Name</label>
          <input type="text" class="input" name="lastname" required>
        </div>
        <div class="input_field">
          <label>Id</label>
          <input type="text" class="input" name="id">
        </div>
        <div class="input_field">
          <label>Password</label>
          <input type="text" value=" " class="input" name="pass"    required>
        </div>
        <div class="input_field">
          <label>Confirm Password</label>
          <input type="password" class="input" name="conpass" required>
        </div>
        <div class="input_field" >
          <label>Gender</label>
          <select class="selectbox" name="gender" required>
            <option value="not select">Select</option>
            <option value="male">Male</option>
            <option  value="female">Female</option>
          </select>
        </div>
        <div class="input_field">
          <label class="check" name="checkmark" >
            <input type="checkbox" required>
            <span class="checkmark"></span>
          </label>
          <p>Agree to terms and condition</p>
        </div>
         
        <div class="input_field">
          <input type="submit" value="register" class="bnt" name="submit">


        </div>
    </div>
    </form>
  </div>
</main>
  
</body>
</html>
<?php

  if(isset($_POST["submit"])){
    $servername="localhost";
    $username="root";
    $password="";
    $dp_name="project_3_2";
    $conn= mysqli_connect($servername,$username,$password,$dp_name);
    
  $fname= $_POST['firstname'];
  $lname= $_POST['lastname'];
  $id= $_POST['id'];
  $pass= $_POST['pass'];
  $con_pass= $_POST['conpass'];
  $gender=$_POST['gender'];

  $query="SELECT * FROM `insert_information` WHERE id='$id' ";
  $result=mysqli_query($conn,$query);
  $count_id=mysqli_num_rows($result);
  $query1="SELECT * FROM `insert_information` WHERE first_name='$fname' ";
  $result1=mysqli_query($conn,$query1);
  $count_user=mysqli_num_rows($result1);

 if($count_id==0 && $count_user==0 && $pass==$con_pass)
 {

  $sql=" INSERT INTO `insert_information`(`first_name`, `last_name`, `id`, `password`, `con_password`,`gender`) VALUES ('$fname','$lname','$id','$pass','$con_pass','$gender')";
  $data=mysqli_query($conn,$sql);
  echo'<script>
  alert("Sucessful sign Up!!!");

  </script>';

 }
     
 else
 {
      echo'<script>
    alert("not sign Up!!!");
  
    </script>';
    }
    
  }



?>