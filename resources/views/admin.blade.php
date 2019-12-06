@extends('layouts.admin.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">local_shipping</i>
              </div>
              <p class="card-category">Order History</p>
              <h3 class="card-title">75
                <small> Records</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">local_shipping</i>
                <a href="{{URL::to('admin/order/history')}}">View More Order history</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">local_shipping</i>
              </div>
              <p class="card-category">Order List</p>
              <h3 class="card-title">245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_shipping</i> <a href="{{URL::to('admin/order/list')}}">View More Order List</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Total Postman</p>
              <h3 class="card-title">75 person</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">people</i> <a href="{{URL::to('admin/postman/list')}}">View More Postman</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                 <i class="material-icons">card_travel</i>
              </div>
              <p class="card-category">Total Merchant</p>
              <h3 class="card-title">25</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">card_travel</i> <a href="{{URL::to('admin/merchant/list')}}">View More Merchant List</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                 <i class="material-icons">devices</i>
              </div>
              <p class="card-category">Total Product</p>
              <h3 class="card-title">253</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">devices</i> <a href="{{URL::to('admin/product/index')}}">View More Product List</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-secondary card-header-icon">
              <div class="card-icon">
                 <i class="material-icons">store</i>
              </div>
              <p class="card-category">Total</p>
              <h3 class="card-title">290</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">devices</i> <a href="{{URL::to('admin/invetory')}}">View More Record List</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection