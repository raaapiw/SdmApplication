@extends('layouts.app')

@section('style')
<link href="{{ asset('material/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>

{{-- <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css"> --}}
@endsection

@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Data Master</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Data Master</li>
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
                    <table id="myTable" class="display table table-bordered table-striped nowrap">
                        <thead>
                            <tr>
                                <th rowspan="2" style="width:5%" class="text-center">No</th>
                                <th rowspan="2" class="text-center">Payroll</th>
                                <th rowspan="2" class="text-center">NIK</th>
                                <th rowspan="2" class="text-center">Nama</th>
                                <th rowspan="2" class="text-center">Jabatan</th>
                                <th rowspan="2" class="text-center">Wilayah</th>
                                <th colspan="2" class="text-center">Kontrak I</th>
                                <th colspan="2" class="text-center">Kontrak II</th>
                                <th colspan="2" class="text-center">Kontrak III</th>
                                <th colspan="2" class="text-center">Kontrak IV</th>
                                <th colspan="2" class="text-center">Kontrak V</th>
                                <th colspan="2" class="text-center">Kontrak VI</th>
                                <th colspan="2" class="text-center">Kontrak VII</th>
                                <th colspan="2" class="text-center">Kontrak VIII</th>
                                <th colspan="2" class="text-center">Kontrak IX</th>
                                <th colspan="2" class="text-center">Kontrak X</th>
                                <th colspan="2" class="text-center">Kontrak XI</th>
                                <th colspan="2" class="text-center">Kontrak XII</th>
                                <th colspan="2" class="text-center">Kontrak XIII</th>
                                <th colspan="2" class="text-center">Kontrak XIV</th>
                                <th colspan="2" class="text-center">Kontrak XV</th>
                                <th rowspan="2" class="text-center">BPJS Kesehatan</th>
                                <th rowspan="2" class="text-center">BPJS Ketenagakerjaan</th>
                                <th rowspan="2" class="text-center">No. Rekening</th>
                                <th rowspan="2" class="text-center">Nama Bank</th>
                                <th rowspan="2" class="text-center">Cabang Bank</th>
                                <th rowspan="2" class="text-center">Pendidikan</th>
                                <th rowspan="2" class="text-center">Jurusan</th>
                                <th rowspan="2" class="text-center">Almamater</th>
                                <th rowspan="2" class="text-center">Tgl. Ijazah</th>
                                <th rowspan="2" class="text-center">NPWP</th>
                                <th rowspan="2" class="text-center">Sex</th>
                                <th rowspan="2" class="text-center">KTP</th>
                                <th rowspan="2" class="text-center">HP</th>
                                <th rowspan="2" class="text-center">Alamat</th>
                                <th colspan="2" class="text-center">Kelahiran</th>
                                <th rowspan="2" class="text-center">Agama</th>
                                <th colspan="8" class="text-center">Data Keluarga</th>
                                <th rowspan="2" class="text-center">email</th>
                            </tr>
                            <tr>
                                <th class="text-center">Mulai 1</th>
                                <th class="text-center">Berakhir 1</th>
                                <th class="text-center">Mulai 2</th>
                                <th class="text-center">Berakhir 2</th>
                                <th class="text-center">Mulai 3</th>
                                <th class="text-center">Berakhir 3</th>
                                <th class="text-center">Mulai 4</th>
                                <th class="text-center">Berakhir 4</th>
                                <th class="text-center">Mulai 5</th>
                                <th class="text-center">Berakhir 5</th>
                                <th class="text-center">Mulai 6</th>
                                <th class="text-center">Berakhir 6</th>
                                <th class="text-center">Mulai 7</th>
                                <th class="text-center">Berakhir 7</th>
                                <th class="text-center">Mulai 8</th>
                                <th class="text-center">Berakhir 8</th>
                                <th class="text-center">Mulai 9</th>
                                <th class="text-center">Berakhir 9</th>
                                <th class="text-center">Mulai 10</th>
                                <th class="text-center">Berakhir 10</th>     
                                <th class="text-center">Mulai 11</th>
                                <th class="text-center">Berakhir 11</th>   
                                <th class="text-center">Mulai 12</th>
                                <th class="text-center">Berakhir 12</th>   
                                <th class="text-center">Mulai 13</th>
                                <th class="text-center">Berakhir 13</th>   
                                <th class="text-center">Mulai 14</th>
                                <th class="text-center">Berakhir 14</th>   
                                <th class="text-center">Mulai 15</th>
                                <th class="text-center">Berakhir 15</th>    
                                <th class="text-center">Tempat</th>
                                <th class="text-center">Tanggal</th>       
                                <th class="text-center">Nama Istri/Suami</th>
                                <th class="text-center">TTL</th>       
                                <th class="text-center">Nama Anak 1</th>
                                <th class="text-center">TTL</th>       
                                <th class="text-center">Nama Anak 2</th>
                                <th class="text-center">TTL</th>       
                                <th class="text-center">Nama Anak 3</th>
                                <th class="text-center">TTL</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <center>
                                @foreach($employee as $key => $row)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$row->payroll}}</td>
                                        <td>{{$row->nik}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->jabatan}}</td>
                                        <td>{{$row->wilayah}}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>   
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>                           
                                @endforeach
                            </center>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Payroll</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Wilayah</th>
                                <th>Kontrak I</th>
                                <th>Kontrak I</th>
                                <th>Kontrak II</th>
                                <th>Kontrak II</th>
                                <th>Kontrak III</th>
                                <th>Kontrak III</th>
                                <th>Kontrak IV</th>
                                <th>Kontrak IV</th>
                                <th>Kontrak V</th>
                                <th>Kontrak V</th>
                                <th>Kontrak VI</th>
                                <th>Kontrak VI</th>
                                <th>Kontrak VII</th>
                                <th>Kontrak VII</th>
                                <th>Kontrak VIII</th>
                                <th>Kontrak VIII</th>
                                <th>Kontrak IX</th>
                                <th>Kontrak IX</th>
                                <th>Kontrak X</th>
                                <th>Kontrak X</th>
                                <th>Kontrak XI</th>
                                <th>Kontrak XI</th>
                                <th>Kontrak XII</th>
                                <th>Kontrak XII</th>
                                <th>Kontrak XIII</th>
                                <th>Kontrak XIII</th>
                                <th>Kontrak XIV</th>
                                <th>Kontrak XIV</th>
                                <th>Kontrak XV</th>
                                <th>Kontrak XV</th>
                                <th>BPJS KES</th>
                                <th>BPJS TK</th>
                                <th>NOREK</th>
                                <th>Nama Bank</th>
                                <th>Cabang Bank</th>
                                <th>Pendidikan</th>
                                <th>Jurusan</th>
                                <th>Almamater</th>
                                <th>Tgl Ijazah</th>
                                <th>NPWP</th>
                                <th>Sex</th>
                                <th>KTP</th>
                                <th>HP</th>
                                <th>Alamat</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Istri/Suami</th>
                                <th>TTL Istri/Suami</th>
                                <th>Anak ke 1</th>
                                <th>TTL Anak ke 1</th>
                                <th>Anak ke 2</th>
                                <th>TTL Anak ke 2</th>
                                <th>Anak ke 3</th>
                                <th>TTL Anak ke 3</th> 
                                <th>Email</th>                                 
                            </tr>
                        </tfoot>
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
        ],
//   "autoWidth": true  
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

{{-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script> --}}

{{-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}

{{-- <script type="text/javascript" src="/media/js/site.js?_=5e8f232afab336abc1a1b65046a73460"></script>
<script type="text/javascript" src="/media/js/dynamic.php?comments-page=extensions%2Ffixedcolumns%2Fexamples%2Fstyling%2Fbootstrap.html" async></script> --}}
@endsection