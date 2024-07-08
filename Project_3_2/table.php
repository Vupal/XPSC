<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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

  
<table class="table text-center">
            <tr>
                 <th>Level</th> 
                 <th>Semester</th>
                 <th>Code</th>
                 <th>Tittle</th>
                 <th>year</th>
                 <th>Type</th>
                <th>File</th>
                <th>Delete</th>
                

            </tr>
            <?php

            $servername="localhost";
            $username="root";
            $password="";
            $dp_name="up";
            $con= mysqli_connect($servername,$username,$password,$dp_name);

            $sql1="SELECT * FROM `file`";
            $result1=mysqli_query($con,$sql1);
            while($fetch=mysqli_fetch_assoc($result1)){
              echo "";
              ?>
              <tr>
                <td><?php echo $fetch['level']?></td>   
                <td><?php echo $fetch['semester']?></td>
                <td><?php echo $fetch['c_code']?></td>
                <td><?php echo $fetch['c_tittle']?></td>
                <td><?php echo $fetch['year']?></td>
                <td><?php echo $fetch['type']?></td>

               <!-- <td><img src="./upload/<?php  echo $fetch['name']?>"  width=100px></td> -->
               <td><a href="./upload/<?php echo $fetch['name']?>"><?php  echo $fetch['name']?>></a></td>
               <td><a href="delete.php?id=<?php echo $fetch['id'] ?>" class="btn btn-outline-danger">Delete</a></td>

            </tr>
              

             <?php
              "";
            }


            ?>

            
        </table>




  





</body>
</html>