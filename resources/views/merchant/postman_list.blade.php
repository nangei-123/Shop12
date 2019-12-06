  @extends('layouts.app', ['activePage' => 'postman_list', 'titlePage' => __('Postman List')])

  @section('content')
  <style>
.checked {
  color: orange;
  fill-color: orange;
}
.unchecked {
  color: red;
  fill-color: red;
}


.zoom:hover {
  transform: scale(2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
  <div class="content">
  	<div class="container-fluid">
  			  <div class="col-sm-12 col-lg-12 col-md-12">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary">
				<p class="card-title">Payment Process Transaction Transaction List</p>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead class="thead-dark">
						<tr>
							<th>POID</th>
							<th>Name</th>
							<th>Location</th>
							<th>City</th>
							<th>Phone</th>
							<th>Delivery Fee</th>
							<th>Awards</th>
							<th>Active</th>
							<th>Status</th>
							<th>Image</th>

						</tr>
						</thead>
						<tbody>
							<tr>
								<td>POID122</td>
								<td>Mg Mg </td>
								<td>No.68, BarKaNyar St,Hlaing</td>
								<td>Yangon</td>
								<td>0909090909</td>
								<td>2,000 MMK</td>
								<td>-</td>
								<td>Online</td>
								<td style="text-align: center;"><span class="fa fa-circle checked"></td>
								<td style="text-align: center;"><div class="zoom"><img src="{{asset('/postman/man1.jpg')}}" width="170px;"></div></td>
							</tr>
							<tr>
								<td>POID124</td>
								<td>Ko Ko </td>
								<td>No.22, Innwa St,South</td>
								<td>Yangon</td>
								<td>0909090909</td>
								<td>2,500 MMK</td>
								<td>-</td>
								<td>Online</td>
								<td style="text-align: center;"><span class="fa fa-circle checked"></td>
								<td style="text-align: center;"><div class="zoom"><img src="{{asset('/postman/man2.jpg')}}" width="170px;"></div></td>
							</tr>
							<tr>
								<td>POID129</td>
								<td>Ko Ko </td>
								<td>No.25, Innwa St,South</td>
								<td>Mandalay</td>
								<td>09123212332</td>
								<td>1,500 MMK</td>
								<td>-</td>
								<td>Online</td>
								<td style="text-align: center;"><span class="fa fa-circle checked"></td>
								<td style="text-align: center;"><div class="zoom"><img src="{{asset('/postman/man3.jpg')}}" width="170px;"></div></td>
							</tr>
							<tr>
								<td>POID133</td>
								<td>Kyaw Kyaw </td>
								<td>No.77, Anaw ya htar St,Lathar</td>
								<td>Mandalay</td>
								<td>09123212332</td>
								<td>3,500 MMK</td>
								<td>-</td>
								<td>Online</td>
								<td style="text-align: center;"><span class="fa fa-circle checked"></td>
								<td style="text-align: center;"><div class="zoom"><img src="{{asset('/postman/man4.jpg')}}" width="170px;"></div></td>
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