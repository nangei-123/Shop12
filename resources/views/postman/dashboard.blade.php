<?php $user_name=Auth::user()->name; ?>
@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __($user_name.' Dashboard')])

@section('content')
<style type="text/css">
	#desc_text{
      line-height: 15px;
    }
    #profile{
      border-radius: 50%;
    }
    .mt-0{
      margin-top: %;
    }
    <style type="text/css">

  .checked {
  color: orange;

}
</style>
<div class="content">

<div class="container-fluid">
	<div class="row">
<div class="col-sm-8 col-lg-8 col-md-8">
	

	<div class="row">
			
    <div class="card col-lg-12 col-sm-12 col-md-12" style="background-color: #ffffff;margin-left: %">
      <div class="d-flex flex-row">
          <div class="p-0 w-25">
              <img src="https://c1.staticflickr.com/3/2862/12328317524_18e52b5972_k.jpg" style="height: 100px;" class="rounded-circle img-thumbnail mt-2" />
            
          </div>
          <div class="pl-3 pt-2 pr-2 pb-2 w-75 text-left">
              <h4 class="text-primary">Account Name : Leanne Boulton</h4>
              <h5 class="text-info">Account ID:00023124</h5>
              <ul class="m-0 float-left" style="list-style: none; margin:0; padding: 0">
                <li>  <span>Rating:</span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span></li>

              </ul>
           
        </div>
      </div>
	</div>

	<div class="col-sm-12 col-lg-12 col-md-12 mt-0">

		<div class="row">
			<div class="card">
				<div class="card-header card-header-primary">
					<p class="card-title">Accepted Order List</p>
				</div>
				<div class="card-body">
					<div class="table table-responsive">
						<table class="table">
							<thead class="thead-light">
								<tr>
									<th>OrderID</th>
									<th>Merchant Name</th>
									<th>Parcel Qty</th>
									<th>Parcel Cost</th>
									<th>Pick Location</th>
									<th>Drop Location</th>
									<th>Register Date</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>O12</td>
									<td>Mg Mg</td>
									<td>3 pcs</td>
									<td>2500 MMK</td>
									<td>No.8, Sein Chal St, NorthOkkalapa, Yangon</td>
									<td>No.78, 15 St, Latha, Yangon</td>
									<td>13 / 7/ 2020</td>
									<td>waiting</td>
								</tr>
								<tr>
									<td>O12</td>
									<td>Mg Mg</td>
									<td>3 pcs</td>
									<td>2500 MMK</td>
									<td>No.8, Sein Chal St, NorthOkkalapa, Yangon</td>
									<td>No.78, 15 St, Latha, Yangon</td>
									<td>13 / 7/ 2020</td>
									<td>waiting</td>
								</tr>
								<tr>
									<td>O12</td>
									<td>Mg Mg</td>
									<td>3 pcs</td>
									<td>2500 MMK</td>
									<td>No.8, Sein Chal St, NorthOkkalapa, Yangon</td>
									<td>No.78, 15 St, Latha, Yangon</td>
									<td>13 / 7/ 2020</td>
									<td>waiting</td>
								</tr>
								<tr>
									<td>O12</td>
									<td>Mg Mg</td>
									<td>3 pcs</td>
									<td>2500 MMK</td>
									<td>No.8, Sein Chal St, NorthOkkalapa, Yangon</td>
									<td>No.78, 15 St, Latha, Yangon</td>
									<td>13 / 7/ 2020</td>
									<td>waiting</td>
								</tr>
								<tr>
									<td>O12</td>
									<td>Mg Mg</td>
									<td>3 pcs</td>
									<td>2500 MMK</td>
									<td>No.8, Sein Chal St, NorthOkkalapa, Yangon</td>
									<td>No.78, 15 St, Latha, Yangon</td>
									<td>13 / 7/ 2020</td>
									<td>waiting</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="card">
				<div class="card-header card-header-primary">
					<p class="card-title">Regional Distrubtion Price List</p>
				</div>
				<div class="card-body">
					<div class="table table-responsive">
						<table class="table">
							<thead class="thead-light">
									<tr>
										<th>From Location</th>
										<th>To Location</th>
										<th>Price</th>
										<th>Discount</th>
										<th>Carry Weight</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Yangon, NorthOkkalapa</td>
										<td>Yangon, Mingalardon</td>
										<td>-</td>
										<td>1,000 MMK</td>
										<td>10 KG</td>
										<td>
								<div class="dropdown">
									  <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Action
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <a class="dropdown-item" href="#">Edit</a>
									    <a class="dropdown-item" href="#">Delete</a>
									  </div>
									</div>												
										</td>
									</tr>
									<tr>
										<td>Yangon, NorthOkkalapa</td>
										<td>Yangon, SouthOkkalapa</td>
										<td> - </td>
										<td>1,000 MMK</td>
										<td>10 KG</td>
										<td>
								<div class="dropdown">
									  <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Action
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <a class="dropdown-item" href="#">Edit</a>
									    <a class="dropdown-item" href="#">Delete</a>
									  </div>
									</div>												
										</td>
									</tr>
									<tr>
										<td>Yangon, NorthOkkalapa</td>
										<td>Yangon, ShwepoukKan</td>
										<td> - </td>
										<td>1,000 MMK</td>
										<td>10 KG</td>
										<td>
								<div class="dropdown">
									  <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Action
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <a class="dropdown-item" href="#">Edit</a>
									    <a class="dropdown-item" href="#">Delete</a>
									  </div>
									</div>												
										</td>
									</tr>
									<tr>
										<td>Yangon, NorthOkkalapa</td>
										<td>Yangon, Latha</td>
										<td> - </td>
										<td>2,500 MMK</td>
										<td>10 KG</td>
										<td>
								<div class="dropdown">
									  <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Action
									  </button>
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <a class="dropdown-item" href="#">Edit</a>
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

	
</div>
@endsection