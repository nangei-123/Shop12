@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
<link rel="stylesheet" type="text/css" href="{{URL::to('css/member_reg.css')}}">
  <div class="content">
    <div class="container-fluid">
<div class="col-sm-12 col-lg-12 col-sm-12">
  <div class="row">  
    <div class="col-sm-8 col-lg-8 col-md-8">
        <div class="row">
          <div class="col-md-12">
            <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
              @csrf
              @method('put')

              <div class="card ">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                  <p class="card-category">{{ __('User information') }}</p>
                </div>
                <div class="card-body ">
                  @if (session('status'))
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                          </button>
                          <span>{{ session('status') }}</span>
                        </div>
                      </div>
                    </div>
                  @endif
                   <!-- Account Number -->
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Account No.') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('account_no') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="account_no" id="input-name" type="text" placeholder="{{ __('Account No.') }}" value="000230123" required="true" aria-required="true"/>
                        @if ($errors->has('account_no'))
                          <span id="account_no-error" class="error text-danger" for="input-name">{{ $errors->first('account_no') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- End Account Number -->
                  <!-- Member Name -->
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                        @if ($errors->has('name'))
                          <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- End Member Name -->
                  <!-- Email -->
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                        @if ($errors->has('email'))
                          <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- End Email -->
                  <!-- Phone Number -->
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Phone No.') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('phone_no') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" id="input-email" type="text" placeholder="{{ __('Email') }}" value="{{ old('phone', auth()->user()->phone) }}" required />
                        @if ($errors->has('phone'))
                          <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('phone') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- End Phone Number -->
                   <!-- NRC Number -->
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('N.R.C No.') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('nrc_number') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('nrc_number') ? ' is-invalid' : '' }}" name="nrc_number" id="input-email" type="text" placeholder="{{ __('N.R.C No.') }}" value="12/UKM(N)221122" required />
                        @if ($errors->has('phone'))
                          <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('phone') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- End NRC Number -->
                   <!-- NRC Address -->
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Address') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="input-address" type="text" placeholder="{{ __('N.R.C No.') }}" value="No.68 ThitSarPann Street" required />
                        @if ($errors->has('phone'))
                          <span id="address-error" class="error text-danger" for="input-address">{{ $errors->first('address') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- End Address -->
                   <!--  City -->
                  <div class="row">
                    <label class="col-sm-2 col-form-label mt-2">{{ __('City') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                       <select name="city" class="form-control">
                         <option>Select City</option>
                         <option>Yangon</option>
                         <option>Mandalay</option>
                         <option>NayPyiTaw</option>
                       </select>
                        @if ($errors->has('phone'))
                          <span id="address-error" class="error text-danger" for="input-address">{{ $errors->first('city') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- End City -->
                      <!--  Township -->
                  <div class="row">
                    <label class="col-sm-2 col-form-label mt-2">{{ __('Township') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                       <select name="township" class="form-control">
                         <option>Select Township</option>
                         <option>Kamayut</option>
                         <option>Tamwe</option>
                         <option>Heldan</option>
                       </select>
                        @if ($errors->has('township'))
                          <span id="address-error" class="error text-danger" for="input-address">{{ $errors->first('township') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- End Township -->
                    <!--  Register Date -->
                  <div class="row">
                    <label class="col-sm-2 col-form-label mt-2">{{ __('Register Date') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('register_date') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="input-address" type="date" placeholder="{{ __('Register Date') }}" required />
                        @if ($errors->has('register_date'))
                          <span id="address-error" class="error text-danger" for="input-address">{{ $errors->first('register_date') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- End Register Date -->
                  <!--  Register Date -->
                  <div class="row">
                    <label class="col-sm-2 col-form-label mt-2">{{ __('Expire Date') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('expire_date') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('expire_date') ? ' is-invalid' : '' }}" name="expire_date" id="input-address" type="date" placeholder="{{ __('Expire Date') }}" required />
                        @if ($errors->has('expire_date'))
                          <span id="address-error" class="error text-danger" for="input-expire_date">{{ $errors->first('expire_date') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <!-- End Register Date -->
                </div>
                <div class="card-footer ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
              @csrf
              @method('put')

              <div class="card ">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('Change password') }}</h4>
                  <p class="card-category">{{ __('Password') }}</p>
                </div>
                <div class="card-body ">
                  @if (session('status_password'))
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="material-icons">close</i>
                          </button>
                          <span>{{ session('status_password') }}</span>
                        </div>
                      </div>
                    </div>
                  @endif
                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                        @if ($errors->has('old_password'))
                          <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                        @if ($errors->has('password'))
                          <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>

    <div class="col-sm-4 col-lg-4 col-md-4">
          <!-- N.R.C Front Image -->
      <div class="row">
        <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('N.R.C Front Photo') }}</h4>
               
              </div>
              <div class="card-body ">
             <div id="image-preview">
                <input type="file" name="nrc_front" id="profile-img" />
                <img src="{{URL::to('/material/img/nrc.jpg')}}" class="mt-2" id="profile-img-tag" style="max-height: 200px !important;" width="100%;">
              </div>
            @if ($errors->has('nrc_front'))
                        <span id="nrc_front-error" class="error text-danger" for="input-nrc_front">{{ $errors->first('nrc_front') }}</span>
                      @endif
                  </div>
                 </div>
            </div>
            <!-- End N.R.C Front Image -->
             <!-- N.R.C Front Image -->
      <div class="row">
      <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('N.R.C Back Photo') }}</h4>
               
              </div>
              <div class="card-body ">
             <div id="image-preview1">
                <input type="file" name="nrc_back" id="profile-img1" />
                <img src="{{URL::to('/material/img/nrc.jpg')}}" class="mt-2" id="profile-img-tag1" style="max-height: 200px !important;" width="100%;">
              </div>
            @if ($errors->has('nrc_back'))
                        <span id="nrc_back-error" class="error text-danger" for="input-nrc_back">{{ $errors->first('nrc_back') }}</span>
                      @endif
                  </div>
                 </div>
            </div>
            <!-- End N.R.C Front Image -->
              <!-- Census Image  -->
      <div class="row">
      <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Census Photo') }}</h4>
               
              </div>
              <div class="card-body ">
             <div id="image-preview-census">
                <input type="file" name="census" id="profile-img-census" />
                <img src="{{URL::to('/material/img/approve.jpg')}}" class="mt-2" id="profile-img-tag-census" style="max-height: 200px !important;" width="100%;">
              </div>
            @if ($errors->has('census'))
                        <span id="nrc_back-error" class="error text-danger" for="input-census">{{ $errors->first('census') }}</span>
                      @endif
                  </div>
                 </div>
            </div>
            <!-- End census Image -->
                 <!-- Census Image  -->
      <div class="row">
      <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Territorial Photo') }}</h4>
               
              </div>
              <div class="card-body ">
             <div id="image-preview-territorial">
                <input type="file" name="census" id="profile-img-territorial" />
                <img src="{{URL::to('/material/img/approve.jpg')}}" class="mt-2" id="profile-img-tag-territorial" style="max-height: 200px !important;" width="100%;">
              </div>
            @if ($errors->has('census'))
                        <span id="territorial-error" class="error text-danger" for="input-territorial">{{ $errors->first('census') }}</span>
                      @endif
                  </div>
                 </div>
            </div>
            <!-- End census Image -->
               </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
<script type="text/javascript">

            function readURLS(input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    

                    reader.onload = function (e) {

                        $('#profile-img-tag1').attr('src', e.target.result);

                    }

                    reader.readAsDataURL(input.files[0]);

                }

            }

            $("#profile-img1").change(function(){

                readURLS(this);

            });

        </script>
         <script type="text/javascript">

            function readURLA(input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    

                    reader.onload = function (e) {

                        $('#profile-img-tag').attr('src', e.target.result);

                    }

                    reader.readAsDataURL(input.files[0]);

                }

            }

            $("#profile-img").change(function(){

                readURLA(this);

            });

        </script>
         <script type="text/javascript">

            function readURLAB(input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    

                    reader.onload = function (e) {

                        $('#profile-img-tag-census').attr('src', e.target.result);

                    }

                    reader.readAsDataURL(input.files[0]);

                }

            }

            $("#profile-img-census").change(function(){

                readURLAB(this);

            });

        </script>
        <script type="text/javascript">

            function readURLC(input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    

                    reader.onload = function (e) {

                        $('#profile-img-tag-territorial').attr('src', e.target.result);

                    }

                    reader.readAsDataURL(input.files[0]);

                }

            }

            $("#profile-img-territorial").change(function(){

                readURLC(this);

            });

        </script>
       
@endsection