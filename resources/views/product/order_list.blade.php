@extends('layouts.admin.app', ['activePage' => 'order_list', 'titlePage' => __('Order History')])

@section('content')
<style type="text/css">
.table-responsive{
  overflow: auto;
}
 .nowrap {
        /*white-space:nowrap;*/
         font-size: 12px;
    }
  table,th,tr,thead,small{
    font-size: 12px;
  }
</style>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Order List</h4>
            <p class="card-category"> </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
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
                    <td><u><a href="{{URL::to('admin/order/product/list')}}">PO1223</a></u></td>

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
                    <td><u><a href="{{URL::to('admin/order/product/list')}}">PO1223</a></u></td>

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
                    <td><u><a href="{{URL::to('admin/order/product/list')}}">PO1223</a></u></td>

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
                    <td><u><a href="{{URL::to('admin/order/product/list')}}">PO1223</a></u></td>

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
                    <td><u><a href="{{URL::to('admin/order/product/list')}}">PO1223</a></u></td>

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
                    <td><u><a href="{{URL::to('admin/order/product/list')}}">PO1223</a></u></td>

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
      
      </div>
    </div>
  </div>


@endsection