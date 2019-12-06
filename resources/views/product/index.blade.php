@extends('layouts.admin.app',['activePage'=>'product_list','titlePage'=>'Tables'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Product List</h4>
            <p class="card-category"> </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                	<th>
                    <small>Image</small>
                  </th>
                  <th>
                    <small>Item Code</small>
                  </th>
                  <th>
                    <small>Item Name</small>
                  </th>
                  <th>
                    <small>Stock</small>
                  </th>
                  <th>
                    <small>Price</small>
                  </th>
                  <th>
                    <small>Qty</small>
                  </th>
                   <th>
                    <small>Action</small>
                  </th>
                  
                </thead>
                <tbody>
                	<tr>
                		<td>
                			<img src="https://i.guim.co.uk/img/media/2d327d9ee6d7bbd8c07708abdf4b0478a59fddf5/192_567_5426_3256/master/5426.jpg?width=300&quality=85&auto=format&fit=max&s=7da550647b6f1a5b6ed2e45829107ac5" width="130px;">
                		</td>
                		<td>
                			Item555
                		</td>
                		<td>
                			Computer
                		</td>
                		<td>
                			Available
                		</td>
                		<td>
                			1200000 MMK
                		</td>
                		<td>
                			2
                		</td>
                		<td>
                			<div class="dropdown">
							  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
							    Menu
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="{{URL::to('admin/product/detail')}}">View Detail</a>
							    <a class="dropdown-item" href="#">Update</a>
							    <a class="dropdown-item" href="#">Delete</a>
							  </div>
							</div>
                		</td>
                	</tr>
                	<tr>
                		<td>
                			<img src="https://dks.scene7.com/is/image/GolfGalaxy/18BROWGHST11XXXXXFTW_Black_Pink_Blue?wid=1080&fmt=jpg" width="130px;">
                		</td>
                		<td>
                			Item2233
                		</td>
                		<td>
                			Addidas Shoe
                		</td>
                		<td>
                			Available
                		</td>
                		<td>
                			Available
                		</td>
                		<td>
                			23 
                		</td>
                		<td>
                			<div class="dropdown">
							  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
							    Menu
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="{{URL::to('admin/product/detail')}}">View Detail</a>
							    <a class="dropdown-item" href="#">Update</a>
							    <a class="dropdown-item" href="#">Delete</a>
							  </div>
							</div>
                		</td>
                	</tr>
                	<tr>
                		<td>
                			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2_6vh-Pxw9o59dD9FJNVxWBqHU3KtFDrV3u5hfsuUJ9NikU2h9w&s" width="130px;">
                		</td>
                		<td>
                			Item2233
                		</td>
                		<td>
                			Sony Phone
                		</td>
                		<td>
                			Available
                		</td>
                		<td>
                			100000 MMk
                		</td>
                		<td>
                			2 pcs
                		</td>
                		<td>
                			<div class="dropdown">
							  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
							    Menu
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="{{URL::to('admin/product/detail')}}">View Detail</a>
							    <a class="dropdown-item" href="#">Update</a>
							    <a class="dropdown-item" href="#">Delete</a>
							  </div>
							</div>
                		</td>
                	</tr>
                	<tr>
                		<td>
                			<img src="https://icdn3.digitaltrends.com/image/digitaltrends/apple-watch-series-4-review_11.jpg" width="130px;">
                		</td>
                		<td>
                			Item33
                		</td>
                		<td>
                			Watch
                		</td>
                		<td>
                			100 MMK
                		</td>
                		<td>
                			Available
                		</td>
                		<td>
                			5 pcs
                		</td>
                		<td>
                			<div class="dropdown">
							  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
							    Menu
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="{{URL::to('admin/product/detail')}}">View Detail</a>
							    <a class="dropdown-item" href="#">Update</a>
							    <a class="dropdown-item" href="#">Delete</a>
							  </div>
							</div>
                		</td>
                	</tr>
                	<tr>
                		<td>
                			<img src="https://dks.scene7.com/is/image/GolfGalaxy/18BROWGHST11XXXXXFTW_Black_Pink_Blue?wid=1080&fmt=jpg" width="130px;">
                		</td>
                		<td>
                			Item13
                		</td>
                		<td>
                			Addidas Shoe
                		</td>
                		<td>
                			Available
                		</td>
                		<td>
                			200 MMK
                		</td>
                		<td>
                			23 pcs
                		</td>
                		<td>
                			<div class="dropdown">
							  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
							    Menu
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="{{URL::to('admin/product/detail')}}">View Detail</a>
							    <a class="dropdown-item" href="#">Update</a>
							    <a class="dropdown-item" href="#">Delete</a>
							  </div>
							</div>
                		</td>
                	</tr>
                	<tr>
                		<td>
                			<img src="https://azcd.harveynorman.com.au/media/catalog/product/cache/21/image/992x558/9df78eab33525d08d6e5fb8d27136e95/a/k/ak3219nf.jpg" width="130px;">
                		</td>
                		<td>
                			Item2233
                		</td>
                		<td>
                			Mi TV
                		</td>
                		<td>
                			Not Available
                		</td>
                		<td>
                			600 MMK
                		</td>
                		<td>
                			210 pecs 
                		</td>
                		<td>
                			<div class="dropdown">
							  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
							    Menu
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="{{URL::to('admin/product/detail')}}">View Detail</a>
							    <a class="dropdown-item" href="#">Update</a>
							    <a class="dropdown-item" href="#">Delete</a>
							  </div>
							</div>
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

@endsection