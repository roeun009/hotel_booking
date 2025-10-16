<?php $title="Contact"; include("header.php") ?>
<div class="roomlogo">
  <img src="img/contactlogo.jpg" class="img-responsive myimg">
</div><br>
<div class="container">
  <h2 class="lined-heading"><span>Contact Us</span></h2>
  <div class="maps">
     <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=10+Rue+de+Rome&sll=11.537059, 104.886524&ie=UTF8&hq=&hnear=10+RUE+DE+ROME,+75008,+FRANCE&t=m&z=17&ll=11.537059, 104.886524&output=embed"></iframe>
  </div><br>
  <div class="row">
    <div class="col-md-8">
      <h2 class="lined-heading"><span>Send a message</span></h2>
      <p class="para1">Pellentesque facilisis justo sed enim facilisis luctus. Duis pretium nibh at lectus tempus, vel lacinia quam adipiscing. Nullam luctus congue mattis. Ut volutpat iaculis neque, sit amet fermentum nunc venenatis sed. In mauris sem, pulvinar sed arcu sit amet, fringilla condimentum nulla. Aenean at purus mi. Suspendisse potenti.</p>
      <form>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Your Name</label>
                <input id="email" name="name" type="text" class="form-control input-md">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Email</label>
                <input id="email" name="email" type="text" class="form-control input-md">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Subject</label>
                <input id="email" name="subject" type="text" class="form-control input-md">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Your Message</label>
                <textarea name="ms" class="form-control input-md" style="height: 120px"></textarea>
              </div>
            </div>
            <div class="col-md-2">
            <div class="form-group">
              <input type="submit" class="btn btn-info btn-md form-control input-md" value="Book Now">
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4">
      <h2 class="lined-heading"><span>Contact Info</span></h2>
      <div class="thumbnail">
        <img src="img/imgadd.jpg">
      </div>
      <label>Starhotel</label>
         <p class="para1">
           # 89, St. 218, Sankat Teuk Laark3<br>
           Khan Toul Kork, Phnom Penh Cambodia<br>
           Tel: 096 53 14 142<br>
           E-mail: <a href="#">ponnavanda@gmail.com</a> 
         </p>
    </div>
  </div>
</div><!-- container --><br><br><br><br>
<?php include("footer.php") ?>