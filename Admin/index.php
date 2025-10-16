<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
      <script src="ajax.js"></script>
</head>
<style>
  body{
   
      background-image: linear-gradient(#79a06d, #79a06d); 
    }

    #box{
    border: 1px solid rgb(200, 200, 200);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
    background: rgba(200, 200, 200, 0.1);
    border-radius: 4px;
    top:50px;
    }

   h2{
    text-align:center;
    color:#fff;
   }
</style>
<body>
    <div class="container-fluid">
                <div class="row-fluid" >
                   
                      
                     <div class="col-md-offset-4 col-md-4" id="box">
                      <h2>Login</h2>
                       
                            <hr>
                           

                                <form class="form-horizontal" action="verify.php" method="post" id="contact_form">
                                    <fieldset>
                                        <!-- Form Name -->


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input name="username" placeholder="Username" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>


                                  
                                        <!-- Text input-->
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                    <input name="password" placeholder="Password" class="form-control" type="Password">
                                                </div>
                                            </div>
                                        </div>


                                    
                                   
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-md btn-danger pull-right">Login </button>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                    </div> 
</div>
</body>
</html>
