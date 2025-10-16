<div class="footer">
  <div class="container">
    <div class="row">
     <div class="movefooter">
      <div class="col-md-2" style="padding: 0px;">
          <p class="para2">HOTEL SITE</p>
          <ul>
           <li><a href="#">Home</a></li>
            <li><a href="#">Rooms</a></li>
            <li><a href="#">Room Detial</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
      </div>
      <div class="col-md-3">
         <p class="para2">ABOUT VANDAHOTEL</p>
         <p class="paraft">Suspendisse sed sollicitudin nisl, at dignissim libero. Sed porta tincidunt ipsum, vel volutpat.</p>
         <p class="paraft">Nunc ut fringilla urna. Cras vel adipiscing ipsum. Integer dignissim nisl eu lacus interdum facilisis. Aliquam erat volutpat. Nulla semper vitae felis vitae dapibus.</p>
      </div>
      <div class="col-md-2">
         <p class="para2">ACCOMMOTATIONS</p>
          <ul>
            <li><a href="#">Single /Twin Room</a></li>
            <li><a href="#">Deluxe Double/Twin Room</a></li>
            <li><a href="#">Deluxe Balcony Room</a></li>
            <li><a href="#">Executive Suite</a></li>
          </ul>
      </div>
      <div class="col-md-2">
          <p class="para2">CONNECT US</p>
          <ul>
              <li>
                <a href="#"><img src="img/facebook.png" width="32" height="32">&nbsp; Join us on Facebook</a>
              </li>
              <li>
                <a href="#"><img src="img/twiiter.png" width="32" height="32">&nbsp; Join us on Facebook</a>
              </li>
              <li>
                <a href="#"><img src="img/skype.png" width="32" height="32">&nbsp; Join us on Facebook</a>
              </li>
              <li>
                <a href="#"><img src="img/linkedin.png" width="32" height="32">&nbsp; Join us on Facebook</a>
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
           E-mail: <a href="#">ponnavanda@gmail.com</a> 
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
         <p class="paraft">&copy; 2017 Vandahotel All Rights Reserved</p>
        </div>
    </div>
  </div>
</div>
<div  onclick="topFunction()" id="myBtn" title="Scroll to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 1; cursor: pointer;margin: 0 auto">
    <img src="img/scroltop.png" class="img-responsive">
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
  <script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox();
    $(".fancybox").fancybox({
    fitToView: false,
    beforeShow: function () {
        this.width = 700;
        this.height = 500;
    }
});
  });
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
<script>
  $(function(){
 $('.btn-circle').on('click',function(){
   $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
   $(this).addClass('btn-info').removeClass('btn-default').blur();
 });
 
});
</script>
</html>