 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Document</title>
</head>
<body>



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


<form action="display.php" method="Post" enctype="multipart/form-data">
  <div class="container">
   <div class="title">
     Display your Document
   </div>

    <div class="form">
        <div class="input_field">
          <label>Level</label>
          <select class="selectbox" name="level" required>
            <option value="not select">level</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3" >3</option>
            <option value="4">4</option>

          </select>
        </div>
        <div class="input_field">
        <label>Semester</label>
          <select class="selectbox" name="semester" required>
            <option value="not select">semester</option>
            <option value="I">I</option>
            <option value="II">II</option>
          </select>
        </div>
        <div class="input_field">
        <label>Course code</label>
          <select class="selectbox" name="c_code" required>
            <option value="CSE-359">CSE-359</option>
            <option value="CSE-350" >CSE-350</option>
          </select>
        </div>


         
         <div class="input_field">
          <label> Type</label>
          <select class="selectbox" name="q_t" required>
            <option value="not select"> </option>
            <option value="MID">Book</option>
            <option value="MID">Notes</option>
            <option value="MID">MID</option>
            <option value="FINAL" >FINAL</option>
          </select>
          </div>
          
        
         
        <div class="input_field">
          <input type="submit" value="submit" class="bnt" name="btn_img">
         
        </div>
    </div>
  </div>
  </form>
    




  
</body>
</html>




  <?php
   if(isset($_POST["btn_img"])){
    
    $servername="localhost";
    $username="root";
    $password="";
    $dp_name="up";
    $con= mysqli_connect($servername,$username,$password,$dp_name);
    $level=$_POST['level'];
    $sem=$_POST['semester'];
    $c_code=$_POST['c_code'];
    $type=$_POST['q_t'];
    
    

}

?>


















  



