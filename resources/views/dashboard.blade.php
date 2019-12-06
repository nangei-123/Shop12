@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <style type="text/css">
.table-responsive{
  overflow: auto;
}
 .nowrap {
        /*white-space:nowrap;*/
         font-size: 12px;
    }
    #desc_text{
      line-height: 15px;
    }
    #profile{
      border-radius: 50%;
    }
    .mt-0{
      margin-top: -10%;
    }
</style>
<div class="content">
  <div class="container-fluid">
    <div class="row" style="margin-left: 1%;">
      <div class="col-sm-8 col-lg-8 col-md-8" id="profile">
        <div class="row mb-3">
    <div class="card col-lg-11 col-sm-11 col-md-11" style="background-color: #ffffff;margin-left: 4%">
      <div class="d-flex flex-row">
          <div class="p-0 w-25">
              <img src="https://c1.staticflickr.com/3/2862/12328317524_18e52b5972_k.jpg" style="height: 100px;" class="rounded-circle img-thumbnail mt-2" />
            
          </div>
          <div class="pl-3 pt-2 pr-2 pb-2 w-75 text-left">
              <h4 class="text-primary">Account Name : Leanne Boulton</h4>
              <h5 class="text-info">Account ID:00023124</h5>
              <ul class="m-0 float-left" style="list-style: none; margin:0; padding: 0">
                <li><i>Award </i><img src="{{asset('svg/diamond.svg')}}" width="30px;" style="margin-left: 10px;"><img src="{{asset('svg/diamond.svg')}}" width="30px;" style="margin-left: 10px;"><img src="{{asset('svg/diamond.svg')}}" width="30px;" style="margin-left: 10px;"></li>

              </ul>
           
        </div>
      </div>
    </div>
      </div>
      <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="card  mt-0">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Order List</h4>
            <p class="card-category"> </p>
          </div>
          <div class="card-body">
            <div class="table-responsive" style="font-size: 12px;">
                            <table class="table table-bordered" >
                <thead class="text-primary">
                  <tr>
                  <th>
                   <span class="nowrap"> Order ID</span>
                  </th>
                  <th>
                 <span class="nowrap"> Merchant</span>
                  </th>
                  <th>
                  <span class="nowrap">Destination Region</span>
                  </th>
                  <th>
                 <span class="nowrap"> Select Postman</span>
                  </th>
                  <th>
                 <span class="nowrap"> Product Code</span>
                  </th>
                   <th>
                 <span class="nowrap"> Product Price</span>
                  </th>
                  <th>
                 <span class="nowrap"> Qty</span>
                  </th>
                  <th>
                 <span class="nowrap"> Weight (KG)</span>
                  </th>
                  <th>
                 <span class="nowrap"> Service Fee</span>
                  </th>
                  <th>
                 <span class="nowrap"> Duration Process (Day)</span>
                  </th>
                   <th>
                 <span class="nowrap"> Order Date</span>
                  </th>
                   <th>
                 <span class="nowrap"> Order Cancel Date</span>
                  </th>
                   <th>
                  <span class="nowrap">Status</span>
                  </th>
                  <th>
                  <span class="nowrap">Total Amount</span>
                  </th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <td><a href="{{URL::to('order/list')}}"><u>PO1223</u></a></td>

                    <td>SomeOnline Shop</td>

                    <td>Yangon - NorthOkkalapa</td>

                    <td>Mg Ko Ko</td>

                    <td>Item2233</td>

                    <td>200000 MMK</td>

                    <td>20 pcs</td>

                    <td>30 KG</td>

                    <td>3000 MMK</td>

                    <td>2 days</td>

                    <td>13 / 7 / 2019</td>

                    <td>-</td>

                    <td>Pending</td>

                    <td>203000 MMK</td>
                  </tr>
                  <tr>
                    <td><a href="{{URL::to('order/list')}}"><u>PO1223</u></a></td>

                    <td>SomeOnline Shop</td>

                    <td>Yangon - NorthOkkalapa</td>

                    <td>Mg Ko Ko</td>

                    <td>Item2233</td>

                    <td>200000 MMK</td>

                    <td>20 pcs</td>

                    <td>30 KG</td>

                    <td>3000 MMK</td>

                    <td>2 days</td>

                    <td>13 / 7 / 2019</td>

                    <td>-</td>

                    <td>Complete</td>

                    <td>203000 MMK</td>
                  </tr>
                  <tr>
                    <td><a href="{{URL::to('order/list')}}"><u>PO1223</u></a></td>

                    <td>SomeOnline Shop</td>

                    <td>Yangon - NorthOkkalapa</td>

                    <td>Mg Ko Ko</td>

                    <td>Item2233</td>

                    <td>200000 MMK</td>

                    <td>20 pcs</td>

                    <td>30 KG</td>

                    <td>3000 MMK</td>

                    <td>2 days</td>

                    <td>13 / 7 / 2019</td>

                    <td>13 / 7 /2019</td>

                    <td>Cancel</td>

                    <td>203000 MMK</td>
                  </tr>
                  <tr>
                    <td><a href="{{URL::to('order/list')}}"><u>PO1223</u></a></td>

                    <td>SomeOnline Shop</td>

                    <td>Yangon - NorthOkkalapa</td>

                    <td>Mg Ko Ko</td>

                    <td>Item2233</td>

                    <td>200000 MMK</td>

                    <td>20 pcs</td>

                    <td>30 KG</td>

                    <td>3000 MMK</td>

                    <td>2 days</td>

                    <td>13 / 7 / 2019</td>

                    <td>-</td>

                    <td>Complete</td>

                    <td>203000 MMK</td>
                  </tr>
                  <tr>
                    <td><a href="{{URL::to('order/list')}}"><u>PO1223</u></a></td>

                    <td>SomeOnline Shop</td>

                    <td>Yangon - NorthOkkalapa</td>

                    <td>Mg Ko Ko</td>

                    <td>Item2233</td>

                    <td>200000 MMK</td>

                    <td>20 pcs</td>

                    <td>30 KG</td>

                    <td>3000 MMK</td>

                    <td>2 days</td>

                    <td>13 / 7 / 2019</td>

                    <td>-</td>

                    <td>Pending</td>

                    <td>203000 MMK</td>
                  </tr>
                  <tr>
                    <td><a href="{{URL::to('order/list')}}"><u>PO1223</u></a></td>

                    <td>SomeOnline Shop</td>

                    <td>Yangon - NorthOkkalapa</td>

                    <td>Mg Ko Ko</td>

                    <td>Item2233</td>

                    <td>200000 MMK</td>

                    <td>20 pcs</td>

                    <td>30 KG</td>

                    <td>3000 MMK</td>

                    <td>2 days</td>

                    <td>13 / 7 / 2019</td>

                    <td>-</td>

                    <td>Complete</td>

                    <td>203000 MMK</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="card">
          <div class="card-header card-header-primary">
     
              <p  class="card-title">Account / Cash Table</p>

                </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-responsive">
                  <thead class="thead-light" style="width: 100%;">
                    <tr>
                      <th>TID</th>
                      <th>Particular</th>
                      <th>Voucher Number</th>
                      <th>L.F</th>
                      <th>Cash</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody style="width: 100%;">
                    <tr>
                      <td>TID0011</td>
                      <td>Paid Loan Payment</td>

                     <td><a href="{{URL::to('voucher')}}"><u>20190813</u></a></td>

                      <td> - </td>
                      <td>300,000 MMK</td>
                      <td>13 / 08 / 2019</td>
                    </tr>
                     <tr>
                      <td>TID0012</td>
                      <td>Pay For Entertainment Fee</td>
                      <td><a href="{{URL::to('voucher')}}"><u>20190812</u></a></td>
                      <td> - </td>
                      <td>70,000 MMK</td>
                      <td>12 / 08 / 2019</td>
                    </tr>
                    <tr>
                      <td>TID0017</td>
                      <td>Management Education Fees</td>
                      <td><a href="{{URL::to('voucher')}}"><u>20190812</td>
                      <td> - </td>
                      <td>220,000 MMK</td>
                      <td>12 / 08 / 2019</td>
                    </tr>
                      <tr>
                      <td>TID0017</td>
                      <td>Management Education Fees</td>
                      <td><a href="{{URL::to('voucher')}}"><u>20190812</td>
                      <td> - </td>
                      <td>220,000 MMK</td>
                      <td>12 / 08 / 2019</td>
                    </tr>
                    <tr>
                      <td>TID0011</td>
                      <td>Paid Loan Payment</td>
                      <td><a href="{{URL::to('voucher')}}"><u>20190813</td>
                      <td> - </td>
                      <td>300,000 MMK</td>
                      <td>13 / 08 / 2019</td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
        
          </div>
          
        </div>
      </div>
      </div>
      <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="card">
          <div class="card-header card-header-primary">
            <p class="card-title">Notification</p>
          </div>
          <div>
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12 ml-1 mt-2">

        <div class="row no-gutters mt-1">
              <div class="col-sm-2 col-lg-2 col-md-2">

                <!--Image-->
                <div class="view overlay rounded mr-2">
                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-10 col-lg-10 col-sm-10 mt-1 text-left" id="desc_text">
                
                 <span>Name</span>
                 <br/>
                 <small style="margin-left: 5%;">and moved to Spain. Some critics have found merit in is Strummer's songwriting and vocal performance, especially.</small>
              </div>
            </div>
            <hr>
             <div class="row no-gutters mt-1">
              <div class="col-sm-2 col-lg-2 col-md-2">

                <!--Image-->
                <div class="view overlay rounded mr-2">
                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-10 col-lg-10 col-sm-10 mt-1 text-left" id="desc_text">
                
                 <span>Name</span>
                 <br/>
                 <small style="margin-left: 5%;">and moved to Spain. Some critics have found merit in is Strummer's songwriting and vocal performance, especially.</small>
              </div>
            </div>
            <hr>
             <div class="row no-gutters mt-1">
              <div class="col-sm-2 col-lg-2 col-md-2">

                <!--Image-->
                <div class="view overlay rounded mr-2">
                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-10 col-lg-10 col-sm-10 mt-1 text-left" id="desc_text">
                
                 <span>Name</span>
                 <br/>
                 <small style="margin-left: 5%;">and moved to Spain. Some critics have found merit in is Strummer's songwriting and vocal performance, especially.</small>
              </div>
            </div>
            <hr>
             <div class="row no-gutters mt-1">
              <div class="col-sm-2 col-lg-2 col-md-2">

                <!--Image-->
                <div class="view overlay rounded mr-2">
                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-10 col-lg-10 col-sm-10 mt-1 text-left" id="desc_text">
                
                 <span>Name</span>
                 <br/>
                 <small style="margin-left: 5%;">and moved to Spain. Some critics have found merit in is Strummer's songwriting and vocal performance, especially.</small>
              </div>
            </div>
            <hr>
             <div class="row no-gutters mt-1">
              <div class="col-sm-2 col-lg-2 col-md-2">

                <!--Image-->
                <div class="view overlay rounded mr-2">
                  <img src="{{URL::to('material/img/faces/avatar.jpg')}}" class="img-fluid img-thumbnail" alt="Responsive image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
              </div>

              <!--Excerpt-->
              <div class="col-md-10 col-lg-10 col-sm-10 mt-1 text-left" id="desc_text">
                
                 <span>Name</span>
                 <br/>
                 <small style="margin-left: 5%;">and moved to Spain. Some critics have found merit in is Strummer's songwriting and vocal performance, especially.</small>
              </div>
            </div>
            <hr>
             
            
      </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
