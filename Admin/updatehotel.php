<?php 
  include("connection.php");
  $id=$_POST['id'];
  $myimg=basename($_FILES["file"]["name"]);
  $img="images/".basename($_FILES["file"]["name"]);
  $roomtype=$_REQUEST['rtype'];
  $price=$_REQUEST['price'];
  $discribtion=$_POST['dis'];
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
  mysqli_query($connect,"UPDATE room SET Picture='$img2', Room_Type='$roomtype', Price='$price',Discribtion='$discribtion' WHERE ID=$id");
  header("location:admin.php");
?>