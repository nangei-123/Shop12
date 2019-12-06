@extends('layouts.index')
@section('content')


      <!-- Start Card Form -->

    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12 mt-4"> 
        <div class="row">
          <div class="col-sm-12 col-lg-12 col-md-12 mb-4 mt-4">
              <p class="text-center" style="font-size: 200%">Our Service</p>
          </div>
          
       
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-shopping-bag"></i>
        <span class="count-numbers">Product 1 </span>
        <span>You can also invert the colors</span>
        
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-truck"></i>
         <span class="count-numbers">Product 1 </span>
        <span>You can also invert the colors</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-money"></i>
         <span class="count-numbers">Product 1 </span>
        <span>You can also invert the colors</span>
        
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-gift"></i>
         <span class="count-numbers">Product 1 </span>
        <span>You can also invert the colors</span>
      </div>
    </div>

     </div>
      </div>
  </div>
  <div class="row">

      <div class="container-fluid">
        <!--                 nav pills -->
        <div id="navigation-pills">
          <div class="title">
            <h3>Products List</h3>
          </div>

          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
              <ul class="nav nav-pills nav-pills-icons mb-2" role="tablist">
                <!--
                                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                            -->
                <li class="nav-item">
                  <a class="nav-link active" href="#top_sell" role="tab" data-toggle="tab">
                    <i><img style="width:35px" src="{{ asset('svg') }}/shopping-bag.svg"></i> Top Sell
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#most_view" role="tab" data-toggle="tab">
                     <i><img style="width:35px" src="{{ asset('svg') }}/eye.svg"></i> Most View
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#recom" role="tab" data-toggle="tab">
                    <i><img style="width:35px" src="{{ asset('svg') }}/recom.svg"></i> Recommand
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#top_rating" role="tab" data-toggle="tab">
                    <i><img style="width:35px" src="{{ asset('svg') }}/rating.svg"></i> Top Rating
                  </a>
                </li>
              </ul>
              <div class="clearfix" style="border: 1px solid #80dfff;"></div>
              <div class="tab-content">
                <div class="tab-pane active" id="top_sell">
                  <div class="col-sm-12 col-lg-12 col-md-12">
                  <div class="row">
                   <div class="col-sm-12 col-lg-12 col-md-12 mt-2">
                    <div class="d-flex justify-content-end"> <span class="badge badge-pill badge-primary"><i class="fa fa-eye" aria-hidden="true"></i> View  More</span></div>                       
                  </div>
                    <!--  -->
                    <div class="card-group">

                      <a href="{{URL::to('single_product')}}">
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>
                        </a>
                      </div>

                    <!--  -->
                    <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                     <div class="card-group">

                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://i1.wp.com/sneakerfactory.net/sneakers/wp-content/uploads/2015/06/image1-e1433212711249.jpg" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>
                      </div>

                      </div>
 
                  <div class="tab-pane" id="most_view">
                   <div class="row">
                    <!--  -->
                   <div class="col-sm-12 col-lg-12 col-md-12 mt-2">
                    <div class="d-flex justify-content-end"> <span class="badge badge-pill badge-primary"><i class="fa fa-eye" aria-hidden="true"></i> View  More</span></div>                       
                  </div>
                  <div class="col-xm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="card-group">

                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">6000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>
                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>
                      </div>

                      </div>

                    <!--  -->
                     <!--  -->
                     <div class="row">
                       <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                       <div class="card-group">

                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">6000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">6000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>

                      </div>
                      </div>
                      </div>
                    <!--  -->
                    <div class="row">
                       <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                       <div class="card-group">

                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">6000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">5000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>
                    <!--  -->
                     <!--  -->
                    <div class="card" id="p_card" style="width: 14rem;">
                        <img class="card-img-top" src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5827.png" style="height: 220px;" width="auto" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Adidas Pizza Shoes Are the Must-Have Accessory </h5>
                          <h5 class="card-text" style="color: red;">6000 MMK</h5>
                          <a href="#" class="card-link"> <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></a>
                          <a href="#" class="card-link"> 
                            <button class="btn btn-primary btn-fab btn-round">
                                 <i class="material-icons">favorite</i>
                          </button>
                        </a>
                        </div>

                      </div>

                      </div>
                      </div>
                      </div>


                  </div>
                  
                </div>

                    <!--  -->
                <div class="tab-pane" id="top_rating">
                  Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                  <br>
                  <br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                </div>
              </div>
            </div>
            
          </div>
          <!-- Start Categories -->
                   <div class="title">
            <h3>Categories list</h3>
          </div>
             <div class="clearfix" style="border: 1px solid #80dfff;"></div>
          <div class="row">

            <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                    
                      <div class="col-md-5" style="background: #868e96;">
                        <a href="{{URL::to('product_list')}}">
                          <img src="http://ablogtowatch.com/wp-content/uploads/2015/12/Hysek-Abyss-44mm-Tourbillon-aBlogtoWatch-19.jpg" class="card-img-top" alt="..." style="width: 100px;" height="100px">
                            </a>
                      </div>
                    
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding" style="font-size: 11px;">
                                Watch and Accessories
                              </p>
                              
                          </div>
                      </div>
                      
                  </div>
              </div>
            </div>
            <!--  -->
             <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="https://www.khelmart.com/Cricket/zoomer_Image/NK_BS_00007_large_3.jpg" class="card-img-top" alt="..." height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding nomargin" style="font-size: 11px;">
                                Shoe and Foot Wear
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
               <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="https://www.brecorder.com/wp-content/uploads/2018/01/medicine-1024.jpg" class="card-img-top" alt="..." height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding nomargin" style="font-size: 11px;">
                                Medicine
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
             <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="http://www.northstartechnologygroup.com/wp-content/uploads/2015/10/Mobile-devices.jpg" class="card-img-top" alt="..." height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding nomargin" style="font-size: 11px;">
                                IT Devices & Accessories
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="https://speed-new.com/wp-content/uploads/2015/11/45667456.jpg" class="card-img-top" alt="..." height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding nomargin" style="font-size: 11px;">
                               PC Game
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="https://public.tailbase.com/image/2000/P150187_46z.jpeg" class="card-img-top" alt="..." height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding nomargin" style="font-size: 11px;">
                               Home use Eletronic Device
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="https://public.tailbase.com/image/2000/P150187_46z.jpeg" class="card-img-top" alt="..." height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding nomargin" style="font-size: 11px;">
                               Home use Eletronic Device
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
             <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="http://www.northstartechnologygroup.com/wp-content/uploads/2015/10/Mobile-devices.jpg" class="card-img-top" alt="..." height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding nomargin" style="font-size: 11px;">
                                IT Devices & Accessories
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
                <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="https://www.khelmart.com/Cricket/zoomer_Image/NK_BS_00007_large_3.jpg" class="card-img-top" alt="..." height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding nomargin" style="font-size: 11px;">
                                Shoe and Foot Wear
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
             <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="http://ablogtowatch.com/wp-content/uploads/2015/12/Hysek-Abyss-44mm-Tourbillon-aBlogtoWatch-19.jpg" class="card-img-top" alt="..." style="width: 100px;" height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding" style="font-size: 11px;">
                                Watch and Accessories
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="https://speed-new.com/wp-content/uploads/2015/11/45667456.jpg" class="card-img-top" alt="..." height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding nomargin" style="font-size: 11px;">
                               PC Game
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
             <!--  -->
            <div class="col-sm-2 col-md-2 col-lg-2">
              <div class="card" style="max-width: 400px;">
                  <div class="row no-gutters">
                      <div class="col-md-5" style="background: #868e96;">
                          <img src="http://ablogtowatch.com/wp-content/uploads/2015/12/Hysek-Abyss-44mm-Tourbillon-aBlogtoWatch-19.jpg" class="card-img-top" alt="..." style="width: 100px;" height="100px">
                      </div>
                      <div class="col-md-7">
                          <div class="card-body">
                              <p class="card-text nopadding" style="font-size: 11px;">
                                Watch and Accessories
                              </p>
                              
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!--  -->
          </div>
          <!--  End Categories -->
        </div>
        <!--                 end nav pills -->
      </div>
    
  </div>

<!-- End Card Form -->
 
  @endsection