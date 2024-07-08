<?php

$servername="localhost";
$username="root";
$password="";
$dp_name="project_3_2";
$conn= mysqli_connect($servername,$username,$password,$dp_name);
if(mysqli_connect_errno()){
  echo "Failed";

}
else echo ""; 
?>