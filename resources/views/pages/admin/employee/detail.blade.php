@extends('layouts.app')

@section('styles')
<link href="{{ asset('material/plugins/wizard/steps.css')}}" rel="stylesheet">
<link href="{{ asset('material/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
<link href="{{ asset('material/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@endsection
@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Karyawan Detail</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            
            <li class="breadcrumb-item"><a href="#">Karyawan</a></li>
            <li class="breadcrumb-item active">Karyawan Detail</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body wizard-content">                    
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Data Diri</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#family" role="tab">Data Keluarga</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contract"role="tab">Data Kontrak</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#training" role="tab">Data Training</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="card-body">
                                    <h3>Data Diri Karyawan</h3>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input disabled type="text" name="name" required class="form-control" value="{{ isset($employee) ? $employee->name : ''}}" placeholder="{{ isset($employee) ? $employee->subject : ''}}"/>
                                        <br>
                                        <label>Payroll</label>
                                        <input disabled type="text" name="payroll" required class="form-control" value="{{ isset($employee) ? $employee->name : ''}}" placeholder="{{ isset($employee) ? $employee->subject : ''}}"/>
                                        <br>
                                        <label>NIK</label>
                                        <input disabled type="text" name="nik" required class="form-control" value="{{ isset($employee) ? $employee->nik : ''}}" placeholder="{{ isset($employee) ? $employee->nik : ''}}"/>
                                        <br>
                                        <label>Alamat</label>
                                        <input disabled type="text" name="address" required class="form-control" value="{{ isset($employee) ? $employee->address : ''}}" placeholder="{{ isset($employee) ? $employee->address : ''}}"/>
                                        <br>
                                        <label>Asal Sekolah</label>
                                        <input disabled type="text" name="graduated_from" required class="form-control" value="{{ isset($employee) ? $employee->graduated_from : ''}}" placeholder="{{ isset($employee) ? $employee->graduated_from : ''}}"/>
                                        <br>
                                        <label>Pendidikan Terakhir</label>
                                        <input disabled type="text" name="degree" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>NPWP</label>
                                        <input disabled type="text" name="npwp" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>BPJS Pensiun</label>
                                        <input disabled type="text" name="bpjs_pensiun" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>BPJS Kesehatan</label>
                                        <input disabled type="text" name="bpjs_kes" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>Agama</label>
                                        <input disabled type="text" name="religion" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>No. Rekening</label>
                                        <input disabled type="text" name="norek" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>Nama Bank</label>
                                        <input disabled type="text" name="nama_bank" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>Cabang Bank</label>
                                        <input disabled type="text" name="cabang_bank" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>No KTP</label>
                                        <input disabled type="text" name="no_ktp" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>Wilayah</label>
                                        <input disabled type="text" name="wilayah" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>Jabatan</label>
                                        <input disabled type="text" name="jabatan" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                        <br>
                                        <label>No. Perjanjian</label>
                                        <input disabled type="text" name="no_perjanjian" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                    </div>
                                </div>
                        </div>
                        <!--second tab-->
                        <div class="tab-pane" id="family" role="tabpanel">
                            <div class="card-body">
                                <h3>Data Keluarga Karyawan</h3>
                                <div class="form-group">
                                    <label>Nama Istri/Suami</label>
                                    <input disabled type="text" name="istri_suami" required class="form-control" value="{{ isset($employee) ? $employee->name : ''}}" placeholder="{{ isset($employee) ? $employee->subject : ''}}"/>
                                    <br>
                                    <label>Nama Anak Ke-1</label>
                                    <input disabled type="text" name="anak_1" required class="form-control" value="{{ isset($employee) ? $employee->nik : ''}}" placeholder="{{ isset($employee) ? $employee->nik : ''}}"/>
                                    <br>
                                    <label>Nama Anak Ke-2</label>
                                    <input disabled type="text" name="anak_2" required class="form-control" value="{{ isset($employee) ? $employee->address : ''}}" placeholder="{{ isset($employee) ? $employee->address : ''}}"/>
                                    <br>
                                    <label>Nama Anak Ke-3</label>
                                    <input disabled type="text" name="anak_3" required class="form-control" value="{{ isset($employee) ? $employee->graduated_from : ''}}" placeholder="{{ isset($employee) ? $employee->graduated_from : ''}}"/>
                                    <br>
                                    <label>BPJS Kesehatan Istri/Suami</label>
                                    <input disabled type="text" name="bpjs_kes_istri_suami" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                    <br>
                                    <label>BPJS Kesehatan Anak Ke-1</label>
                                    <input disabled type="text" name="bpjs_kes_anak1" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                    <br>
                                    <label>BPJS Kesehatan Anak Ke-2</label>
                                    <input disabled type="text" name="bpjs_kes_anak2" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                    <br>
                                    <label>BPJS Kesehatan Anak Ke-3</label>
                                    <input disabled type="text" name="bpjs_kes_anak3" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="contract" role="tabpanel">
                            <div class="card-body">
                                <br>
                                <a href="{{route('admin.contract.form', $employee->id)}}">
                                    <button type="button" class="btn btn-success" value="upload"><i class="fa fa-plus"></i> Tambah Kontrak</button>
                                </a>
                                <br>
                                <br>
                                <br>
                                <h3>Kontrak History</h3>
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Kontrak</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Berakhir</th>
                                            <th>Print</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>                    
                                    @foreach($contract as $row)
                                        <tbody>
                                            <tr>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->start_date}}</td>
                                                <td>{{$row->end_date}}</td>
                                                <td><a target=__blank href="{{ route('admin.contract.print', $row->id) }}"><span><i class="fa fa-pencil"></i></span></a></td>
                                                <td><a href="{{ route('admin.contract.edit', $row->id) }}"><span><i class="fa fa-pencil"></i></span></a></td>  
                                            </tr>
                                        </tbody>                        
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="training" role="tabpanel">
                            <div class="card-body">
                                <br>
                                <a href="{{route('admin.training.form', $employee->id)}}">
                                <button type="button" class="btn btn-success" value="upload"><i class="fa fa-plus"></i> Tambah Training</button>
                                </a>
                                <br>
                                <br>
                                <br>
                                <label><h3>Training History</h3></label>
                                <table id="myTable2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tema Training</th>
                                            <th>Penyeenggara</th>
                                            <th>Jadwal</th>
                                            <th>No Sertifikat</th>
                                            <th>Biaya</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    @foreach($training as $row)
                                        <tbody>
                                            <tr>
                                                <td>cau</td>
                                                <td>{{$row->penyelenggara}}</td>
                                                <td>{{$row->jadwal}}</td>
                                                <td>{{$row->no_sertifikat}}</td>
                                                <td>{{$row->biaya}}</td>
                                                <td>#</td>
                                                <td>#</td>
                                            </tr>  
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>    
                
                <div  class="col-md-3">
                        <a class="btn btn-inverse btn-close" href="{{ url()->previous() }}">Kembali</a>
                    </div>            
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('material/plugins/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('material/plugins/wizard/jquery.steps.min.js')}}"></script>
<script src="{{ asset('material/plugins/wizard/jquery.validate.min.js')}}"></script>
<script src="{{ asset('material/plugins/wizard/steps.js')}}"></script>
<script src="{{ asset('material/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('material/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
<script src="{{ asset('material/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script>$('#myTable').DataTable({
        "order": [[ 1, "DESC" ]]
    });</script>
<script>$('#myTable2').DataTable({
        "order": [[ 1, "DESC" ]]
    });</script>
  
@endsection