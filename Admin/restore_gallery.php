<?php
  include("connection.php");
  $id=$_REQUEST["id"];
  mysqli_query($connect,"UPDATE gallery SET status='1' WHERE  id=$id;");
  header("location:admingallery.php");
?>