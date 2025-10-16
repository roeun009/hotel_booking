<?php 
  include("connection.php");
  $img="images/".basename($_FILES["file"]["name"]);
  move_uploaded_file($_FILES["file"]["tmp_name"],$img);
  $roomtype=$_POST['rtype'];
  $price=$_POST['price'];
  $discribtion=$_POST['dis'];
  $select="INSERT INTO room(Picture,Room_Type,Price,Discribtion)VALUES('$img','$roomtype','$price','$discribtion')"; 
  mysqli_query($connect,$select);
  header("location:admin.php");    
?> 