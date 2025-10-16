<?php
  include("connection.php");
  $id=$_REQUEST["id"];
  mysqli_query($connect,"UPDATE slider SET status='0' WHERE  id=$id;");
  header("location:testindex.php");
?>