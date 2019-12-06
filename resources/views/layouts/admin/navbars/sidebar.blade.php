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
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ URL::to('admin') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
       <li class="nav-item{{ $activePage == 'order' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('order.history') }}">
                <i class="material-icons">local_shipping</i>
                  <p>{{ __('Order History') }}</p>
              </a>
            </li>
             <li class="nav-item{{ $activePage == 'order_list' ? ' active' : '' }}">
              <a class="nav-link" href="{{ URL::to('admin/order/list') }}">
                <i class="material-icons">local_shipping</i>
                  <p>{{ __('Order List') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'postman_list' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('postman.list') }}">
                <i class="material-icons">people</i>
                  <p>{{ __('Postman List') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'merchant_list' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('merchant.list') }}">
                <i class="material-icons">card_travel</i>
                  <p>{{ __('Merchant List') }}</p>
              </a>
            </li><li class="nav-item{{ $activePage == 'product_list' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('product.list') }}">
                <i class="material-icons">devices</i>
                  <p>{{ __('Product List') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'invetory' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('invetory') }}">
               <i><img src="{{asset('svg/warehouse.svg')}}" width="20px;"></i>
                  <p>{{ __('Invetory') }}</p>
              </a>
            </li>
      
      <!-- <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('upgrade') }}">
          <i class="material-icons">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>