@extends('layouts.app', ['activePage' => 'parcel-create', 'titlePage' => __('Parcel Management')])

@section('content')
<style type="text/css">
#image-preview {
  width: 100%;
  height: 275px;
  position: relative;
  overflow: hidden;
  background-color: #ffffff;
  color: #ecf0f1;
}
fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
#image-preview input {
  line-height: 200px;
  font-size: 200px;
  position: absolute;
   cursor: pointer;
  opacity: 0;
  z-index: 10;
}
#image-preview label {
  position: absolute;
  z-index: 5;
  opacity: 0.8;
  cursor: pointer;
  background-color: #bdc3c7;
  width: 200px;
  height: 50px;
  font-size: 20px;
  line-height: 50px;
  text-transform: uppercase;
  top: 0;
  left: 0;
  right: 0;
  cursor: pointer;
  bottom: 0;
  margin: auto;
  text-align: center;
}

#image-preview1 {
  width: 100%;
  height: 275px;
  position: relative;
  overflow: hidden;
  background-color: #ffffff;
  color: #ecf0f1;
}
#image-preview1 input {
  line-height: 200px;
  font-size: 200px;
  position: absolute;
   cursor: pointer;
  opacity: 0;
  z-index: 10;
}
#image-preview1 label {
  position: absolute;
  z-index: 5;
  opacity: 0.8;
  cursor: pointer;
  background-color: #bdc3c7;
  width: 200px;
  height: 50px;
  font-size: 20px;
  line-height: 50px;
  text-transform: uppercase;
  top: 0;
  left: 0;
  right: 0;
  cursor: pointer;
  bottom: 0;
  margin: auto;
  text-align: center;
}
</style>
<link rel="stylesheet" href="{{URL::to('css/bootstrap-select.css')}}" />

<script src="{{URL::to('js/bootstrap-select.min.js')}}"></script>
<link rel="stylesheet" href="{{URL::to('css/jquery-ui.css')}}">
  
  <script src="{{URL::to('js/jquery-1.12.4.js')}}"></script>
  <script src="{{URL::to('js/jquery-ui.js')}}"></script>

  <link href="{{URL::to('css/bootstrap4-toggle.min.css')}}" rel="stylesheet">
<script src="{{URL::to('/js/bootstrap4-toggle.min.js')}}"></script>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('user.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Parcel List') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Parcel Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <!-- Category -->
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                     <select class="form-control" name="by_type" required>
                      <option selected disabled>Select Category</option>
                              @foreach($result as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                                 @endforeach
                     </select>
                    </div>
                  </div>
                </div>
                <!-- End Category -->
                <!-- Address -->
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Address') }}</label>
                  <div class="col-sm-2">
                    <div class="form-group{{ $errors->has('townships') ? ' has-danger' : '' }}">
                     <select class="form-control" name="townships" required>
                      <option selected disabled>Select Townships</option>
                              @foreach($townships as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                                 @endforeach
                     </select>
                    </div>
                  </div>
                  <div class="col-sm-5 mt-1">
                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                    <input type="text" name="address" class="form-control" placeholder="{{ __('Address') }}" required="true" aria-required="true"/>
                     @if ($errors->has('address'))
                        <span id="address-error" class="error text-danger" for="input-address">{{ $errors->first('address') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <!-- End Address -->
                 <!-- date adn fee -->
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Fee & Date') }}</label>
                    <div class="col-sm-3">
                    <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                     <input type="text" name="by_date" class="form-control" placeholder="{{ __('Delivery Fee (MMK)') }}" />
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                     <input type="date" name="by_date" class="form-control">
                    </div>
                  </div>
                </div>
                <!-- End date -->
                <!-- Image Upload -->
               
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Fee & Date') }}</label>
                  <div class="col-sm-3">
                    <div id="image-preview">
                <label for="image-upload" id="image-label image-preview label" style="color: white;background-color: #e8423e;cursor: pointer;">Choose File</label>
                <input type="file" name="image_1" id="profile-img" />
                <img src="{{URL::to('/material/img/preview.svg')}}" class="mt-2" id="profile-img-tag" width="100%;">
                
              </div>
            @if ($errors->has('image_1'))
                        <span id="front_image-error" class="error text-danger" for="input-image_1">{{ $errors->first('image_1') }}</span>
                      @endif
                  </div>
                  <div class="col-sm-3">
                    <div id="image-preview1">

                <label for="image-upload1" id="image-label1 image-preview1 label" style="color: white;background-color: #e8423e;cursor: pointer;">Choose File</label>
                <input type="file" name="image_2" id="profile-img1" />
                <img src="{{URL::to('/material/img/preview.svg')}}" class="mt-2" id="profile-img-tag1" width="100%;">
              </div>
            @if ($errors->has('image_2'))
                        <span id="background_image-error" class="error text-danger" for="input-image_2">{{ $errors->first('image_2') }}</span>
                      @endif
                  </div>
                </div>
           
              </div>
              <div class="card-footer  mt-4">
                <button type="submit" class="btn btn-primary">{{ __('Save Parcel') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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

            function readURL(input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    

                    reader.onload = function (e) {

                        $('#profile-img-tag').attr('src', e.target.result);

                    }

                    reader.readAsDataURL(input.files[0]);

                }

            }

            $("#profile-img").change(function(){

                readURL(this);

            });

        </script>
@endsection