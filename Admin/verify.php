<?php
   session_start();
  include('connection.php');
  $User=$_POST['username'];
  $pass=$_POST['password'];
  $select=mysqli_query($connect,"SELECT * FROM user");
  $row=mysqli_fetch_array($select);
  $US=$row['Username'];
  $PS=$row['Password'];
  if($User==$US && $pass==$PS)
  {
  	$_SESSION['username']=true;
  	$_SESSION['password']=true;
  	 header('location:admin.php');
  }
  else 
  {
  	
  	if($User!=$US && $pass==$PS)
  	{
  		echo '<script>alert("Incorrect Username");window.location="index.php";</script>';
  	}
  	if($User==$US && $pass!=$PS)
  	{
  		echo '<script>alert("Incorrect Password");window.location="index.php";</script>';
  	}
  	if($User!=$US && $pass!=$PS)
  	{
  		echo '<script>alert("Please Input Password and Username");window.location="index.php";</script>';
  	}
  }
?>