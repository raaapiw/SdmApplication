@extends('layouts.app')

@section('style')
<link href="{{ asset('material/plugins/wizard/steps.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('material/plugins/dropify/dist/css/dropify.min.css')}}">
<link href="{{ asset('material/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
<link href="{{ asset('material/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@endsection
@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">{{ isset($employee) ? 'Edit Karyawan': 'Tambah Karyawan Baru'}}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">{{ isset($employee) ? 'Edit Karyawan':'Tambah Karyawan Baru'}}</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body wizard-content">
                 <form action="{{ isset($employee) ? route('admin.employee.update', $employee-> id) : route('admin.employee.store')}}" method="POST" class="tab-wizard wizard-circle">
                    {{-- <input type="hidden" name="registration_id" value="{{ $registration-> id}}"> --}}
                    <!-- Step 1 -->
                    <h6>Data Diri</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline-info">
                                    <div class="card-body">
                                        <h3>Data Diri Karyawan</h3>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="name" required class="form-control" value="{{ isset($employee) ? $employee->name : ''}}" placeholder="{{ isset($employee) ? $employee->name : ''}}"/>
                                            <br>
                                            <label>Payroll</label>
                                            <input type="text" name="payroll" required class="form-control" value="{{ isset($employee) ? $employee->payroll : ''}}" placeholder="{{ isset($employee) ? $employee->payroll : ''}}"/>
                                            <br>
                                            <label>NIK</label>
                                            <input type="text" name="nik" required class="form-control" value="{{ isset($employee) ? $employee->nik : ''}}" placeholder="{{ isset($employee) ? $employee->nik : ''}}"/>
                                            <br>
                                            <label>Alamat</label>
                                            <input type="text" name="address" required class="form-control" value="{{ isset($employee) ? $employee->address : ''}}" placeholder="{{ isset($employee) ? $employee->address : ''}}"/>
                                            <br>
                                            <label>Asal Sekolah</label>
                                            <input type="text" name="graduated_from" required class="form-control" value="{{ isset($employee) ? $employee->graduated_from : ''}}" placeholder="{{ isset($employee) ? $employee->graduated_from : ''}}"/>
                                            <br>
                                            <label>Pendidikan Terakhir</label>
                                            <input type="text" name="degree" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"/>
                                            <br>
                                            <label>NPWP</label>
                                            <input type="text" name="npwp" required  class="form-control" value="{{ isset($employee) ? $employee->npwp : ''}}" placeholder="{{ isset($employee) ? $employee->npwp : ''}}"/>
                                            <br>
                                            <label>BPJS Pensiun</label>
                                            <input type="text" name="bpjs_pensiun" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_pensiun : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_pensiun : ''}}"/>
                                            <br>
                                            <label>BPJS Kesehatan</label>
                                            <input type="text" name="bpjs_kes" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_kes : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_kes : ''}}"/>
                                            <br>
                                            <label>Agama</label>
                                            <input type="text" name="religion" required  class="form-control" value="{{ isset($employee) ? $employee->religion : ''}}" placeholder="{{ isset($employee) ? $employee->religion : ''}}"/>
                                            <br>
                                            <label>No. Rekening</label>
                                            <input type="text" name="norek" required  class="form-control" value="{{ isset($employee) ? $employee->norek : ''}}" placeholder="{{ isset($employee) ? $employee->norek : ''}}"/>
                                            <br>
                                            <label>Nama Bank</label>
                                            <input type="text" name="nama_bank" required  class="form-control" value="{{ isset($employee) ? $employee->nama_bank : ''}}" placeholder="{{ isset($employee) ? $employee->nama_bank : ''}}"/>
                                            <br>
                                            <label>Cabang Bank</label>
                                            <input type="text" name="cabang_bank" required  class="form-control" value="{{ isset($employee) ? $employee->cabang_bank : ''}}" placeholder="{{ isset($employee) ? $employee->cabang_bank : ''}}"/>
                                            <br>
                                            <label>No KTP</label>
                                            <input type="text" name="no_ktp" required  class="form-control" value="{{ isset($employee) ? $employee->no_ktp : ''}}" placeholder="{{ isset($employee) ? $employee->no_ktp : ''}}"/>
                                            <br>
                                            <label>Wilayah</label>
                                            <input type="text" name="wilayah" required  class="form-control" value="{{ isset($employee) ? $employee->wilayah : ''}}" placeholder="{{ isset($employee) ? $employee->wilayah : ''}}"/>
                                            <br>
                                            <label>Jabatan</label>
                                            <input type="text" name="jabatan" required  class="form-control" value="{{ isset($employee) ? $employee->jabatan : ''}}" placeholder="{{ isset($employee) ? $employee->jabatan : ''}}"/>
                                            <br>
                                            <label>No. Perjanjian</label>
                                            <input type="text" name="no_perjanjian" required  class="form-control" value="{{ isset($employee) ? $employee->no_perjanjian : ''}}" placeholder="{{ isset($employee) ? $employee->no_perjanjian : ''}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{-- Data Keluarga --}}
                    <h6>Data Keluarga</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline-info">
                                    <div class="card-body">
                                        <h3>Data Keluarga Karyawan</h3>
                                        <div class="form-group">
                                            <label>Nama Istri/Suami</label>
                                            <input type="text" name="istri_suami" required class="form-control" value="{{ isset($employee) ? $employee->istri_suami : ''}}" placeholder="{{ isset($employee) ? $employee->istri_suami : ''}}"/>
                                            <br>
                                            <label>Nama Anak Ke-1</label>
                                            <input type="text" name="anak_1" required class="form-control" value="{{ isset($employee) ? $employee->anak_1 : ''}}" placeholder="{{ isset($employee) ? $employee->anak_1 : ''}}"/>
                                            <br>
                                            <label>Nama Anak Ke-2</label>
                                            <input type="text" name="anak_2" required class="form-control" value="{{ isset($employee) ? $employee->anak_2 : ''}}" placeholder="{{ isset($employee) ? $employee->anak_2 : ''}}"/>
                                            <br>
                                            <label>Nama Anak Ke-3</label>
                                            <input type="text" name="anak_3" required class="form-control" value="{{ isset($employee) ? $employee->anak_3 : ''}}" placeholder="{{ isset($employee) ? $employee->anak_3 : ''}}"/>
                                            <br>
                                            <label>BPJS Kesehatan Istri/Suami</label>
                                            <input type="text" name="bpjs_kes_istri_suami" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_kes_istri_suami : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_kes_istri_suami : ''}}"/>
                                            <br>
                                            <label>BPJS Kesehatan Anak Ke-1</label>
                                            <input type="text" name="bpjs_kes_anak1" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_kes_anak1 : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_kes_anak1 : ''}}"/>
                                            <br>
                                            <label>BPJS Kesehatan Anak Ke-2</label>
                                            <input type="text" name="bpjs_kes_anak2" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_kes_anak2 : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_kes_anak2 : ''}}"/>
                                            <br>
                                            <label>BPJS Kesehatan Anak Ke-3</label>
                                            <input type="text" name="bpjs_kes_anak3" required  class="form-control" value="{{ isset($employee) ? $employee->bpjs_kes_anak3 : ''}}" placeholder="{{ isset($employee) ? $employee->bpjs_kes_anak3 : ''}}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
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
<script src="{{ asset('material/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script src="{{ asset('material/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('material/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>

@endsection