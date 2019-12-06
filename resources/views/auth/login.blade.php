<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/city-profile.jpg')">

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form  method="POST" action="{{ route('login') }}">
                      @csrf
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>LOGIN</b><br>
                        	   
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							<ul>
	                <li><a href="#about" data-toggle="tab">Account</a></li>
	            </ul>
						</div>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                <br>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <form id="form" name="form" method="post" action="">
                                        <label>Email <small>(required)</small></label>
                                        <input name="email" id="email" type="text" class="form-control" placeholder="Email...">
                                      </div>
                                      @if ($errors->has('email'))
                                        <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                          <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                      @endif
                                      <div class="form-group">
                                        <label>Password <small>(required)</small></label>
                                        <input name="password" id="password" type="password" class="form-control" placeholder="Password...">
                                      </div>
                                      @if ($errors->has('password'))
                                      <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                        <strong>{{ $password->first('password') }}</strong>
                                      </div>
                                    @endif
                                 
                                  </div>
                               
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="creat_account form-group">
                                          <input type="checkbox" id="f-option2" name="selector">
                                              <label for="f-option2">Remember Me</label>
                                      </div>
                                  </div>
                                  <div class="col-md-12 form-group col-sm-10 col-sm-offset-1">
                                      <a href="#">Forgot Password?</a>
                                  </div>
                                </div>
                            </div>
                            
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='login' value='Login' />
                            </div>
                            <!-- <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='login' value='Login' /> -->
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
</div>
</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</html>
