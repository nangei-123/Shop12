@extends('layouts.main')
@section('content')

<style type="text/css">
	#cart_inner{
		border: 1px solid 
	}
	img{
		-moz-box-shadow:    1px 1px 2px 2px #ccccff;
  -webkit-box-shadow: 1px 1px 2px 2px #ccccff;
  box-shadow:         1px 1px 2px 2px #ccccff;
	}

</style>
<link rel="stylesheet" type="text/css" href="/css/main.css">
    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">

        	 <div class="card card-nav-tabs">
                <div class="card-header card-header-primary">
                	 <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active">
                            <i class="material-icons">shopping_cart</i> My Shopping Cart
                          </a>
                        </li>
                      </ul>
                    </div>
                	        </div>
        				<div class="card-body">

            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            	
                            	<th scope="col">Image</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                           
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="https://www.kullabs.com/uploads/comuter.jpg" alt="" style="height: 120px;">
                                        </div>
                                         </td>
                                    	<td>
                                        <div class="media-body">
                                            <p>Minimalistic shop for multipurpose use</p>
                                        </div>
                                    </div>
                                </td>
                                <td>

                                    <h5>$360.00</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5>$720.00</h5>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-fab btn-round">
									          <i class="material-icons">clear</i>
									 </button>
                                </td>
                            </tr>
                            <tr>
                            	
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                           <img src="https://cdn2.techadvisor.co.uk/cmsdata/reviews/3669811/razer_phone_review02.jpg" alt="" style="height: 120px;">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="media-body">
                                            <p>Minimalistic shop for multipurpose use</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>$360.00</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty"  id="sst1" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst1'); var sst1 = result.value; if( !isNaN( sst1 )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                        <button onclick="var result = document.getElementById('sst1'); var sst1 = result.value; if( !isNaN( sst1 ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5>$720.00</h5>
                                </td>
                                 <td>
                                    <button class="btn btn-danger btn-fab btn-round">
									          <i class="material-icons">clear</i>
									 </button>
                                </td>
                            </tr>
                            <tr>
                            	
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="https://4.bp.blogspot.com/-aYxQ008N0xo/W75e7U6sqNI/AAAAAAAAgDo/eudpdID7Hf4YUi8XP9l3ReS30PkHlhreQCLcBGAs/s1600/Longines-Skin-Diver-Watch-001.jpg" alt="" style="height: 120px;">
                                        </div>
                                         </td>
                                    <td>
                                        <div class="media-body">
                                            <p>Minimalistic shop for multipurpose use</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>$360.00</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst2" maxlength="12" value="1" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst2'); var sst2 = result.value; if( !isNaN( sst2 )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                        <button onclick="var result = document.getElementById('sst2'); var sst2 = result.value; if( !isNaN( sst2 ) &amp;&amp; sst2 > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <h5>$720.00</h5>
                                </td>
                                 <td>
                                      <button class="btn btn-danger btn-fab btn-round">
									          <i class="material-icons">clear</i>
									 </button>
                                </td>
                            </tr>
                            <tr class="bottom_button">
                                <td>
                                    <button class="btn btn-info btn-round">
						                <i class="material-icons">update</i> Update Cart
						              </button>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                 <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="cupon_text d-flex align-items-center">
                                        <input type="text" placeholder="Coupon Code">
                                         <button class="btn btn-success">
								               <i class="material-icons">check</i> APPLY
								              </button>
                                         <button class="btn btn-primary">
								                <i class="fa fa-ticket" aria-hidden="true"></i> COUPON
								              </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                 <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h4>Subtotal</h4>
                                </td>
                                <td>
                                    <h4>$2160.00</h4>
                                </td>
                            </tr>
                          
                        </tbody>
                    </table>
                    <div class="clear-fix col-sm-12 col-lg-12 col-md-12" style="border: 0.2px solid  #ccffff;"></div>
                    <div class="d-flex flex-row-reverse mt-2">
                    	<button class="btn btn-primary">
						                <i class="material-icons">add_shopping_cart</i> CONTINUE SHOPPING
						              </button>
                    	 <a class="btn btn-success" href="{{URL::to('invoice')}}">
							                <i class="material-icons">playlist_add_check</i>PROCEED CHECKOUT
							              </a>
						  
						
						</div>
                </div>
            </div>
        </div>
        </div>

        				</div>
  </div>
    </section>
    <!--================End Cart Area =================-->
@endsection