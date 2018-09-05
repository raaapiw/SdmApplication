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
                 <form action="#" class="tab-wizard wizard-circle">
                    <!-- Patient Info -->
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="idPatient1">Nama :</label>
                                <input type="text" class="form-control" disabled id="idPatient1" value="{{$employee->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber1">Alamat :</label>
                                    <input type="tel" class="form-control" disabled id="phoneNumber1" value="{{$employee->address}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date1">Asal Sekolah :</label>
                                    <input type="text" class="form-control" id="date1" disabled value="{{$employee->graduated_from}}"> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address1">Pendidikan Terakhir :</label>
                                    <input type="text" class="form-control" disabled id="address1" value="{{$employee->degree}}">
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
                <hr>
                <label>Kontrak History</label>
                {{--  Table Diagnosis  --}}
                <table id="myTable" class="table table-bordered table-striped">
                    <tr>
                        <thead>
                            <th>Nama Kontrak</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Berakhir</th>
                            <th>Print</th>
                        </thead>
                    </tr>
                    @foreach($employee->contracts as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->start_date}}</td>
                            <td>{{$row->end_date}}</td>
                            <td>#</td>  
                        </tr>
                    @endforeach
                </table>
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