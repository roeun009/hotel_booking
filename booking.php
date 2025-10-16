<!DOCTYPE html>
<html>
<head>
	<title>Hotel</title>
	<script src="ajax.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="jquery-ui-themes-1.12.1/themes/base/jquery-ui.css">
</head>
<body>

<div class="myheader">
 	<div class="container">
 		<div class="title_header">
       <a href="#">
         <i class="glyphicon glyphicon-earphone"></i> 096-5314142
       </a>
       <a href="#"><i class="glyphicon glyphicon-envelope"></i> PONNAVANDA@GMAIL.COM</a> 
    </div>
 		<!-- <div class="mylogin"><a href="#">LOGIN</a><a href="#">REGISTER</a></div> --> 
 	</div>
</div>

<div class="nav-container">
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <div class="logos">
           <img src="img/vandalogo.png">
        </div>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" id="menus">
          <li><a href="index.php">Home</a></li>
          <li><a href="room.php">Rooms</a></li>
          <li><a href="booking.php">Booking</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<div class="roomlogo">
  <img src="img/bookinglogo.jpg" class="img-responsive myimg">
</div><br>
<div class="container">
  <div class="row">
    <div class="col-md-8">
       <h2 class="lined-heading"><span>Choose Date</span></h2>
       <form>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </div>
                  <input type="text" class="form-control" id="datepicker" name="ch_in" placeholder="Check-in">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </div>
                  <input type="text" class="form-control" id="datepicker1" name="ch_out" placeholder="Check-out">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <select id="time" name="room" class="form-control">
                    <option>RoomType</option>
                    <option>Single Room</option>
                    <option>Double Room</option>
                    <option>Duplex Room</option>
                    <option>Exceutive Suite</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <select id="time" name="adult" class="form-control">
                    <option>Adult</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>5+</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <select id="time" name="children" class="form-control">
                    <option>Children</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>5+</option>
                </select>
              </div>
            </div>
            
        </div>
      </form><br>
      <h2 class="lined-heading"><span>Choose Room</span></h2>
      <div class="row">
          <?php 
            include("Admin/connection.php"); 
            $query = mysqli_query($connect,"SELECT * FROM room Where Status=1 ORDER BY ID DESC LIMIT 2");
            while($row = mysqli_fetch_row($query))
            {
              echo "<div class=\"col-md-6\">
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
      </div><!-- row --><br><br>
      <h2 class="lined-heading"><span>Your Infomation</span></h2>
      <form>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input id="email" name="name" type="text" class="form-control input-md" placeholder="Name*">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                   <input id="email" name="email" type="text" class="form-control input-md" placeholder="Email*">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                   <input id="email" name="phone" type="text" class="form-control input-md" placeholder="Phone*">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                   <input id="email" name="city" type="text" class="form-control input-md" placeholder="City*">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                   <input id="email" name="add" type="text" class="form-control input-md" placeholder="Address">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="ms" class="form-control input-md" placeholder="Special Required" style="height: 120px"></textarea>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
               <button type="submit" class="btn btn-info">Send <span class="glyphicon glyphicon-send"></span></button>
              </div>
            </div>
        </div>
      </form>
    </div>
     <div class="col-md-4">
       <h2 class="lined-heading"><span>Our Address</span></h2>
       <div class="thumbnail">            
         <iframe width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=10+Rue+de+Rome&sll=11.537059, 104.886524&ie=UTF8&hq=&hnear=10+RUE+DE+ROME,+75008,+FRANCE&t=m&z=17&ll=11.537059, 104.886524&output=embed"></iframe>
       </div>
         <label>Starhotel</label>
         <p class="para1">
           # 89, St. 218, Sankat Teuk Laark3<br>
           Khan Toul Kork, Phnom Penh Cambodia<br>
           Tel: 096 53 14 142<br>
           E-mail: ponnavanda@gmail.com 
         </p>
     </div>
  </div>
</div><!-- container --><br><br><br><br>
<div class="footer">
  <div class="container">
    <div class="row">
     <div class="movefooter">
      <div class="col-md-2" style="padding: 0px;">
          <p class="para2">HOTEL SITE</p>
          <ul>
           <li><a href="#">Home</a></li>
            <li><a href="#">Rooms</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">Contact US</a></li>
          </ul>
      </div>
      <div class="col-md-3">
         <p class="para2">ABOUT STARHOTEL</p>
         <p class="paraft">Suspendisse sed sollicitudin nisl, at dignissim libero. Sed porta tincidunt ipsum, vel volutpat.</p>
         <p class="paraft">Nunc ut fringilla urna. Cras vel adipiscing ipsum. Integer dignissim nisl eu lacus interdum facilisis. Aliquam erat volutpat. Nulla semper vitae felis vitae dapibus.</p>
      </div>
      <div class="col-md-2">
         <p class="para2">ACCOMMOTATIONS</p>
          <ul>
            <li><a href="#">Superior Double/Twin Room</a></li>
            <li><a href="#">Deluxe Double/Twin Room</a></li>
            <li><a href="#">Deluxe Balcony Room</a></li>
            <li><a href="#">Executive Suite</a></li>
          </ul>
      </div>
      <div class="col-md-2">
          <p class="para2">CONNECT US</p>
          <ul>
              <li>
                <a href="#"><img src="IMG/facebook.png" width="32" height="32">&nbsp; Join us on Facebook</a>
              </li>
              <li>
                <a href="#"><img src="IMG/twiiter.png" width="32" height="32">&nbsp; Join us on Facebook</a>
              </li>
              <li>
                <a href="#"><img src="IMG/skype.png" width="32" height="32">&nbsp; Join us on Facebook</a>
              </li>
              <li>
                <a href="#"><img src="IMG/linkedin.png" width="32" height="32">&nbsp; Join us on Facebook</a>
              </li>      
          </ul>
      </div>
      <div class="col-md-3">
         <p class="para2">ADDRESS</p>
         <label style="color: #c1c1c1">Starhotel</label>
         <p class="paraft">
           # 89, St. 218, Sankat Teuk Laark3<br>
           Khan Toul Kork, Phnom Penh Cambodia<br>
           Tel: 096 53 14 142<br>
           E-mail: ponnavanda@gmail.com 
         </p> 
      </div>
    </div>
    </div><br>
  </div>
</div>
<div class="footer1">
  <div class="container">
    <div class="row">
       <div class="copyrigth">
         <p class="paraft">&copy; 2017 Starhotel All Rights Reserved</p>
        </div>
    </div>
  </div>
</div>
<div  onclick="topFunction()" id="myBtn" title="Scroll to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 1; cursor: pointer;">
    <img src="img/scroltop.png">
</div>
</body>
<script src="js/jssor.slider-23.1.6.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1500);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <script type="text/javascript">jssor_1_slider_init();</script>
<script>
 $(function () {
  var nav = $('.nav-container');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 40) {
      nav.addClass("fixed-nav");
    } else {
      nav.removeClass("fixed-nav");
    }
  });

});
</script>
<script>
  $( function() {
    $( "#datepicker").datepicker();
    $( "#datepicker").change(function(){
    $( "#datepicker").datepicker("option","dateFormat",'yy-mm-dd');   
    });
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker1").datepicker();
    $( "#datepicker1").change(function(){
       $( "#datepicker1").datepicker("option","dateFormat",'yy-mm-dd');   
    });
  } );
  </script>
  <script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</html>


