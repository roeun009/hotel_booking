<?php $title="Room"; include("header.php") ?>
<div class="roomlogo">
  <img src="img/roomlogo.jpg" class="img-responsive myimg">
</div><br><br>
<div class="container">
  <div class="row">

      <?php 
      include("Admin/connection.php"); 
      $query = mysqli_query($connect,"SELECT * FROM room WHERE Status=1 ORDER BY id desc");
      while($row = mysqli_fetch_row($query))
      {
        echo "<div class=\"col-md-4\">
            <div class=\"myhover\">
              <div class=\"border\">
                <img src=\"Admin/$row[1]\" class=\"img-responsive\" width=\"356px\" height=\"228px\">
                <h5 style=\"float: left;\">$row[2]</h5>
                <div class=\"orgprice\">
                  <div class=\"price\">$ $row[3]</div><span>a night</span>
                </div>
              </div>
              <div class=\"content\">
                <a href=\"roomdetial.php?id=$row[0]\" class=\"btn btn-default btn-lg\">
                Detail Now</a>
              </div>
            </div>
          </div>";
    }
    ?>
  </div><!-- row --><br>

</div><!-- container -->
<?php include("footer.php") ?>