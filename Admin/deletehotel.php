<?php
  include("connection.php");
  $id=$_REQUEST["id"];
  mysqli_query($connect,"DELETE FROM room WHERE  ID=$id;");
  header("location:preview.php");
?>