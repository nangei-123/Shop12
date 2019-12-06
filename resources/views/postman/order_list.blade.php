@extends('layouts.main')
@section('content')
<style type="text/css">
	#make-me-sticky {
  position: -webkit-sticky;
	position: sticky;
	top: 0;
    
  padding: 0 15px;
}
     td {
    padding: 4px !important;
}



</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 mt-4">
			<div>
				<h5 class="text">Order List Timeline</h5>
			</div>
			<div class="clear-fix" style="border: 0.5px solid #cbdbf5;"></div>
			<div class="col-sm-12 col-lg-12 col-md-12 mt-4">
				<div class="row">
					<div class="col-sm-8 col-lg-8 col-md-8">
						<div class="row">
              <div class="card" style="margin-top: -1%;">
                   <div class="card-body col-lg-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-md-4">
                          <a href="{{URL::to('detail')}}">
                          <img id="image-preview" src="{{URL::to('/product/p1.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                          </a>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8" id="desc">
                           
                        <table class="table table-sm" >
                          <tbody>
                          <tr id="parcel_name">
                            <td style="color: green" width="30%" class="align-middle">
                              Parcel Name 
                            </td>
                            <td width="100%" class="align-middle">
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
                           <tr>
                            <td style="color: green">
                             Status
                            </td>
                            <td>
                             - Pending
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
                          <img id="image-preview" src="{{URL::to('product/shoe.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                 
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8" id="desc">
                           
                        <table class="table table-sm">
                          <tbody>
                          <tr id="parcel_name">
                            <td style="color: green" width="30%" class="align-middle">
                              Parcel Name 
                            </td>
                            <td width="100%" class="align-middle">
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
                          <tr>
                            <td style="color: green">
                             Status
                            </td>
                            <td>
                             - Pending
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
                          <img id="image-preview" src="{{URL::to('/product/phone.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                 
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8" id="desc">
                           
                        <table class="table table-sm">
                          <tbody>
                          <tr id="parcel_name">
                            <td style="color: green" width="30%" class="align-middle">
                              Parcel Name 
                            </td>
                            <td width="100%" class="align-middle">
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
                          <tr>
                            <td style="color: green">
                             Status
                            </td>
                            <td>
                             - Pending
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
                          <img id="image-preview" src="{{URL::to('/product/tv.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                 
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8" id="desc">
                           
                        <table class="table table-sm">
                          <tbody>
                          <tr id="parcel_name">
                            <td style="color: green" width="30%" class="align-middle">
                              Parcel Name 
                            </td>
                            <td width="100%" class="align-middle">
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
                          <tr>
                            <td style="color: green">
                             Status
                            </td>
                            <td>
                             - Pending
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
                          <img id="image-preview" src="{{URL::to('/product/shoe.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                 
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8" id="desc">
                           
                        <table class="table table-sm">
                          <tbody>
                         <tr id="parcel_name">
                            <td style="color: green" width="30%" class="align-middle">
                              Parcel Name 
                            </td>
                            <td width="100%" class="align-middle">
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
                          <tr>
                            <td style="color: green">
                             Status
                            </td>
                            <td>
                             - Pending
                            </td>
                          </tr>
                          </tbody>
                        </table>
                       
                    </div>
                   
                  </div>       
                </div>
            </div>
            

          </div>
						</div>
					
					<div class="col-sm-4 col-lg-4 col-md-4" id="make-me-sticky" style="width: 90%;height: 200px;">
		                <div class="card">
		                	<div class="card-header card-header-primary">
		                		<div class="card-title">
		                			<p>Filter Order List</p>
		                	
		                	</div>
		                		</div>
		                		<div class="col-sm-12 col-lg-12 col-md-12">
		                			<div class="form-group">
						                <div class="input-group">
						                  <div class="input-group-prepend">
						                    <span class="input-group-text">
						                      <i class="material-icons">text_format</i>
						                    </span>
						                  </div>
						                  <input type="text" class="form-control" placeholder="With Material Icons">
						                </div>
						              </div>
		                		</div>
		                			<div class="col-sm-12 col-lg-12 col-md-12">
		                			<div class="form-group">
						                <div class="input-group">
						                  <div class="input-group-prepend">
						                    <span class="input-group-text">
						                      <i class="material-icons">sort</i>
						                    </span>
						                  </div>
						                  <select class="form-control">
						                  	<option>Select Categories</option>
						                  	<option>Categories 1</option>
						                  	<option>Categorues 2</option>
						                  	<option>Categories 3</option>
						                  </select>
						                </div>
						              </div>
		                		</div>
		                		<div class="col-sm-12 col-lg-12 col-md-12">
		                			<div class="form-group">
						                <div class="input-group">
						                  <div class="input-group-prepend">
						                    <span class="input-group-text">
						                      <i class="material-icons">location_city</i>
						                    </span>
						                  </div>
						                  <select class="form-control">
						                  	<option>Select City</option>
						                  	<option>Yangon</option>
						                  	<option>Mandalay</option>
						                  	<option>Mgway</option>
						                  </select>
						                </div>
						              </div>
		                		</div>

		                		<div class="col-sm-12 col-lg-12 col-md-12">
		                			<div class="form-group">
						                <div class="input-group">
						                  <div class="input-group-prepend">
						                    <span class="input-group-text">
						                      <i class="material-icons">house</i>
						                    </span>
						                  </div>
						                  <select class="form-control">
						                  	<option>Select Township</option>
						                  	<option>Kamayut</option>
						                  	<option>Tamwe</option>
						                  	<option>Northokkalapa</option>
						                  </select>
						                </div>
						              </div>
		                		</div>
		                </div>
		           </div>
		           <!--  -->
		           <div class="col-md-8 col-sm-8 col-sm-8 text-center">
		           	<button class="btn btn-success  btn-round">
		              Load Data
		              </button>
		           	
		           </div>
		          
			</div>
		</div>
	</div>
	
</div>
@endsection