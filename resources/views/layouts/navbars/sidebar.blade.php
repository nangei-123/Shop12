<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('APEX ONLINE DELIVERY') }}
    </a>
  </div>
@if(Auth::user()->type==1)
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ URL::to('my_dashboard') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'wallet' ? ' active' : '' }}">
        <a class="nav-link" href="{{ URL::to('wallet') }}">
          <i class="material-icons">account_balance_wallet</i>
            <p>{{ __('Wallet Info') }}</p>
        </a>
      </li>
      <!-- Parcel Management -->
       
      <!-- End Parcel Management -->
    </ul>
  </div>
@else
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ URL::to('my_dashboard') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
       <li class="nav-item{{ $activePage == 'payment_transaction' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('payment.transaction') }}">
          <i><img src="{{asset('svg/transaction.svg')}}" width="30px;" /></i>
            <p style="font-size: 12px;">{{ __('Payment Process Transaction') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'postman_list' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('merchant_dash.postman.list') }}">
          <i><img src="{{asset('svg/box.svg')}}" width="30px;" /></i>
            <p>{{ __('Postman List') }}</p>
        </a>
      </li>
       <li class="nav-item{{ $activePage == 'parcel' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('parcel.index') }}">
          <i class="material-icons">card_giftcard</i>
            <p>{{ __('Parcel Manage') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'parcel-create' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('parcel.create') }}">
          <i class="material-icons">add</i>
            <p>{{ __('Parcel Manage') }}</p>
        </a>
      </li>
    </ul>
  </div>
@endif
</div>