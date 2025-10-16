<?php
  include("connection.php");
  $id=$_REQUEST["id"];
  mysqli_query($connect,"DELETE FROM gallery WHERE  id=$id;");
  header("location:preview_gallery.php");
?>