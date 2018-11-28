@extends('layouts.app')

@section('style')
<link href="{{ asset('material/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">List Kontrak</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">List Kontrak</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="display table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th style="width:50%"><center>Jenis Kontrak</center></th>
                                <th><center>Jabatan</center></th>
                                <th><center>Pendidikan</center></th>
                                <th><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($defaultContract as $key=>$row)
                                <tr>
                                    <td><center>{{$key+1}}</center></td>
                                    <td><center>{{ $row->name }}</center></td>
                                    <td>{{ $row->jabatan }}</td>
                                    <td>{{ $row->degree }}</td>
                                    <td><center>
                                            <a href="{{ route('admin.employee.detail', $row->id)}}"><span><i class="fa fa-search"></i></span></a>
                                            <a href="#"><span><i class="fa fa-pencil"></i></span></a>
                                        </center>
                                    </td>
                                </tr>                                                            
                            @endforeach
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis kontrak</th>
                                    <th>Jabatan</th>
                                    <th>Pendidikan</th>                                    
                                </tr>
                            </tfoot>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('material/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('material/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{ asset('material/plugins/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
       
    } );
</script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable({
    dom: 'Bfrtip',
    buttons: [
        {
            extend: 'copyHtml5',
            exportOptions: {
                columns: [ 0, ':visible' ]
            }
        },
        {
            extend: 'excelHtml5',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'pdfHtml5',
            exportOptions: {
                columns: [ 0, 1, 2, 5 ]
            }
        },
        'colvis'
    ]       
});
});
</script>
<script>
    $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#myTable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#myTable').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
</script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}
<script type='text/javascript' src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
@endsection