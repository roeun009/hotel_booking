<?php 
  include("connection.php");
  $img="img_gallery/".basename($_FILES["file"]["name"]);
  move_uploaded_file($_FILES["file"]["tmp_name"],$img);
  $select="INSERT INTO gallery(gallery_image)VALUES('$img')"; 
  mysqli_query($connect,$select);
  header("location:admingallery.php");    
?> 