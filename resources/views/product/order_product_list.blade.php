@extends('layouts.admin.app',['activePage'=>'Order Product List','titlePage'=>__('Order Product List')])
@section('content')
<style>
.param {
    margin-bottom: 7px;
    line-height: 1.4;
}
.param-inline dt {
    display: inline-block;
}
.param dt {
    margin: 0;
    margin-right: 7px;
    font-weight: 600;
}
.param-inline dd {
    vertical-align: baseline;
    display: inline-block;
}

.param dd {
    margin: 0;
    vertical-align: baseline;
} 

.shopping-cart-wrap .price {
    color: #007bff;
    font-size: 18px;
    font-weight: bold;
    margin-right: 5px;
    display: block;
}
var {
    font-style: normal;
}

.media img {
    margin-right: 1rem;
}
.img-sm {
    width: 190px;
    max-height: 100%;
    object-fit: cover;
}
#mt-0{
    margin-top: -2%;
}
</style>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card">

                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Order-Product-List</h4>
                    </div>

                    <div class="card-body">
            <div class="col-md-12">
                
                             <div class="clear-fix" style="border: 0.5px solid #33adff;">
              
          </div>
                    <div class="col-sm-12 col-lg-12 col-md-12 pt-4 d-flex flex-row-reverse no-gutters bd-highlight">
                        
                          <div class="col-sm-3 col-lg-3 col-md-3  bd-highlight" style="font-weight: bold;">AFDS-1234 | (5% Discount / 16000 MMK)</div>
                          <div class="col-sm-2 col-lg-2 col-md-2  bd-highlight">Redeem Code</div>
                           <div class="col-sm-1 col-lg-1 col-md-1  bd-highlight"><i class="material-icons">
                        filter_2
                        </i></div>

                        <div class="col-sm-3 col-lg-3 col-md-3  bd-highlight" style="font-weight: bold;">2 days</div>
                     <div class="col-sm-2 col-lg-2 col-md-2  bd-highlight">Delivery Duration</div>
                        <div class="col-sm-1 col-lg-1 col-md-1  bd-highlight"><i class="material-icons">
                        calendar_today
                        </i></div>
                         
                </div>
                <div class="col-sm-12 col-lg-12 col-md-12 pt-4 d-flex flex-row-reverse no-gutters bd-highlight" id="mt-0">
                        
                        <div class="col-sm-3 col-lg-3 col-md-3  bd-highlight mt-2" style="font-weight: bold;">2000 MMK</div>
                         <div class="col-sm-2 col-lg-2 col-md-2  bd-highlight mt-2">Shipping Cost</div>
                          
                        <div class="col-sm-1 col-lg-1 col-md-1  bd-highlight mb-2"><img src="{{asset('material/img/ship.svg')}}" width="35px;" class="responsive-image mb-2"></div>
                     <div class="col-sm-5 col-lg-5 col-md-5  bd-highlight">No.68, Thit Sar Pann St, NorthOkkalapa, Yangon</div>
                        <div class="col-sm-1 col-lg-1 col-md-1  bd-highlight"><i class="material-icons">
                        home
                        </i></div>
                         
                </div>
                 <div class="col-sm-12 col-lg-12 col-md-12 pt-2 d-flex flex-row-reverse no-gutters bd-highlight" id="mt-0">
                    <div class="col-sm-3 col-lg-3 col-md-3  bd-highlight" style="font-weight: bold;"> (10% | 32000 MMK)</div>
                          <div class="col-sm-2 col-lg-2 col-md-2  bd-highlight">Tax</div>
                           <div class="col-sm-1 col-lg-1 col-md-1  bd-highlight"><img src="{{asset('material/img/tax.svg')}}" width="25px;" class="responsive-image mb-2"></div>
                           <div class="col-sm-5 col-lg-5 col-md-5  bd-highlight">Some Online Store</div>
                        <div class="col-sm-1 col-lg-1 col-md-1  bd-highlight"><i class="material-icons">
                        card_travel
                        </i></div>
                         
                          
                </div>
                <div class="clear-fix mt-2" style="border: 0.5px solid #33adff;">
                        <table class="table table-hover shopping-cart-wrap">
                            <thead class="text-muted">
                                <tr>
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" width="200" class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>    
                                        <figure class="media">
	                                    <div class="img-wrap"><img src="https://azcd.harveynorman.com.au/media/catalog/product/5/5/55inch-akai-image_1.jpg" class="img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Product name goes here </h6>
                                                <dl class="param param-inline small">
                                                <dt>Size: </dt>
                                                <dd>21 Inches</dd>
                                                </dl>
                                                <dl class="param param-inline small">
                                                <dt>Color: </dt>
                                                <dd>Black</dd>
                                                </dl>
                                            </figcaption>
                                        </figure> 
                                    </td>
                                    <td> 
                                        <input type="text" class="form-control" value="1" disabled>
	                                </td>
                                    <td> 
                                        <div class="price-wrap"> 
                                            <var class="price">120000</var> 
                                            <small class="text-muted">MMK</small> 
                                           
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right"> 
                                        <a title="" href="{{URL::to('admin/product/detail/')}}" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist">Detail</a> 
	                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <figure class="media">
                                        <div class="img-wrap"><img src="https://assets.pcmag.com/media/images/569181-ce-phone-project-01.jpg?width=640&height=471" class="img-sm"></div>
                                        <figcaption class="media-body">
                                            <h6 class="title text-truncate">Product name goes here </h6>
                                            <dl class="param param-inline small">
                                            <dt>Size: </dt>
                                            <dd>6 Inches</dd>
                                            </dl>
                                            <dl class="param param-inline small">
                                            <dt>Color: </dt>
                                            <dd>Blue</dd>
                                            </dl>
                                        </figcaption>
                                    </figure> 
	                            </td>
                                <td> 
                                    <input type="text" class="form-control" value="2" disabled>
	                            </td>
                                <td> 
                                    <div class="price-wrap"> 
                                        <var class="price">200000</var> 
                                        <small class="text-muted">MMK</small> 
                                    </div> <!-- price-wrap .// -->
	                            </td>
                                <td class="text-right"> 
                                    <a title="" href="{{URL::to('admin/product/detail/')}}" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist">Detail</a> 
	                            </td>
                                </tr>
                                <tr>
                                <td>
                                    
                                </td>
                                <td> 
                                    Subtotal
                                </td>
                                <td colspan="2">  
                                     <h4 class="mt-3">320000 MMK</h4> 

                                </td>
                                
                                </tr>
                                </tr>
                                <tr>
                                <td>
                                    
                                </td>
                                <td> 
                                    Total
                                </td>
                                <td colspan="2">  
                                     <h4 class="mt-3">288,000 MMK</h4> 

                                </td>
                                
                                </tr>
                            </tbody>
                        </table>
          <div class="clear-fix" style="border: 0.5px solid #33adff;">
              
          </div>

              </div>

            </div>
        </div>
    </div>
</div>

@endsection
