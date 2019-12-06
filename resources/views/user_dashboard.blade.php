  @extends('layouts.user_dashboard', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

  @section('content')
  <style type="text/css">
     td {
    padding: 4px !important;
}

  </style>



    <div class="content">
      <div class="container-fluid">

<div class="row">
    <div class="col-lg-8 col-sm-8 col-lg-8">
    <!-- Time Line -->
            <div class="row">
              <div class="card" style="margin-top: -1%;">
                   <div class="card-body col-lg-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4">
                          <img id="image-preview" src="{{URL::to('/material/img/cover.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                 
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8" id="desc">
                           
                        <table class="table table-sm" >
                          <tbody>
                          <tr>
                            <td style="color: green" width="30%">
                              Parcel Name 
                            </td>
                            <td width="100%">
                              - Material Name
                            </td>
                            <td>
                              
                           <div class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 6px;">
            <i class="material-icons">more_vert</i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">{{ __('Mike John responded to your email') }}</a>
            <a class="dropdown-item" href="#">{{ __('You have 5 new tasks') }}</a>
            <a class="dropdown-item" href="#">{{ __('You\'re now friend with Andrew') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another Notification') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another One') }}</a>
          </div>
        </div>
        
                            </td>
                          </tr>
                          <tr>
                            <td style="color: green">
                              Parcel Pice 
                            </td>
                            <td>
                             - $ 1000
                            </td>
                          </tr>
                           <tr>
                            <td style="color: green">
                             Pickup Address
                            </td>
                            <td>
                             -  Hlaing Thar Yar, No .68, BaYintNaung St,
                            </td>
                          </tr>
                          <tr>
                            <td style="color: green">
                             Drop Address
                            </td>
                            <td>
                             -  Hlaing Thar Yar, No .68, BaYintNaung St,
                            </td>
                          </tr>
                          </tbody>
                        </table>
                        
                    </div>
                   
                  </div>       
                </div>
            </div>
            <div class="card" style="margin-top: -1%;">
                   <div class="card-body col-lg-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4">
                          <img id="image-preview" src="{{URL::to('/material/img/cover.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                 
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8" id="desc">
                           
                        <table class="table table-sm">
                          <tbody>
                          <tr>
                            <td style="color: green" width="30%">
                              Parcel Name 
                            </td>
                            <td width="100%">
                              - Material Name
                            </td>
                            <td>
                              
                           <div class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">more_vert</i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">{{ __('Mike John responded to your email') }}</a>
            <a class="dropdown-item" href="#">{{ __('You have 5 new tasks') }}</a>
            <a class="dropdown-item" href="#">{{ __('You\'re now friend with Andrew') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another Notification') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another One') }}</a>
          </div>
        </div>
        
                            </td>
                          </tr>
                          <tr>
                            <td style="color: green">
                              Parcel Pice 
                            </td>
                            <td>
                             - $ 1000
                            </td>
                          </tr>
                           <tr>
                            <td style="color: green">
                             Pickup Address
                            </td>
                            <td>
                             -  Hlaing Thar Yar, No .68, BaYintNaung St,
                            </td>
                          </tr>
                          <tr>
                            <td style="color: green">
                             Drop Address
                            </td>
                            <td>
                             -  Hlaing Thar Yar, No .68, BaYintNaung St,
                            </td>
                          </tr>
                          </tbody>
                        </table>
                       
                    </div>
                   
                  </div>       
                </div>
            </div>
            <div class="card" style="margin-top: -1%;">
                   <div class="card-body col-lg-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4">
                          <img id="image-preview" src="{{URL::to('/material/img/cover.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                 
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8" id="desc">
                           
                        <table class="table table-sm">
                          <tbody>
                          <tr>
                            <td style="color: green" width="30%">
                              Parcel Name 
                            </td>
                            <td width="100%">
                              - Material Name
                            </td>
                            <td>
                              
                           <div class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">more_vert</i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">{{ __('Mike John responded to your email') }}</a>
            <a class="dropdown-item" href="#">{{ __('You have 5 new tasks') }}</a>
            <a class="dropdown-item" href="#">{{ __('You\'re now friend with Andrew') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another Notification') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another One') }}</a>
          </div>
        </div>
        
                            </td>
                          </tr>
                          <tr>
                            <td style="color: green">
                              Parcel Pice 
                            </td>
                            <td>
                             - $ 1000
                            </td>
                          </tr>
                           <tr>
                            <td style="color: green">
                             Pickup Address
                            </td>
                            <td>
                             -  Hlaing Thar Yar, No .68, BaYintNaung St,
                            </td>
                          </tr>
                          <tr>
                            <td style="color: green">
                             Drop Address
                            </td>
                            <td>
                             -  Hlaing Thar Yar, No .68, BaYintNaung St,
                            </td>
                          </tr>
                          </tbody>
                        </table>
                       
                    </div>
                   
                  </div>       
                </div>
            </div>
            <div class="card" style="margin-top: -1%;">
                   <div class="card-body col-lg-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4">
                          <img id="image-preview" src="{{URL::to('/material/img/cover.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                 
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8" id="desc">
                           
                        <table class="table table-sm">
                          <tbody>
                          <tr>
                            <td style="color: green" width="30%">
                              Parcel Name 
                            </td>
                            <td width="100%">
                              - Material Name
                            </td>
                            <td>
                              
                           <div class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">more_vert</i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">{{ __('Mike John responded to your email') }}</a>
            <a class="dropdown-item" href="#">{{ __('You have 5 new tasks') }}</a>
            <a class="dropdown-item" href="#">{{ __('You\'re now friend with Andrew') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another Notification') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another One') }}</a>
          </div>
        </div>
        
                            </td>
                          </tr>
                          <tr>
                            <td style="color: green">
                              Parcel Pice 
                            </td>
                            <td>
                             - $ 1000
                            </td>
                          </tr>
                           <tr>
                            <td style="color: green">
                             Pickup Address
                            </td>
                            <td>
                             -  Hlaing Thar Yar, No .68, BaYintNaung St,
                            </td>
                          </tr>
                          <tr>
                            <td style="color: green">
                             Drop Address
                            </td>
                            <td>
                             -  Hlaing Thar Yar, No .68, BaYintNaung St,
                            </td>
                          </tr>
                          </tbody>
                        </table>
                       
                    </div>
                   
                  </div>       
                </div>
            </div>
            <div class="card" style="margin-top: -1%;">
                   <div class="card-body col-lg-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4">
                          <img id="image-preview" src="{{URL::to('/material/img/cover.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                 
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8" id="desc">
                           
                        <table class="table table-sm">
                          <tbody>
                          <tr>
                            <td style="color: green" width="30%">
                              Parcel Name 
                            </td>
                            <td width="100%">
                              - Material Name
                            </td>
                            <td>
                              
                           <div class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">more_vert</i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">{{ __('Mike John responded to your email') }}</a>
            <a class="dropdown-item" href="#">{{ __('You have 5 new tasks') }}</a>
            <a class="dropdown-item" href="#">{{ __('You\'re now friend with Andrew') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another Notification') }}</a>
            <a class="dropdown-item" href="#">{{ __('Another One') }}</a>
          </div>
        </div>
        
                            </td>
                          </tr>
                          <tr>
                            <td style="color: green">
                              Parcel Pice 
                            </td>
                            <td>
                             - $ 1000
                            </td>
                          </tr>
                           <tr>
                            <td style="color: green">
                             Pickup Address
                            </td>
                            <td>
                             -  Hlaing Thar Yar, No .68, BaYintNaung St,
                            </td>
                          </tr>
                          <tr>
                            <td style="color: green">
                             Drop Address
                            </td>
                            <td>
                             -  Hlaing Thar Yar, No .68, BaYintNaung St,
                            </td>
                          </tr>
                          </tbody>
                        </table>
                       
                    </div>
                   
                  </div>       
                </div>
            </div>
            

          </div>



    <!-- End Timeline -->
      </div>
      <!-- Right Side Bar -->
      <div class="col-lg-4 col-sm-4 col-lg-4">
    
      <div class="card  col-sm-12 col-lg-12 col-md-12 ml-1" style="margin-top: -2%;">
       
             

                <!--Image-->
                
                 <div class="form-group">
                  <div style="color: green">
                <label for="exampleFormControlSelect1" >Select Township</label>
              </div>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Yangon</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
                  <a>
                    
                  </a>
              <!--Excerpt-->
             
   
      </div>
      <div class="card  col-sm-12 col-lg-12 col-md-12 ml-1" style="margin-top: -7%;">
        <div class="row no-gutters">
              <div class="col-sm-3 col-lg-3 col-md-3">

                <!--Image-->
                <div class="view overlay rounded mr-2">
                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9 mt-1">
                
                 <small bgcolor="primary">User Name</small>
                <br>
                  <small>0999999999</small>
                  <br>
                  <small><span class="fa fa-star checked"></span></small><small>8.5/10</small>

              </div>
            </div>
      </div>
      
      <div class="card  col-sm-12 col-lg-12 col-md-12 ml-1" style="margin-top: -7%;">
        <div class="row no-gutters">
              <div class="col-sm-3 col-lg-3 col-md-3">

                <!--Image-->
                <div class="view overlay rounded mr-2">
                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9 mt-1">
                
                 <small bgcolor="primary">User Name</small>
                <br>
                  <small>0999999999</small>
                  <br>
                  <small><span class="fa fa-star checked"></span></small><small>8.5/10</small>

              </div>
            </div>
      </div>
      <div class="card  col-sm-12 col-lg-12 col-md-12 ml-1" style="margin-top: -7%;">
        <div class="row no-gutters">
              <div class="col-sm-3 col-lg-3 col-md-3">

                <!--Image-->
                <div class="view overlay rounded mr-2">
                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9 mt-1">
                
                 <small bgcolor="primary">User Name</small>
                <br>
                  <small>0999999999</small>
                  <br>
                  <small><span class="fa fa-star checked"></span></small><small>8.5/10</small>

              </div>
            </div>
      </div>
      <div class="card  col-sm-12 col-lg-12 col-md-12 ml-1" style="margin-top: -7%;">
        <div class="row no-gutters">
              <div class="col-sm-3 col-lg-3 col-md-3">

                <!--Image-->
                <div class="view overlay rounded mr-2">
                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9 mt-1">
                
                 <small bgcolor="primary">User Name</small>
                <br>
                  <small>0999999999</small>
                  <br>
                  <small><span class="fa fa-star checked"></span></small><small>8.5/10</small>

              </div>
            </div>
      </div>
      <div class="card  col-sm-12 col-lg-12 col-md-12 ml-1" style="margin-top: -7%;">
        <div class="row no-gutters">
              <div class="col-sm-3 col-lg-3 col-md-3">

                <!--Image-->
                <div class="view overlay rounded mr-2">
                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-9 mt-1">
                
                 <small bgcolor="primary">User Name</small>
                <br>
                  <small>0999999999</small>
                  <br>
                  <small><span class="fa fa-star checked"></span></small><small>8.5/10</small>

              </div>
            </div>
      </div>


    

      <!-- End Right Side Bar -->
</div>

    </div>
  @endsection

  @push('js')
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
      });
    </script>
  @endpush