<?php
 $con = mysqli_connect("localhost", "root", "", "integrative_programming_subject");

 if(!$con){
   die("Error" . mysqli_connect_error());
 }
 else{
   echo "submitted";
 }
?>
