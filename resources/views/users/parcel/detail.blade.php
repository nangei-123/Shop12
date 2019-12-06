@extends('layouts.app', ['activePage' => 'parcel', 'titlePage' => __('Dashboard')])

  @section('content')

<style type="text/css">
 .carousel-indicators {
    bottom: 0;
    left: 0;
    margin-left: 5px;
    width: 100%;
}
/* Indicators list style */
 .carousel-indicators li {
    border: medium none;
    border-radius: 0;
    float: left;
    height: 40px;
    margin-bottom: 5px;
    margin-left: 0;
    margin-right: 5px !important;
    /*margin-top: 0;*/
    width: 80px;
}
/* Indicators images style */
.carousel-indicators img {
    border: 2px solid #FFFFFF;
    float: left;
    height: 40px;
    left: 0;
    width: 80px;
}
/* Indicators active image style */
 .carousel-indicators .active img {
    border: 2px solid #428BCA;
    opacity: 0.7;
}
#carouselExampleIndicators{

  padding: 1px 1px 1px 1px;
  border: 1px solid #BFBFBF;
  background-color: white;
  box-shadow: 3px 3px 3px 3px #aaaaaa;

}
</style>

    <div class="content">
      <div class="container-fluid">

        <div class="row">
         <div class="col-sm-8 col-lg-8 col-md-8">
                  <div class="row">
                      <div class="card ">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Parcel Detail') }}</h4>
                            <p class="card-category"></p>
                          </div>
                          <div class="card-body ">
                            <div class="row">
                              <div class="col-md-4 col-lg-4 col-sm-4 mb-4">
                                <div class="row no-gutters">
                                  <div class="col-sm-12 col-lg-12 col-md-12">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 
                                    <div class="carousel-inner">
                                      
                                      <div class="carousel-item active">
                                        <img class="img-fluid" src="{{URL::to('product/tv.jpg')}}" alt="Second slide" style="height: 180px">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="img-fluid" src="{{URL::to('product/phone.jpg')}}" alt="Third slide" style="height: 180px">
                                      </div>
                                    </div>
                                     
                                  </div>
                                  </div>
                           
                          </div>  
                           <div class="row mt-4">
                            <div class="col-sm-12 col-lg-12 col-md-12 mt-5">
                               <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><img src="{{URL::to('product/tv.jpg')}}"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"> <img class="img-fluid" src="{{URL::to('product/phone.jpg')}}" alt="Third slide"></li>
                                      
                                    </ol>
                            </div>
                            </div>
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
                              Parcel Pice 
                            </td>
                            <td>
                            <h4 style="font-weight: bold;"> - $ 1000 </h4>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="3" style="text-indent: 20px;">
                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
                    <!--  -->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                      <div id="accordion">
                    <div class="card">
                      <div class="card-header card-header-primary">
                          <a style="cursor: pointer;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Search Postman
                          </a>
                        </h5>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <div class="col-sm-12 col-lg-12 col-md-12">
                            <form action="" method="get">
                              <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="material-icons">face</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Postman Name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                             <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Postman Phone" aria-label="phone" aria-describedby="basic-addon1">
                            </div>
                            </form>
                          </div>
                          <!-- Search Postman with AJAX -->
                          <div class="col-sm-12 col-lg-12 col-md-12 ml-1 mt-2">
        <div class="row no-gutters">
          <div class="col-sm-1 col-lg-1 col-md-1">
            <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
          </div>
              <div class="col-sm-3 col-lg- col-md-3">
                <!--Image-->
                <div class="view overlay rounded mr-2">

                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-8 text-left mt-2" style="font-size: 11px;">
                <div class="row no-gutters" style=" line-height: 60%;">
                 <p class="col-12">Parcel ID</p>
                
                  <p class="col-12">Pick Up township</p>
                  
                  <p class="col-12">Drop township</p>
                </div>
              </div>
            </div>
      </div>
       <div class="col-sm-12 col-lg-12 col-md-12 ml-1 mt-2">
        <div class="row no-gutters">
          <div class="col-sm-1 col-lg-1 col-md-1">
            <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
          </div>
              <div class="col-sm-3 col-lg- col-md-3">
                <!--Image-->
                <div class="view overlay rounded mr-2">

                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-8 text-left mt-2" style="font-size: 11px;">
                <div class="row no-gutters" style=" line-height: 60%;">
                 <p class="col-12">Parcel ID</p>
                
                  <p class="col-12">Pick Up township</p>
                  
                  <p class="col-12">Drop township</p>
                </div>
              </div>
            </div>
      </div>
       <div class="col-sm-12 col-lg-12 col-md-12 ml-1 mt-2">
        <div class="row no-gutters">
          <div class="col-sm-1 col-lg-1 col-md-1">
            <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
          </div>
              <div class="col-sm-3 col-lg- col-md-3">
                <!--Image-->
                <div class="view overlay rounded mr-2">

                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-8 text-left mt-2" style="font-size: 11px;">
                <div class="row no-gutters" style=" line-height: 60%;">
                 <p class="col-12">Parcel ID</p>
                
                  <p class="col-12">Pick Up township</p>
                  
                  <p class="col-12">Drop township</p>
                </div>
              </div>
            </div>
      </div>
       <div class="col-sm-12 col-lg-12 col-md-12 ml-1 mt-2">
        <div class="row no-gutters">
          <div class="col-sm-1 col-lg-1 col-md-1">
            <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
          </div>
              <div class="col-sm-3 col-lg- col-md-3">
                <!--Image-->
                <div class="view overlay rounded mr-2">

                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-8 text-left mt-2" style="font-size: 11px;">
                <div class="row no-gutters" style=" line-height: 60%;">
                 <p class="col-12">Parcel ID</p>
                
                  <p class="col-12">Pick Up township</p>
                  
                  <p class="col-12">Drop township</p>
                </div>
              </div>
            </div>
      </div>

      <div class="col-sm-12 col-lg-12 col-md-12">
        <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Assign">
        
      </div>
      <!-- End Search Post man -->
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>


  @endsection
