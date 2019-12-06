@extends('layouts.admin.app',['activePage'=>'merchant_list','titlePage'=>'Tables'])
@section('content')
<style type="text/css">
  table,thead,small{
    font-size: 12px;
  }
</style>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Mechant List (Member List)</h4>
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    <small>Account No.</small>
                  </th>
                  <th>
                    <small>Name</small>
                  </th>
                  <th>
                    <small>Email</small>
                  </th>
                  <th>
                    <small>Phone No.</small>
                  </th>
                  <th>
                    <small>N.R.C No.</small>
                  </th>
                  <th>
                    <small>Address</small>
                  </th>
                  <th>
                   <small>City</small>
                  </th>
                  <th>
                    <small>Township</small>
                  </th>
                  <th>
                    <small>Register Date</small>
                    <small class="text-muted">mm/dd/yy</small>
                </th>
                  <th>
                    <small>Expire Date</small>
                    <small class="text-muted">mm/dd/yy</small>
                  </th>
                </thead>
                <tbody>
                  
                  <tr>
                    <td>
                      00002
                    </td>
                    <td>
                      <a href="{{URL::to('admin/postman/profile')}}"><u> Minerva Hooper</u></a>
                    </td>
                    <td>
                     Sinaai-Waas@gmail.com
                    </td>
                    <td>
                      091234555
                    </td>
                    <td>
                      8/MMN(N)111111
                    </td>
                    <td >
                    No.432,Crystal Str
                  </td>
                    <td >
                      Yangon
                    </td>
                    <td >
                      Tamwe
                    </td>
                    <td>
                      11/11/19
                    </td>
                    <td>
                      11/12/19
                    </td>
                  </tr>
                  <tr>
                    <td>
                     00003
                    </td>
                    <td>
                     <a href="{{URL::to('admin/postman/profile')}}"><u> Sage Rodriguez</u></a>
                    </td>
                    <td>
                       Baileux@gmail.com
                    </td>
                    <td>
                     09865467
                    </td>
                    <td>
                     13/ABC(N)232778
                    </td>
                    <td >
                    No.432,Crystal Str
                    </td>
                    <td >
                      Yangon
                    </td>
                    <td >
                      Tamwe
                    </td>
                    <td>
                      11/11/19
                    </td>
                    <td>
                      11/12/19
                    </td>
                  </tr>
                  <tr>
                    <td>
             00004
                    </td>
                    <td>
                      <a href="{{URL::to('admin/postman/profile')}}"><u>Philip Chaney</u></a>
                    </td>
                    <td>
                     Overland-Park@gmail.com
                    </td>
                    <td>
                      0956565656
                    </td>
                    <td>
                      11/UKM(N)888779
                    </td>
                    <td >
                    No.432,Crystal Str
                    </td>
                    <td >
                      Yangon
                    </td>
                    <td >
                      Tamwe
                    </td>
                    <td>
                      11/11/19
                    </td>
                    <td>
                      11/12/19
                    </td>

                  </tr>
                  <tr>
                    <td>
                       00005
                    </td>
                    <td>
                    <a href="{{URL::to('admin/postman/profile')}}"><u>  Doris Greene</u></a>
                    </td>
                    <td>
                      Feldkirchen@gmail.com
                    </td>
                    <td>
                      0942424242
                    </td>
                    <td>
                       11/UKM(N)888779
                    </td>
                    <td >
                    No.432,Crystal Str
                    </td>
                    <td >
                      Yangon
                    </td>
                    <td >
                      Tamwe
                    </td>
                    <td>
                      11/11/19
                    </td>
                    <td>
                      11/12/19
                    </td>
                  </tr>
                  <tr>
                    <td>
                      00006
                    </td>
                    <td>
                     <a href="{{URL::to('admin/postman/profile')}}"><u> Dakota Rice</u></a>
                    </td>
                    <td>
                      Niger@gmail.com
                    </td>
                    <td>
                     09123456
                    </td>
                    <td>
                      12/UKM(N)212121
                    </td>
                    <td >
                    No.432,Crystal Str
                    </td>
                    <td >
                      Yangon
                    </td>
                    <td >
                      Tamwe
                    </td>
                    <td>
                      11/11/19
                    </td>
                    <td>
                      11/12/19
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
