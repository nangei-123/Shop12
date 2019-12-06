  @extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])


  @section('content')
  <div class="content">
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-4">  
            <div class="card">
                <div class="card-header card-header-primary">
                 
                        <h4 class="card-title">Select City</h4>
                  
                 </div>
                     <div class="card-body">
                         <ul class="list-group" data-tabs="tabs"/>
                         <?php $top=DB::select("SELECT * FROM city order by id ASC LIMIT 1"); ?>
                         @foreach($top as $row)
                     <li class="list-group-item">
                         <a href="#{{$row->id}}" data-toggle="tab">{{$row->name}}</a> 
                      </li>
                        @endforeach
                          <?php $result=DB::select("SELECT * FROM city order by id ASC LIMIT 1,20"); ?>
                          @foreach($result as $rows)
                     <li class="list-group-item">
                         <a href="#{{$rows->id}}" data-toggle="tab">{{$rows->name}}</a> 
                      </li>
                        @endforeach
                        </ul>
                     </div>
                </div>
             </div>
             <div class="col-md-4 col-lg-4 col-sm-4" >  
            <div class="card">
                <div class="card-header card-header-primary">
                 
                        <h4 class="card-title">Select Townships</h4>
                  
                 </div>
                     <div class="card-body" style="max-height: 100% !important;">
                          <div class="tab-content">
                            
                            <div class="tab-pane active text-center mt-4" id="township">
                                <img src="/material/img/point.svg">
                               <p>Please Select City First</p>
                            </div>
                            <?php $city=DB::select("SELECT * FROM city"); ?>
                            @foreach($city as $row)
                            <?php $city_id=$row->id; ?>
                            <div class="tab-pane" id="{{$row->id}}">
                                <ul class="list-group">
                                    <?php $townships=DB::select("SELECT * FROM townships where city_id='$city_id'"); ?>
                                    @foreach($townships  as $row)
                                    <li class="list-group-item"><div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                              {{$row->name}}
                            </label>

                          </div>

                      </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach

                        </div>
                     </div>
                </div>
             </div>
        </div>
    </div>
</div>

  @endsection