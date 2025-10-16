<?php 
  include("connection.php");
  $img="img_slider/".basename($_FILES["file"]["name"]);
  move_uploaded_file($_FILES["file"]["tmp_name"],$img);
  $select="INSERT INTO slider(slider_image)VALUES('$img')"; 
  mysqli_query($connect,$select);
  header("location:testindex.php");    
?> 