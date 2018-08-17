@extends('layouts.app')

@section('style')
<link href="{{ asset('material/plugins/wizard/steps.css')}}" rel="stylesheet">
<link href="{{ asset('material/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
<link href="{{ asset('material/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@endsection
@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">{{ isset($employee) ? 'Edit Karyawan': 'Add Karyawan'}}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">{{ isset($employee) ? 'Edit Karyawan':'Add Karyawan'}}</li>
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
                    <h6>Data Karyawan</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <textarea name="name" required class="form-control" value="{{ isset($employee) ? $employee->name : ''}}" placeholder="{{ isset($employee) ? $employee->subject : ''}}"></textarea>
                                    <label>NIK</label>
                                    <textarea name="nik" required class="form-control" value="{{ isset($employee) ? $employee->nik : ''}}" placeholder="{{ isset($employee) ? $employee->nik : ''}}"></textarea>
                                    <label>Alamat</label>
                                    <textarea name="address" required class="form-control" value="{{ isset($employee) ? $employee->address : ''}}" placeholder="{{ isset($employee) ? $employee->address : ''}}"></textarea>
                                    <label>Asal Sekolah</label>
                                    <textarea name="graduated_from" required class="form-control" value="{{ isset($employee) ? $employee->graduated_from : ''}}" placeholder="{{ isset($employee) ? $employee->graduated_from : ''}}"></textarea>
                                    <label>Pendidikan Terakhir</label>
                                    <textarea name="degree" required  class="form-control" value="{{ isset($employee) ? $employee->degree : ''}}" placeholder="{{ isset($employee) ? $employee->degree : ''}}"></textarea>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step akhir-->
                    <h6>Input Kontrak</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-12">
                                Kontrak
                                <br>
                                <br>
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
<script src="{{ asset('material/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('material/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>

  
@endsection
