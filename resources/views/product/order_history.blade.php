@extends('layouts.admin.app', ['activePage' => 'order', 'titlePage' => __('Order History')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Order History</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    <small>Voucher No.</small>
                  </th>
                  <th>
                  <small>Address</small>
                  </th>
                  <th>
                  <small>total Amount</small>
                  </th>
                  <th>
                  <small>Item Qty</small>
                  </th>
                  
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="{{URL::to('admin/order/product/list')}}">#8954</a>
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    
                    <td class="text-primary">
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                    <a href="{{URL::to('admin/order/product/list')}}">#5032</a>

                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                 
                    <td class="text-primary">
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                    <a href="{{URL::to('admin/order/product/list')}}">#6531</a>

                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                  
                    <td class="text-primary">
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                    <a href="{{URL::to('admin/order/product/list')}}">#3648</a>

                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                  
                    <td class="text-primary">
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                    <a href="{{URL::to('admin/order/product/list')}}">#3756</a>

                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                   
                    <td class="text-primary">
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                    <a href="{{URL::to('admin/order/product/list')}}">#0987</a>

                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                  
                    <td class="text-primary">
                      $78,615
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
  </div>
</div>
@endsection