<?php
  include("connection.php");
  $id=$_REQUEST["id"];
  mysqli_query($connect,"DELETE FROM slider WHERE  id=$id;");
  header("location:preview_slider.php");
?>