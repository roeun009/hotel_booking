<?php $title="Booking"; include("header.php") ?>
<div class="roomlogo">
  <img src="img/bookinglogo.jpg" class="img-responsive myimg">
</div><br>
<div class="container">
  <div class="row"> 
    <center>
       <div class="col-md-3">
          <div class="process-step">
            <button type="button" class="btn btn-info btn-circle" data-toggle="tab" href="#menu1"><span class="bp">1</span></button>
            <p><h5>BOOKING INFO</h5></p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="process-step">
           <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu2"><span class="bp">2</span></button>
           <p><h5>PERSONAL INFO</h5></p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="process-step">
           <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu3"><span class="bp">3</span></button>
           <p><h5>PAYMENT INFO</h5></p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="process-step">
           <button type="button" class="btn btn-default btn-circle" data-toggle="tab" href="#menu5"><span class="bp">4</span></button>
           <p><h5>BOOKING DONE</h5></p>
          </div>
        </div>
    </center>
    <div class="col-md-12">
       <hr>
      </div>
    <div class="tab-content">
     <div id="menu1" class="tab-pane fade active in">
       <div class="col-md-4">
            <img src="img/s6.jpg" class="img-responsive"> 
       </div>
      <div class="col-md-8" style="">
        <p><h6>Duplex Room&nbsp;&nbsp;($180/a night)</h6></p><br>
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
      
      <div class="col-md-12">
        <div class="books1">
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
                      <option>Executive Room</option>
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
      </div>
      <div class="col-md-12">
        <hr>
      </div>
      <div class="col-md-7">
        <p class="para3">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, distinctio doloribus excepturi fugit minus quisquam totam? Adipisci beatae debitis harum, laudantium optio sed. Distinctio ducimus itaque iusto, mollitia pariatur voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, distinctio doloribus excepturi fugit minus quisquam totam? Adipisci beatae debitis harum, laudantium optio sed. Distinctio ducimus itaque iusto, mollitia pariatur voluptatum.
        </p>
      </div>
      <div class="col-md-5">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>1 Room</th>
              <th>180$ Rate</th>
              <th>5 Night</th>
              <th>$ 400</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>TAX</strong></td>
              <td colspan="3"><strong>$40</strong></td>
            </tr>
            <tr>
              <td><strong>TOTAL</strong></td>
              <td colspan="3"><strong>$440</strong></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-12"><hr></div>

      <ul class="list-unstyled list-inline pull-right">
       <li><a href="" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></a></li>
      </ul>
     </div>
     <div id="menu2" class="tab-pane fade">
      <div class="col-md-12">
        <form>
        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <input id="email" name="fname" type="text" class="form-control input-md" placeholder="First Name*">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input id="email" name="lname" type="text" class="form-control input-md" placeholder="Last Name*">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                   <input id="email" name="email" type="text" class="form-control input-md" placeholder="Email*">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                   <input id="email" name="phone" type="text" class="form-control input-md" placeholder="Phone*">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                   <input id="email" name="city" type="text" class="form-control input-md" placeholder="City*">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                   <input id="email" name="add" type="text" class="form-control input-md" placeholder="Address">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="ms" class="form-control input-md" placeholder="Special Required" style="height: 150px"></textarea>
              </div>
            </div>
        </div>
      </form>
      </div>
      <div class="col-md-12">
        <hr>
      </div>
        <ul class="list-unstyled list-inline pull-right">
          <li><a href="" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</a></li>
          <li><a href="" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></a></li>
        </ul>
     </div>
     <div id="menu3" class="tab-pane fade">
       <div class="col-md-12">
         <p class="para3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, distinctio doloribus excepturi fugit minus quisquam totam? Adipisci beatae debitis harum, laudantium optio sed. Distinctio ducimus itaque iusto, mollitia pariatur voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, distinctio doloribus excepturi fugit minus quisquam totam? Adipisci beatae debitis harum, laudantium optio sed. Distinctio ducimus itaque iusto, mollitia pariatur voluptatum.
         </p>
       </div>
       <div class="col-md-12">
          <hr>
       </div>
       <div class="col-md-12">
          <form>
            <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <input id="email" name="fname" type="text" class="form-control input-md" placeholder="CARD HOLDER NAME">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input id="email" name="lname" type="text" class="form-control input-md" placeholder="ENTER CREDIT CARD NUMBER">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <select id="time" name="month" class="form-control">
                      <option>ENTER MONTH</option>
                      <option>ENTER MONTH</option>
                      <option>ENTER MONTH</option>
                      <option>ENTER MONTH</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <select id="time" name="year" class="form-control">
                      <option>ENTER YEAR</option>
                      <option>ENTER YEAR</option>
                      <option>ENTER YEAR</option>
                      <option>ENTER YEAR</option>
                    </select>
                  </div>
                </div>
            </div>
          </form>
       </div>
       <div class="col-md-10">
         <div class="payment">
           <ul>
           <li><img src="img/pay1.png"></li>
           <li><img src="img/pay2.png"></li>
           <li><img src="img/pay3.png"></li>
           <li><img src="img/pay4.png"></li>
           <li><img src="img/pay5.png"></li>
         </ul>
         </div>
       </div>
       <div class="col-md-2">
         <div class="payment">
           <ul class="list-unstyled list-inline pull-right">
          <li>
            <a href="" class="btn btn-success btn-lg next-step">PAY NOW</a>
          </li>
        </ul>
         </div>
       </div>
       <div class="col-md-12">
         <hr>
       </div>
       <ul class="list-unstyled list-inline pull-right">
          <li><a href="" class="btn btn-default prev-step"><i class="fa fa-chevron-left"></i> Back</a></li>
          <li><a href="" class="btn btn-info next-step">Next <i class="fa fa-chevron-right"></i></a></li>
        </ul>
     </div>
     <div id="menu5" class="tab-pane fade">
       <div class="col-md-7">
        <p class="para3">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, distinctio doloribus excepturi fugit minus quisquam totam? Adipisci beatae debitis harum, laudantium optio sed. Distinctio ducimus itaque iusto, mollitia pariatur voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, distinctio doloribus excepturi fugit minus quisquam totam? Adipisci beatae debitis harum, laudantium optio sed. Distinctio ducimus itaque iusto, mollitia pariatur voluptatum.
        </p>
        <div style="width: 100%;padding: 30px;background-color:#81C251"><i class="glyphicon glyphicon-ok" style="color: #fff"></i>&nbsp;
          <span class="success">Your reservation was succefully submited!!</span>
        </div>
      </div>
      <div class="col-md-5">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>1 Room</th>
              <th>180$ Rate</th>
              <th>5 Night</th>
              <th>$ 400</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>TAX</strong></td>
              <td colspan="3"><strong>$40</strong></td>
            </tr>
            <tr>
              <td><strong>TOTAL</strong></td>
              <td colspan="3">
                <strong>$440</strong>
                <strong style="color:#81C251">(PAID)</strong>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
     </div>
    </div>    
  </div><!-- row -->
</div><!-- container --><br><br>
<?php include("footer.php") ?>


