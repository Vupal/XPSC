<?php
$id=$_GET['id'];
$servername="localhost";
$username="root";
$password="";
$dp_name="up";
$con= mysqli_connect($servername,$username,$password,$dp_name);
 $sql="DELETE FROM `file` WHERE id='$id'";
$result=mysqli_query($con,$sql);
if($result){
   header("location: table.php");
}

 
?>