  @extends('layouts.app', ['activePage' => 'payment_transaction', 'titlePage' => __('Payment Transaction')])

  @section('content')
  <div class="content">
  	<div class="container">
  			  <div class="col-sm-12 col-lg-12 col-md-12">
	<div class="row">
		<div class="card">
			<div class="card-header card-header-primary">
				<p class="card-title">Payment Process Transaction Transaction List</p>
			</div>
			<div class="card-body">
				<div class="col-sm-5 col-lg-5 col-md-5">
					<div class="table table-responsive">
						<table class="table table-borderless">
							<tr>
								<td>Account No  </td>
								<td>xxxx-xxxx-xxxxxxxxxxx</td>
							</tr>
							<tr>
								<td>Remaining Balance</td>
								<td>240,000,000 MMK</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead class="thead-dark">
						<tr>
							<th>TID</th>
							<th>Date</th>
							<th>To</th>
							<th>Description</th>
							<th>Amount</th>
							<th>Balance</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>T001023</td>
								<td>13 / 7 / 2019</td>
								<td>Mg Chit Kaung San</td>
								<td>Salary and Others Allowance</td>
								<td>700,000 MMK</td>
								<td>240,000,000 MMK</td>
							</tr>
						</tbody>	
					</table>
				</div>
				<div class="col-sm-12 col-lg-12 col-md-12 text-right">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Make Payment
						</button>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title bg-primary" id="exampleModalLabel" style="color: white;">Make Payment Fom</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
			  <div class="form-group row">
			    <label for="staticEmail" class="col-sm-4 col-form-label">Amount</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control-plaintext" placeholder="____________________________">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="staticEmail" class="col-sm-4 col-form-label">To</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control-plaintext" placeholder="____________________________">
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="staticEmail" class="col-sm-4 col-form-label">Description</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control-plaintext" placeholder="____________________________">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="staticEmail" class="col-sm-4 col-form-label">Voucher No.</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control-plaintext" placeholder="____________________________">
			    </div>
			  </div>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Confirm Make Payment</button>
      </div>
    </div>
  </div>
</div>
  	</div>
  </div>

  @endsection