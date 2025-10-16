<?php $title="Room Detial"; include("header.php") ?>
<div class="roomlogo">
  <img src="img/roomdetial.jpg" class="img-responsive myimg">
</div><br><br>
<div class="container">
  <div class="row">
      <div class="col-md-8">
        <?php
       include("Admin/connection.php");
       $id=$_REQUEST['id'];
       $query = mysqli_query($connect,"SELECT * FROM room WHERE Status=1 AND ID='$id'"); 
       while($row=mysqli_fetch_row($query)){
          echo "<img src=\"Admin/$row[1]\" class=\"img-responsive img-rounded\"><br><br>
        <h2 class=\"lined-heading\"><span>Room Detial</span></h2>
        <p class=\"para1\">
           $row[4]
        </p>";
         }
         ?>
        <div class="col-md-3" style="padding: 0px;">
            <img src="img/cf.png">
            <p>Breakfast</p>
            <img src="img/ar.png">
            <p>Air Conditioning</p>
        </div>
        <div class="col-md-3">
            <img src="img/c.png">
            <p>Free Parking</p>
            <img src="img/key.png">
            <p>Room Security</p>
        </div>
        <div class="col-md-3">
            <img src="img/u.png">
            <p>Room Service</p>
            <img src="img/b.png">
            <p>GYM fecility</p>
        </div>
        <div class="col-md-3">
            <img src="img/t.png">
            <p>TV LCD</p>
            <img src="img/wf.png">
            <p>Wi-Fi Service</p>
        </div>
      </div>
     <div class="col-md-4">
       <div class="book1">
         <h2 class="lined-heading"><span>Reservation</span></h2>
         <?php
       include("Admin/connection.php");
       $id=$_REQUEST['id'];
       $query = mysqli_query($connect,"SELECT * FROM room WHERE Status=1 AND ID='$id'"); 
       while($row=mysqli_fetch_row($query)){
        ?>
          <span class="viptt"><?php echo $row[2]?></span>&nbsp;&nbsp;
         <span class="prices">$ <?php echo $row[3]?>/ night</span><br><br> 
         
          <form action="Admin/save_booking.php" method="post">
            <div class="row">
          
                <div class="col-md-12">
                  <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon">
                    <i class="glyphicon glyphicon-envelope"></i>
                   </div>
                   <input type="text" class="form-control" name="email" placeholder="Please Enter Email">
                  </div>
                  </div>
                </div>

                <input type="hidden" class="form-control" name="rtype" value="<?php echo $row[2] ?>">
                 
                <div class="col-md-12">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </div>
                  <input type="text" class="form-control" id="datepicker" name="ch_in" placeholder="Check-in">
                </div>
              </div>
              </div> 

              <div class="col-md-12">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </div>
                  <input type="text" class="form-control" id="datepicker1" name="ch_out" placeholder="Check-out">
                </div>
              </div>
              </div>

              <div class="col-md-12">
              <div class="form-group">
                <div class="input-group">
                   <div class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                   </div>
                   <input id="email" name="guest" type="text" placeholder="Guest" class="form-control input-md">
                </div>
              </div>
              </div>

              <div class="col-md-12">
            <div class="form-group">
              <input type="submit" class="btn btn-info form-control input-md" value="Book Now">
            </div>
          </div>

            </div><!-- row -->
          </form>
        <?php
          }
         ?>
       </div><br><br>
       <h2 class="lined-heading"><span>Overview</span></h2>
       <!-- Nav tabs -->
       <ul class="nav nav-tabs" role="tablist">
         <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Overview</a></li>
         <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Facilities</a></li>
         <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Extra</a></li>
        </ul>
        <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
          <div class="contenttab">
            <p class="para1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. In hendrerit risus arcu, in eleifend metus dapibus varius. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo. Phasellus et mattis lectus, et gravida urna.</p>
            <div class="col-md-6" style="padding: 0px">
              <img src="img/ov1.jpg">
            </div>
            <div class="col-md-6">
              <img src="img/ov2.jpg">
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
          <div class="contenttab">
            <p class="para1">Phasellus sodales justo felis, a vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</p>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="messages">
          <div class="contenttab">
            <p class="para1">Aa vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</p>
          </div>
        </div>
      </div><!-- content tab -->
     </div><!-- col-md-4 -->
  </div>

  <h2 class="lined-heading"><span>Other Room</span></h2>
  <div class="row">
      <?php 
         include("Admin/connection.php"); 
         $query = mysqli_query($connect,"SELECT * FROM room Where Status=1 ORDER BY ID DESC LIMIT 3");
         while($row = mysqli_fetch_row($query))
         {
            echo "<div class=\"col-md-4\" style=\"margin-buttom:30px !important;\">
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
  </div><!-- row -->
</div><!-- container --><br>
<?php include("footer.php") ?>