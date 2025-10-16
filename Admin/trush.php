<?php
  include("connection.php");
  $id=$_REQUEST["idss"];
  mysqli_query($connect,"UPDATE room SET Status='0' WHERE  ID=$id;");
  header("location:admin.php");
?>