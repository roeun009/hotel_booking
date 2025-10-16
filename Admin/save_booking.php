<?php 
  include("connection.php");
  $email=$_POST['email'];
  $rt=$_POST['rtype'];
  $chi=$_POST['ch_in'];
  $cho=$_POST['ch_out'];
  $guest=$_POST['guest']; 
   $select="INSERT INTO booking
       (email,room_type,check_in,check_out,guest)VALUES('$email','$rt','$chi','$cho',$guest)";
	  mysqli_query($connect,$select);
	  header("location:../index.php");    
?> 