@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('material/plugins/dropify/dist/css/dropify.min.css')}}">
@endsection
@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">{{ isset($contract) ? 'Edit Kontrak': 'Tambah Kontrak'}}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">{{ isset($contract) ? 'Edit Kontrak': 'Tambah Kontrak'}}</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ isset($contract) ? route('admin.contract.update', $employee->id) : route('admin.contract.store')}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="order_id" value="{{ $employee->id}}">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline-info">
                                    <div class="card-body">
                                            <div class="card-body">
                                                <h3>Data Diri Karyawan</h3>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Nama</label>
                                                            <input disabled type="text" name="name" required class="form-control" value="{{ isset($employee) ? $employee->name : ''}}" placeholder="{{ isset($employee) ? $employee->subject : ''}}"/>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Payroll</label>
                                                            <input disabled type="text" name="payroll" required class="form-control" value="{{ isset($employee) ? $employee->name : ''}}" placeholder="{{ isset($employee) ? $employee->subject : ''}}"/>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Alamat</label>
                                                            <input disabled type="text" name="address" required class="form-control" value="{{ isset($employee) ? $employee->address : ''}}" placeholder="{{ isset($employee) ? $employee->address : ''}}"/>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>NIK</label>
                                                            <input disabled type="text" name="nik" required class="form-control" value="{{ isset($employee) ? $employee->nik : ''}}" placeholder="{{ isset($employee) ? $employee->nik : ''}}"/>
                                                            <br>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        <br>                                        
                                        <hr>
                                        <h3 class="card-title">Jenis Print Kontrak</h3>                                                                               
                                        <select id="id" class="form-control custom-select" name="kind" onchange="changeContract(event)" >                  
                                            <option disabled selected>Pilih Kontrak</option>
                                            <option value="k1">Kontrak Tahun ke-1</option>
                                            <option value="k3">Kontrak Tahun ke-3</option>
                                            <option value="k5">Kontrak Perpanjangan Umum untuk Tunjangan Tahun ke-5</option>
                                            <option value="k7">Kontrak Perpanjangan Umum untuk Tunjangan Tahun ke-7</option>
                                            <option value="a1">Adendum Prestasi</option>
                                            <option value="a2">Adendum Umum</option>
                                            <option value="ta1">Tenaga Ahli per Termin</option>
                                            <option value="ta2">Tenaga Ahli per Bulan</option>
                                            <option value="ta3">Undangan Teknis TA</option>
                                            {{-- {{ $test = false }}
                                            @foreach($defaultContract as $row)

                                                <option value="{{$row->id}}" {{ $test==true ? "selected" : "" }}>{{$row->name}}</option> --}}
                                                {{-- @if($employee->contract->id == $row->id)
                                                    {{ $test=true}} --}}
                                            {{-- @endforeach --}}
                                        </select>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>No Perjanjian</label>
                                                <input type="text" name="noperj" required class="form-control" /> 
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Kontrak Tahun Ke</label><br>
                                                <input type="number" name="tahun" required class="form-control" /> 
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Tanggal Mulai Kontrak</label>
                                                <br>
                                                <input type="date" name="start_date" class="form-control"  />   
                                            </div>
                                            <div class="col-md-2">
                                                <label visible="false"></label>
                                                <br>
                                                <center>
                                                -
                                                </center>
                                            </div>
                                            <div class="col-md-5">
                                                <label>Tanggal Berakhir Kontrak</label>
                                                <br>
                                                <input type="date" name="end_date" class="form-control"/>           
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div id="rupiah">
                                                    <h3 class="card-title">Gaji</h3>
                                                    <div class="form-group">
                                                        <label>Gaji Pokok</label>
                                                        <br>
                                                        <input type="number" maxlength="9" id="gapok" name="gapok" class="form-control prc"  />   
                                                    </div>
    
                                                    <div class="form-group">
                                                        <label>Tunjangan Kinerja</label>
                                                        <br>
                                                        <input type="number" pattern="[0-9]*" id="tunkin" name="tunkin" class="form-control prc"/>       
                                                    </div>
    
                                                    <div class="form-group">
                                                        <label>Tunjangan Jabatan</label>
                                                        <br>
                                                            <input type="number" name="tunjab" id="tunjab" pattern="[0-9]*" class="form-control prc"/> 
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tunjangan Prestasi Jabatan</label>
                                                        <br>
                                                            <input type="number" name="tunpresjab" id="tunpresjab" pattern="[0-9]*" class="form-control prc"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Total Gaji</label>
                                                        <br>
                                                        Rp <output type="number" id="total" name="gatot" />        
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3 class="card-title">Fasilitas</h3>
                                                            <div id="cblist">
                                                                <div>
                                                                    <input type="checkbox" id="scales" name="facility[]"
                                                                            value="mobil" checked />
                                                                    <label for="scales">Mobil</label>
                                                                </div>
                                                            
                                                                <div>
                                                                    <input type="checkbox" id="horns" name="facility[]"
                                                                            value="rumah" />
                                                                    <label for="horns">Rumah</label>
                                                                </div>
                                                            
                                                                <div>
                                                                    <input type="checkbox" id="transport" name="facility[]"
                                                                            value="transport" />
                                                                    <label for="transport">Transport</label>
                                                                </div>
            
                                                                <div>
                                                                    <input type="checkbox" id="makan" name="facility[]"
                                                                            value="makan" />
                                                                    <label for="makan">Makan</label>
                                                                </div>
            
                                                                <div>
                                                                    <input type="checkbox" id="kacamata" name="facility[]"
                                                                            value="kacamata" />
                                                                    <label for="kacamata">Kacamata</label>
                                                                </div>
            
                                                                <div>
                                                                    <input type="checkbox" id="bensin" name="facility[]"
                                                                            value="bensin" />
                                                                    <label for="bensin">Bensin</label>
                                                                </div>
                                                            </div>                                                        
                                                        <input type="text" id="txtName"x/>
                                                        <input type="button" value="Tambah" id="btnSave" />
                                                    </div>
                                                </div>                                                
                                            </div>     --}}
                                        </div>                                         
                                        <br>
                                        <hr>
                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h3 class="card-title">File Kontrak</h3>
                                                    <input type="file" class="form-control" id="waktu" name="evidence" required >
                                                </div>
                                            </div>
                                        </div> --}}
                                        <hr>
                                        <br>
                                        <br>
                                        <button type="submit" class="btn btn-success" value="upload"><i class="fa fa-check"></i> Submit</button>
                                        <a class="btn btn-inverse btn-close" href="{{ url()->previous() }}">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('script')
{{-- <script>
    $(document).ready(function(){
        $('#gapok').priceFormat({
        prefix: '',
        thousandsSeparator:'.',
        centsLimit: 0,
        clearOnEmpty: true
        });
    });
</script> --}}
{{-- <script>
    $(document).ready(function() {
            $('.btnrp').printPage();      
        });
</script> --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnSave').click(function() {
            addCheckbox($('#txtName').val());      
        });
    });
    
    function addCheckbox(name) {
       var container = $('#cblist');
       var inputs = container.find('input');
       var id = inputs.length+1;
    
       $('<input />', { type: 'checkbox', id: 'cb'+id, value: name }).appendTo(container);
       $('<label />', { 'for': 'cb'+id, text: name }).appendTo(container);
       $('<br>').appendTo(container);
         

    }
</script>
<script src="{{ asset('material/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script src="{{ asset('material/js/jquery.priceformat.min.js')}}"></script>
<script>
function changeContract(e) {
    if (e.target.value == "1") {
        document.getElementById("gapok").value = setSalary("10000");
        document.getElementById("tunkin").value = setSalary("150000");
        document.getElementById("tunjab").value = setSalary("10000");
        document.getElementById("tunpresjab").value = setSalary("10000");
        document.getElementById("horns").checked = true;
    }
    else if (e.target.value == "2")
        document.getElementById("gapok").value = setSalary("20000");
    else
        document.getElementById("gapok").value = setSalary("50000");
}
</script>
<script>
$( document ).ready(function() {
    $('.dropify').dropify();
});

</script> 
<script>
function setSalary(salary) {
    salary = parseFloat(salary.replace(/,/g, ""))
                    .toFixed(2)
                    .toString()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return salary
}
</script>
{{-- <script type="text/javascript">
    function total() {
    var gapok = parseInt(document.getElementByName('gapok').value);
    var tunkin = parseInt(document.getElementByName('tunkin').value);
    var tunjab = parseInt(document.getElementByName('tunjab').value);

    var jumlah_harga = gapok + tunkin + tunjab;

    document.getElementByName('gatot').value = jumlah_harga;
    }
    
</script> --}}

<script>
    $('.form-group').on('input','.prc',function(){
        var totalSum = 0;
        $('.form-group .prc').each(function(){
            var inputVal = $(this).val();
            if($.isNumeric(inputVal)){
                totalSum += parseFloat(inputVal);
            }
        });
        $('#total').text(totalSum);
    });
</script>
{{-- <script type="text/javascript">
		
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e){
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script> --}}
    

@endsection