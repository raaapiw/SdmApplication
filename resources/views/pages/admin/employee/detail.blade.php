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
                        <br>
                        <br>
                        <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="card-body">
                                    <h2><b> Data Karyawan</b></h2>
                                    <form class=" m-t-40">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <h4><b>Data Diri</b></h4>
                                                    <hr>
                                                    <label><b>Nama</b></label>
                                                    <input disabled type="text" name="name" required class="form-control form-control-line" value="{{ isset($employee) ? $employee->name : ''}}" placeholder="{{ isset($employee) ? $employee->name : ''}}"/>
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class = "col-md-1"></div>
                                                <div class="col-md-4">
                                                    <br>
                                                    <br>
                                                    <label><b>No. Rekening</b></label>
                                                    <input disabled type="text" name="norek" required  class="form-control" value="{{ isset($employee) ? $employee->norek : ''}}" placeholder="{{ isset($employee) ? $employee->norek : ''}}"/>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label><b>No KTP</b></label>
                                                    <input disabled type="text" name="no_ktp" required  class="form-control" value="{{ isset($employee) ? $employee->no_ktp : ''}}" placeholder="{{ isset($employee) ? $employee->no_ktp : ''}}"/>
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class = "col-md-1"></div>
                                                <div class="col-md-4">
                                                    <label><b>Payroll</b></label>
                                                    <input disabled type="text" name="payroll" required class="form-control" value="{{ isset($employee) ? $employee->payroll : ''}}" placeholder="{{ isset($employee) ? $employee->payroll : ''}}"/>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label><b>NIK</b></label>
                                                    <input disabled type="text" name="nik" required class="form-control" value="{{ isset($employee) ? $employee->nik : ''}}" placeholder="{{ isset($employee) ? $employee->nik : ''}}"/>
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class = "col-md-1"></div>
                                                <div class="col-md-4">
                                                    <label><b>Nama Bank</b></label>
                                                    <input disabled type="text" name="nama_bank" required  class="form-control" value="{{ isset($employee) ? $employee->nama_bank : ''}}" placeholder="{{ isset($employee) ? $employee->nama_bank : ''}}"/>
                                                    <br>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label><b>NPWP</b></label>
                                                    <input disabled type="text" name="npwp" required  class="form-control" value="{{ isset($employee) ? $employee->npwp : ''}}" placeholder="{{ isset($employee) ? $employee->npwp : ''}}"/>
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class = "col-md-1"></div>
                                                <div class="col-md-4">
                                                    <label><b>Cabang Bank</b></label>
                                                    <input disabled type="text" name="cabang_bank" required  class="form-control" value="{{ isset($employee) ? $employee->cabang_bank : ''}}" placeholder="{{ isset($employee) ? $employee->cabang_bank : ''}}"/>
                                                    <br>
                                                    <br>
                                                </div>
                                            </div>      
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label><b>Alamat</b></label>
                                                    <input disabled type="text" name="address" required class="form-control" value="{{ isset($employee) ? $employee->address : ''}}" placeholder="{{ isset($employee) ? $employee->address : ''}}"/>
                                                    <br>
                                                </div>
                                                <div class = "col-md-1"></div>
                                                <div class="col-md-4">
                                                    <h4><b>Data Pendidikan</b></h4>
                                                    <hr>
                                                    <label><b>Asal Sekolah</b></label>
                                                    <input disabled type="text" name="graduated_from" required class="form-control" value="{{ isset($employee) ? $employee->graduated_from : ''}}" placeholder="{{ isset($employee) ? $employee->graduated_from : ''}}"/>
                                                    <br>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label><b>No. Perjanjian</b></label>
                                                    <input disabled type="text" name="no_perjanjian" required  class="form-control" value="{{ isset($employee) ? $employee->no_perjanjian : ''}}" placeholder="{{ isset($employee) ? $employee->no_perjanjian : ''}}"/>
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class = "col-md-1"></div>
                                                <div class="col-md-4">
                                                    <br>
                                                    <label><b>Pendidikan Terakhir</b></label>
                                                    <input disabled type="text" name="degree" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                                    <br>
                                                    <br> 
                                                </div>
                                            </div>                                
                                            <label><b>BPJS Pensiun</b></label>
                                            <input disabled type="text" name="bpjs_pensiun" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_pensiun : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_pensiun : ''}}"/>
                                            <br>
                                            <br>
                                            <label><b>BPJS Kesehatan</b></label>
                                            <input disabled type="text" name="bpjs_kes" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_kes : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_kes : ''}}"/>
                                            <br>
                                            <br>
                                            <label><b>Agama</b></label>
                                            <input disabled type="text" name="religion" required  class="form-control" value="{{ isset($employee) ? $employee->religion : ''}}" placeholder="{{ isset($employee) ? $employee->religion : ''}}"/>
                                            <br>                           
                                            <br>
                                            <label><b>Wilayah</b></label>
                                            <input disabled type="text" name="wilayah" required  class="form-control" value="{{ isset($employee) ? $employee->wilayah : ''}}" placeholder="{{ isset($employee) ? $employee->wilayah : ''}}"/>
                                            <br>
                                            <br>
                                            <label><b>Jabatan</b></label>
                                            <input disabled type="text" name="jabatan" required  class="form-control" value="{{ isset($employee) ? $employee->jabatan : ''}}" placeholder="{{ isset($employee) ? $employee->jabatan : ''}}"/>
                                            <br>
                                            <br>
                                            </div>
                                    </form>
                                </div>
                        </div>
                        <!--second tab-->
                        <div class="tab-pane" id="family" role="tabpanel">
                            <div class="card-body">
                                <h3>Data Keluarga Karyawan</h3>
                                <div class="form-group">
                                    <label>Nama Istri/Suami</label>
                                    <input disabled type="text" name="istri_suami" required class="form-control" value="{{ isset($employee) ? $employee->istri_suami : ''}}" placeholder="{{ isset($employee) ? $employee->istri_suami : ''}}"/>
                                    <br>
                                    <label>Nama Anak Ke-1</label>
                                    <input disabled type="text" name="anak_1" required class="form-control" value="{{ isset($employee) ? $employee->anak_1 : ''}}" placeholder="{{ isset($employee) ? $employee->anak_1 : ''}}"/>
                                    <br>
                                    <label>Nama Anak Ke-2</label>
                                    <input disabled type="text" name="anak_2" required class="form-control" value="{{ isset($employee) ? $employee->anak_2 : ''}}" placeholder="{{ isset($employee) ? $employee->anak_2 : ''}}"/>
                                    <br>
                                    <label>Nama Anak Ke-3</label>
                                    <input disabled type="text" name="anak_3" required class="form-control" value="{{ isset($employee) ? $employee->anak_3 : ''}}" placeholder="{{ isset($employee) ? $employee->anak_3 : ''}}"/>
                                    <br>
                                    <label>BPJS Kesehatan Istri/Suami</label>
                                    <input disabled type="text" name="bpjs_kes_istri_suami" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_istri_suami : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_istri_suami : ''}}"/>
                                    <br>
                                    <label>BPJS Kesehatan Anak Ke-1</label>
                                    <input disabled type="text" name="bpjs_kes_anak1" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_kes_anak1 : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_kes_anak1 : ''}}"/>
                                    <br>
                                    <label>BPJS Kesehatan Anak Ke-2</label>
                                    <input disabled type="text" name="bpjs_kes_anak2" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_kes_anak2 : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_kes_anak2 : ''}}"/>
                                    <br>
                                    <label>BPJS Kesehatan Anak Ke-3</label>
                                    <input disabled type="text" name="bpjs_kes_anak3" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_kes_anak3 : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_kes_anak3 : ''}}"/>
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
                                            <th><center>Print</center></th>
                                            <th><center>Edit</center></th>
                                        </tr>
                                    </thead>                    
                                    @foreach($contract as $row)
                                        <tbody>
                                            <tr>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->start_date}}</td>
                                                <td>{{$row->end_date}}</td>
                                                <td><center><a target=__blank href="{{ route('admin.contract.print', $row->id) }}"><span><i class="fa fa-print"></i></span></a></center></td>
                                                <td><center><a href="{{ route('admin.contract.edit', $row->id) }}"><span><i class="fa fa-pencil"></i></span></a></center></td>  
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
                                                <td>{{$row->theme}}</td>
                                                <td>{{$row->penyelenggara}}</td>
                                                <td>{{$row->jadwal}}</td>
                                                <td>{{$row->no_sertifikat}}</td>
                                                <td>{{$row->biaya}}</td>
                                            <td><a href="{{ route('admin.training.edit', $row->id)}}"><span><i class="fa fa-pencil"></i></span></a></td>
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