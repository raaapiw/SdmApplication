@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('material/plugins/dropify/dist/css/dropify.min.css')}}">
@endsection
@section('breadcumb')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">{{ isset($training) ? 'Edit Training': 'Upload Training'}}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">{{ isset($training) ? 'Edit Training':'Upload Training'}}</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{ isset($training) ? route('admin.training.update', $training->id) : route('admin.training.store')}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="employee_id" value="{{ $employee->id}}">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-outline-info">
                                    <div class="card-body">
                                        <h3 class="card-title">Tema Training</h3>
                                        <input type="text" name="theme" class="form-control" placeholder="Tema Training" placeholder="{{ isset($training) ? $training->theme : ''}}"> 
                                        <br>    
                                        <br>                                   
                                        <h3 class="card-title">Penyelenggara</h3>
                                        <input type="text" name="penyelenggara" class="form-control" placeholder="Penyelenggara" placeholder="{{ isset($training) ? $training->penyelenggara : ''}}">
                                        <br>
                                        <br>
                                        <h3 class="card-title">Jadwal</h3>
                                        <input type="text" name="jadwal" class="form-control" placeholder="Jadwal" placeholder="{{ isset($training) ? $training->jadwal : ''}}">
                                        <br>
                                        <br>
                                        <h3 class="card-title">No Sertifikat</h3>
                                        <input type="text" name="no_sertifikat" class="form-control" placeholder="No. Sertifikat" placeholder="{{ isset($training) ? $training->no_sertifikat : ''}}">
                                        <br>
                                        <br>
                                        <h3 class="card-title">Biaya</h3>
                                        <input type="text" name="biaya" class="form-control" placeholder="Biaya" placeholder="{{ isset($training) ? $training->biaya : ''}}">                                        
                                        <br>                                        
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success" value="upload"><i class="fa fa-check"></i> Submit</button>
                            <a class="btn btn-inverse btn-close" href="{{ url()->previous() }}">Cancel</a>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('script')
<script src="{{ asset('material/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script>
$( document ).ready(function() {
    $('.dropify').dropify();
});

</script> 
<script>
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
        </script> 

  
@endsection