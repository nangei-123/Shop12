@extends('layouts.admin.app', ['activePage' => 'Product List', 'titlePage' => __('Product List')])
@section('content')
<style type="text/css">
    td.details-control {
    background: url('../resources/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('../resources/details_close.png') no-repeat center center;
}
.dataTables_filter {
  margin-right: 20px !important;
}
.dataTables_length{
	margin-left: 2% !important;
	float:right;
	height: 2.5em;
	
}

</style>

    <script type="text/javascript" src="{{URL::to('jquery.js')}}"></script>
  <script src="{{URL::to('datatable.js')}}"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<div class="content">
	

<div class="container-fluid">
	<div class="card">
    <div class="table mt-4">
        

<table id="example" class="display" >
        <thead>
            <tr>
                <th></th>
                <th>Item Code</th>
                <th>Name</th>
                <th>Stock</th>
                <th>Quantity</th>
            </tr>
        </thead>
       
    </table>
        </div>
        </div>
    
</div>
</div>
    <script type="text/javascript">
        /* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Full name:</td>'+
            '<td>'+d.name+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.extn+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
    '</table>';
}
 
$(document).ready(function() {
    var table = $('#example').DataTable( {
        "ajax": "http://localhost:8000/json",
        "type": "get",
        "crossDomain": true,
        // "bFilter": false,
	   // "bInfo": false,

	   "oLanguage": {
	       "sLengthMenu": "_MENU_",
	    },
        "xhrFields": { "withCredentials": true }, 
         "headers": {
              "accept": "application/json",
              "Access-Control-Allow-Origin":"*"
          },
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "salary" }
        ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );
    </script>
@endsection