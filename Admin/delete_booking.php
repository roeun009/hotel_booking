<?php
  include("connection.php");
  $id=$_REQUEST["id"];
  mysqli_query($connect,"DELETE FROM booking WHERE  id=$id;");
  header("location:Veiw_Booking.php");
?>