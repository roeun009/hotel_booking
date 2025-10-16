<?php
  include("connection.php");
  $id=$_REQUEST["id"];
  mysqli_query($connect,"UPDATE room SET Status='1' WHERE  ID=$id;");
  header("location:admin.php");
?>