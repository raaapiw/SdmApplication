@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('material/plugins/dropify/dist/css/dropify.min.css')}}">
@endsection
@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">{{ isset($defaultContract) ? 'Edit Kontrak': 'Tambah Kontrak'}}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">{{ isset($defaultContract) ? 'Edit Kontrak': 'Tambah Kontrak'}}</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ isset($defaultContract) ? route('admin.defaultContract.update', $defaultContract->id) : route('admin.defaultContract.store')}}" method="POST" enctype="multipart/form-data">
                    {{-- <input type="hidden" name="order_id" value="{{ $employee->id}}"> --}}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline-info">
                                    <div class="card-body">                                   
                                        <h3 class="card-title">Jenis Kontrak</h3>                                                                               
                                        <input type="text" id="id" class="form-control custom-select" name="name" placeholder="{{ $defaultContract->name}}" >
                                        <br>
                                        <br>
                                        <hr>
                                        <h3 class="card-title">Jabatan</h3>                                                                               
                                        <input type="text" id="id" class="form-control custom-select" name="name" placeholder="{{ $defaultContract->jabatan}}" >
                                        <br>
                                        <br>
                                        <hr>
                                        <h3 class="card-title">Lulusan</h3>                                                                               
                                        <input type="text" id="id" class="form-control custom-select" name="name" placeholder="{{ $defaultContract->degree}}" >
                                        <br>
                                        <br>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3 class="card-title">Gaji</h3>
                                                <label>Gaji Pokok</label>
                                                <br>
                                                    Rp <input type="text" pattern="[0-9]*" id="gapok" name="gapok" />
                                                <br>
                                                <br>
                                                <label>Tunjangan Kinerja</label>
                                                <br>
                                                    Rp <input type="text" id="tunkin" pattern="[0-9]*" name="tunkin" />
                                                <br>
                                                <br>
                                                <label>Tunjangan Jabatan</label>
                                                <br>
                                                    Rp <input type="text" id="tunjab" name="tunjab" pattern="[0-9]*" />
                                                <br>
                                                <br>
                                                <label>Tunjangan Prestasi Jabatan</label>
                                                <br>
                                                    Rp <input type="text" id="tunpresjab" name="tunpresjab" pattern="[0-9]*"/>
                                                <br>
                                                <br>
                                                <label>Total Gaji</label>
                                                <br>
                                                    Rp <input type="text" id="total" name="gatot" pattern="[0-9]*"/>
                                                <br>
                                                <br>
                                            </div>                                           
                                        </div>                                         
                                        <br>
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
<script>
    $(document).ready(function() {
            $('.btnrp').printPage();      
        });
</script>
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
{{-- <script>
    $(document).ready(function () {
    $(".btn").on('click', function () {
        $('#check').append('<input type="checkbox" name="myCheckbox" />' + $(".txt").val());
    });
});
</script> --}}
<script>
   $(document).on("click","#add",function(){
    var claw = document.getElementById('claws'); //ul
    // var li = document.createElement('input');//li

    var checkbox = document.createElement('input');
        checkbox.type = "checkbox";
        checkbox.value = 1;
        checkbox.name = "facility";
        checkbox.id = "id";

    var label = document.createElement('label');
    label.htmlFor = "id";
    label.appendChild(document.createTextNode('text for label after checkbox'));

    claw.appendChild(checkbox);
    claw.appendChild(label);
   });
    
    // var text = document.getElementById('texto');
    // claw.appendChild(document.createTextNode(text.value));
    // claw.appendChild(li); 
</script>
{{-- <script>
    function addCheckBox() {

var ColorsAvailable = document.getElementById('checkBoxes');
var check_value = new Array();
check_value[0] = "Yellow";
check_value[1] = "Red";
check_value[2] = "Green";

var color, p, br;

for(var count in check_value)
{
  color=document.createElement("input");   
  color.value=(check_value[count] + '</br>');
  color.type="checkbox";
  color.id="color" + count;
  p =document.createElement("span");
  p.innerHTML = check_value[count] + ": ";
  br =document.createElement("br");
  ColorsAvailable.appendChild(p);
  ColorsAvailable.appendChild(color);
  ColorsAvailable.appendChild(br);
}
}
</script> --}}
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
{{-- <script>
        $( document ).ready(function() {
            var i = 0;
            n = i+2;
            // i = $(this).attr("data-count");
            // console.log(i);
            $(document).on("click","#add",function() {
                $('#dynamic_field').append('<div class="row" id="row'+i+'"><div class="col-md-12"><div class="col-md-12"><br><br><h3 class="card-title">Fasilitas Ke-'+n+'</h3><input type="text" id="file" name="facility[]" class="dropify" required/></div><div class="col-md-12"><div class="form-group"><button type="button" name="btn_remove" id="'+i+'" class="btn btn-danger btn_remove">Clear</button></div></div></div></div>');
                i++;
                n++;
                // $(".select2").select2();
                // $(".vertical-spin").TouchSpin({
                //     verticalbuttons: true,
                //     verticalupclass: 'ti-plus',
                //     verticaldownclass: 'ti-minus',
                // });
            });
            
            $(document).on("click", ".btn_remove", function(){  
                   var button_id = $(this).attr('id');   
                   $('#row'+button_id+'').remove();  
            });
    
            
         });
</script>  --}}

  
@endsection