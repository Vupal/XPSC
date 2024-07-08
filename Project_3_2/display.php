  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>



<table class="table text-center">
            <tr>
                 <th>Level</th> 
                 <th>Semester</th>
                 <th>Code</th>
                 <th>Tittle</th>
                 <th>year</th>
                 <th>Type</th>
                 <th>File</th>
                
                

            </tr>
            <?php
            $c_code=$_POST['c_code'];
            $type=$_POST['q_t'];
            
            $servername="localhost";
            $username="root";
            $password="";
            $dp_name="up";
            $con= mysqli_connect($servername,$username,$password,$dp_name);

            $sql1="SELECT * FROM `file` where c_code='$c_code' and type='$type'" ;
            $result1=mysqli_query($con,$sql1);
            while($fetch=mysqli_fetch_assoc($result1)){
               $file_path="upload/".$fetch['name'];
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
               <!-- <td><a href="delete.php?id=<?php echo $fetch['id'] ?>" class="btn btn-outline-danger">Delete</a></td> -->
               <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>download</a></td>
            </tr>
              

             <?php
              "";
            }


            ?>

            
        </table>




  






</body>
</html>
