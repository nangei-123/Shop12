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
    <link href="{{URL::to('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{URL::to('assets/css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{URL::to('assets/css/demo.css')}}" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/city.jpg')">

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form method="POST" action="{{ route('register') }}" >
                      @csrf
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>REGISTER</b><br>
                        	   
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							<ul>
	                <li><a href="#about" data-toggle="tab">Account</a></li>
	                  <li><a href="#account" data-toggle="tab">User Type</a></li>
	                    <li><a href="#address" data-toggle="tab">Address</a></li>
	            </ul>
						</div>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                <br>
                                @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <form id="form" name="form" method="post" action="">
                                        <label>First Name <small>(required)</small></label>
                                        <input name="firstname" id="firstname" type="text" class="form-control" placeholder="First Name...">
                                      </div>
                                      @if ($errors->has('firstname'))
                                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                          <strong>{{ $errors->first('firstname') }}</strong>
                                        </div>
                                      @endif
                                      <div class="form-group">
                                        <label>Last Name <small>(required)</small></label>
                                        <input name="lastname" id="lastname" type="text" class="form-control" placeholder="Last Name...">
                                      </div>
                                        @if ($errors->has('lastname'))
                                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                          <strong>{{ $errors->first('lastname') }}</strong>
                                        </div>
                                      @endif
                                       <div class="form-group">
                                        <label>Password <small>(required)</small></label>
                                        <input name="password" id="password" type="password" class="form-control" placeholder="Password...">
                                      </div>
                                      <div class="form-group">
                                        <label>Confirm Password <small>(required)</small></label>
                                        <input name="password_confirmation" id="confirm_password" type="password" class="form-control" placeholder="Confirm Password...">
                                      </div>
                                       @if ($errors->has('password'))
                                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                          <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                      @endif
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Email <small>(required)</small></label>
                                          <input name="email" type="email" class="form-control" placeholder="Email...">
                                      </div>
                                         @if ($errors->has('email'))
                                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                          <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                      @endif
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Phone <small>(required)</small></label>
                                          <input name="phone" type="phone" class="form-control" placeholder="Phone Number...">
                                      </div>
                                       @if ($errors->has('phone'))
                                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                          <strong>{{ $errors->first('phone') }}</strong>
                                        </div>
                                      @endif
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="creat_account form-group">
                                          <input type="checkbox" id="f-option2" name="selector">
                                              <label for="f-option2">I agree with the Privacy Policy</label>
                                      </div>
                                  </div>
                                  <!--<div class="col-md-12 form-group col-sm-10 col-sm-offset-1">
                                      <a href="#">Forgot Password?</a>
                                  </div>-->
                                </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1 text-center">
                                        <div class="col-sm-6">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="type" value="1">
                                                <div class="icon">
                                                    <i class="fa fa-truck"></i>
                                                </div>
                                                <h6>Postman</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="type" value="0">
                                                <div class="icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <h6>Member</h6>
                                            </div>

                                        </div>

                                </div>
                            </div>
                       
                        </div>
                             <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Road Name</label>
                                            <input type="text" class="form-control" name="road" placeholder="Insein Road">
                                          </div>
                                          @if ($errors->has('road'))
                                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                          <strong>{{ $errors->first('road') }}</strong>
                                        </div>
                                      @endif
                                    </div>
                                    <div class="col-sm-3">
                                         <div class="form-group">
                                            <label>Street Number</label>
                                            <input type="text" class="form-control" name="street" placeholder="Station Street">
                                          </div>
                                          @if ($errors->has('street'))
                                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                          <strong>{{ $errors->first('street') }}</strong>
                                        </div>
                                      @endif
                                    </div>
                                              <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>City</label><br>
                                             <select name="city" class="form-control">
                                                <option value="Yangon"> Yangon </option>
                                                <option value="Mandalay"> Mandalay </option>
                                                <option value="Nay Pyi Taw"> Nay Pyi Taw </option>
                                            </select>
                                          </div>
                                          @if ($errors->has('city'))
                                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                          <strong>{{ $errors->first('city') }}</strong>
                                        </div>
                                      @endif
                                    </div>
                                    <div class="col-sm-5">
                                         <div class="form-group">
                                            <label>Township</label><br>
                                             <select name="township" class="form-control">
                                                <option value="Kamayut"> Kamayut </option>
                                                <option value="Tamwe"> Tamwe </option>
                                                <option value="Heldan"> Heldan </option>
                                            </select>
                                          
                                </div>
                                  @if ($errors->has('township'))
                                        <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                          <strong>{{ $errors->first('township') }}</strong>
                                        </div>
                                      @endif
                            </div>
                                </div>
                            </div>
                          <br>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='create_account' value='Create Account' />
                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
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
