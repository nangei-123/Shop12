@extends('layouts.admin.app',['activePage'=>'product_list','titlePage'=>'Tables'])
@section('content')
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
              <table class="table">
                <thead class=" text-primary">
                    <tr>
                    	<th>
                        <small>PID</small>
                      </th>
                      <th>
                        <small>Ordered</small>
                      </th>
                      <th>
                        <small>Deliver</small>
                      </th>
                      <th>
                        <small>Quantity</small>
                      </th>
                      <th>
                        <small>Register Date</small>
                      </th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        <a href="{{URL::to('admin/order/product/list')}}"><u> PID1122 </u></a>
                    </td>
                        <td>
                        <a href="{{URL::to('admin/order/list')}}"><u> O1122 </u></a>
                    </td>
                        <td>Waiting</td>
                        <td>5 pcs</td>
                        <td>13 / 8 / 2019</td>
                    </tr>
                	<tr>
                    <td>
                        <a href="{{URL::to('admin/order/product/list')}}"><u> PID1122 </u></a>
                    </td>
                        <td>
                        <a href="{{URL::to('admin/order/list')}}"><u> O1122 </u></a>
                    </td>
                        <td>Waiting</td>
                        <td>5 pcs</td>
                        <td>13 / 8 / 2019</td>
                    </tr>
                    <tr>
                    <td>
                        <a href="{{URL::to('admin/order/product/list')}}"><u> PID1122 </u></a>
                    </td>
                        <td>
                        <a href="{{URL::to('admin/order/list')}}"><u> O1122 </u></a>
                    </td>
                        <td>Waiting</td>
                        <td>5 pcs</td>
                        <td>13 / 8 / 2019</td>
                    </tr>
                    <tr>
                    <td>
                        <a href="{{URL::to('admin/order/product/list')}}"><u> PID1122 </u></a>
                    </td>
                        <td>
                        <a href="{{URL::to('admin/order/list')}}"><u> O1122 </u></a>
                    </td>
                        <td>Waiting</td>
                        <td>5 pcs</td>
                        <td>13 / 8 / 2019</td>
                    </tr>
                    <tr>
                    <td>
                        <a href="{{URL::to('admin/order/product/list')}}"><u> PID1122 </u></a>
                    </td>
                        <td>
                        <a href="{{URL::to('admin/order/list')}}"><u> O1122 </u></a>
                    </td>
                        <td>Waiting</td>
                        <td>5 pcs</td>
                        <td>13 / 8 / 2019</td>
                    </tr>
                    <tr>
                    <td>
                        <a href="{{URL::to('admin/order/product/list')}}"><u> PID1122 </u></a>
                    </td>
                        <td>
                        <a href="{{URL::to('admin/order/list')}}"><u> O1122 </u></a>
                    </td>
                        <td>Waiting</td>
                        <td>5 pcs</td>
                        <td>13 / 8 / 2019</td>
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