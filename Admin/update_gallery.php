<?php 
  include("connection.php");
  $id=$_REQUEST['id'];
  $myimg=basename($_FILES["file"]["name"]);
  $img="img_gallery/".basename($_FILES["file"]["name"]);
  $img1=$_REQUEST["img1"];
  if(empty($myimg))
  {  
      $img2=$img1;
  }
  else
  {
      $img2=$img;
      move_uploaded_file($_FILES["file"]["tmp_name"], $img2);
  }
mysqli_query($connect,"UPDATE gallery SET gallery_image='$img2' WHERE id=$id");
header("location:admingallery.php");
?>         
