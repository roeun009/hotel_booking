<?php $title="Home"; include("header.php") ?>
<?php include("slider.php") ?>
<div class="container">
  <div class="books">
     <form action="Admin/save_booking.php" method="post">
      <div class="row">
          <div class="col-md-3">
              <div class="form-group">
                <label>Email</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-envelope"></i>
                  </div>
                  <input type="text" class="form-control" name="email" placeholder="Please Enter Email">
                </div>
              </div>
          </div>
          
          <div class="col-md-2">
            <div class="form-group">
              <label class="control-label" for="time">Room Type</label>
              <select id="time" name="rtype" class="form-control">
                <option>Select Room</option>
                <option>Sigle Rome</option>
                <option>Duble Room</option>
                <option>Duplex Room</option>
                <option>Execute Suite</option>
              </select>
            </div>
          </div>

          <div class="col-md-2">
              <div class="form-group">
                <label>Check-in</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </div>
                  <input type="text" class="form-control" id="datepicker" name="ch_in" placeholder="Check-in">
                </div>
              </div>
          </div>

          <div class="col-md-2">
              <div class="form-group">
                <label>Check-out</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </div>
                  <input type="text" class="form-control" id="datepicker1" name="ch_out" placeholder="Check-out">
                </div>
              </div>
          </div>

          <div class="col-md-1">
              <div class="form-group">
                <label class="control-label" for="email">Guest</label>
                <input id="email" name="guest" type="text" placeholder="Guest" class="form-control input-md">
              </div>
          </div>

          <div class="col-md-2" style="margin-top: 25px;">
            <div class="form-group">
              <input type="submit" class="btn btn-info form-control input-md" value="Book Now">
            </div>
          </div>
          
      </div>
  </form>
  </div>
</div><br><br>

<div class="container">
  <h2 class="lined-heading"><span>Guests Favorite Rooms</span></h2>
  <div class="row">
      <?php 
      include("Admin/connection.php"); 
      $query = mysqli_query($connect,"SELECT * FROM room Where Status=1 ORDER BY ID DESC LIMIT 6");
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

      

  </div><!-- row --><br><br><br>
  <h2 class="lined-heading"><span>USP section</span></h2>
  <div class="row">
     <div class="col-md-3">
       <center><img src="img/glass.png" width="60px" height="60px" class="usp"></center>
       <h3 class="titles">Beverages included</h3>
       <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.</p>
       <div class="readmore">
         <center><a href="#">Read more></a></center>
       </div>
     </div>
     <div class="col-md-3">
       <center><img src="img/card.png" width="60px" height="60px" class="usp"></center>
       <h3 class="titles">Stay First, Pay After!</h3>
       <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.</p>
       <div class="readmore">
         <center><a href="#">Read more></a></center>
       </div>
     </div>
     <div class="col-md-3">
       <center><img src="img/fork.png" width="60px" height="60px" class="usp"></center> 
       <h3 class="titles">24 Hour Restaurant</h3>
       <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.</p>
       <div class="readmore">
         <center><a href="#">Read more></a></center>
       </div>
     </div>
     <div class="col-md-3">
       <center><img src="img/water.png" width="60px" height="60px" class="usp"></center>
       <h3 class="titles">Spa Included!</h3>
       <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum.</p>
       <div class="readmore">
         <center><a href="#">Read more></a></center>
       </div>
     </div>
  </div><br><br>

  <h2 class="lined-heading"><span>Gallery</span></h2>
  <div class="row">
    <?php 
      include("Admin/connection.php"); 
      $query = mysqli_query($connect,"SELECT * FROM gallery Where status=1 ORDER BY ID DESC LIMIT 4");
      while($row = mysqli_fetch_row($query))
      {
         echo "<div class=\"col-md-3 ghover\">
          <a href=\"Admin/$row[1]\" class=\"fancybox\" rel=\"group\">
              <img src=\"Admin/$row[1]\" class=\"img-responsive\">
          </a>
         </div>";
      }
    ?>
    
  </div><br><br>


  <div class="row">
    <div class="col-md-6">
      <h2 class="lined-heading"><span>VIP Service</span></h2>

      <div class="row">
        <div class="col-md-6"  style="padding: 0px;">
          <img src="img/chief.jpg" class="img-responsive">
        </div>
        <div class="col-md-6">
          <p class="viptt">Luxury Restaurant</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
      </div><br>

      <div class="row">
        <div class="col-md-6"  style="padding: 0px;">
          <img src="img/car.jpg" class="img-responsive">
        </div>
        <div class="col-md-6">
          <p class="viptt">Hotel Car Service</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
      </div>

    </div>
    <div class="col-md-6">
      <h2 class="lined-heading"><span>Hotel Tabs</span></h2>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Our Hotel</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Events</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Kids</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
          <div class="contenttab">
            <p class="para1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. In hendrerit risus arcu, in eleifend metus dapibus varius. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo. Phasellus et mattis lectus, et gravida urna.</p>
            <div class="col-md-8" style="padding: 0px;">
              <p class="para1">Donec pretium sem non tincidunt iaculis. Nunc at pharetra eros, a varius leo. Mauris id hendrerit justo. Mauris egestas magna vitae nisi ultricies semper. Nam vitae suscipit magna. Nam et felis nulla. Ut nec magna tortor. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo.</p>
            </div>
            <div class="col-md-4">
              <img src="img/restaurant-01.jpg">
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
          <div class="contenttab">
            <p class="para1">Phasellus sodales justo felis, a vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</p>
            <div class="col-md-6" style="padding: 0px;">
               <img src="img/event1.jpg" class="img-responsive">
            </div>
            <div class="col-md-6">
              <img src="img/event2.jpg" class="img-responsive">
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="messages">
          <div class="contenttab">
            <p class="para1">Aa vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div><!-- container --><br><br><br><br>
<?php include("footer.php") ?>
