@extends('layouts.app', ['activePage' => 'wallet', 'titlePage' => __('Wallet Info')])
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
		<div class="col-sm-12 col-lg-12 col-md-12">
			
	
		<div class="row">
			<div class="col-sm-8 col-lg-8 col-md-8">
				<div class="card">
				<div class="card-header card-header-primary">
					<p class="card-title">Wallet Info</p>
				</div>
				<div class="card-body">
					<form>
					<div class="row">
                  <label class="col-sm-3 col-form-label mt-2">{{ __('Balance Amount') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('balance_amount') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('balance_amount') ? ' is-invalid' : '' }}" name="balance_amount" id="input-name" type="text" placeholder="{{ __('Balance Amount') }}"  required="true" aria-required="true"/>
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label mt-2">{{ __('Account Code') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('acc_code') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('acc_code') ? ' is-invalid' : '' }}" name="balance_amount" id="input-name" type="text" placeholder="{{ __('xxxx-xxxx-xxxxxxxxxx') }}"  required="true" aria-required="true"/>
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label mt-2">{{ __('Account Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('acc_code') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('acc_code') ? ' is-invalid' : '' }}" name="balance_amount" id="input-name" type="text" placeholder="{{ __('Account Name') }}"  required="true" aria-required="true"/>
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label mt-2">{{ __('N.R.C No.') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('acc_code') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('acc_code') ? ' is-invalid' : '' }}" name="balance_amount" id="input-name" type="text" placeholder="{{ __('N.R.C No.') }}"  required="true" aria-required="true"/>
                      
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                	<div class="col-sm-12 col-lg-12 col-md-12 text-right">
	                	<a href="#" class="btn btn-success ">Transfer</a>
	                	<a href="#" class="btn btn-primary ">Make Payment</a>		
                	</div>

                </div>
					</form>
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

      </div>
            </div>
            
          </div>
        </div>
	</div>
	<div class="col-sm-12 col-lg-12 col-md-12">
		<div class="card">
			<div class="card-header card-header-primary">
				<p class="card-title">Recent Transaction</p>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Transaction_ID</th>
								<th>Transaction_Type</th>
								<th>Send</th>
								<th>Particular</th>
								<th>Amount</th>
								<th>Register Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>243249067</td>
								<td>Transfer</td>
								<td>KBZ</td>
								<td>Payment For loan balance</td>
								<td>100,000 MMK</td>
								<td>13 / 7 / 2019</td>

							</tr>
								<td>242249067</td>
								<td>Transfer</td>
								<td>APEX</td>
								<td>Payment For Credit balance</td>
								<td>100,000 MMK</td>
								<td>13 / 7 / 2019</td>

							</tr>
							</tr>
								<td>242249067</td>
								<td>Payment</td>
								<td>CB Bank</td>
								<td>Payment For Entertainment balance</td>
								<td>100,000 MMK</td>
								<td>13 / 7 / 2019</td>

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