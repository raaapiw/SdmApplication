<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('material/images/favicon.ico')}}">
    <title>Kepegawaian BTP Jabar</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <!-- Bootstrap Core CSS -->
    {{--  <link href="../material/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">  --}}
    <link href="{{ asset('material/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('material/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('material/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar"  style="background-image:url({{ asset('material/images/background/back3.jpg')}});">
  <div class="login-box card">
    <div class="card-body">
      <form class="form-horizontal form-material" id="loginform" action="{{ route('postLogin') }}" method="POST">
        <a href="http://www.dephub.go.id/" class="text-center db"><img src="{{ asset('material/images/logokemenhub.png')}}" alt="Home" width="75px"/>
          <h2 style="text-align:center; font-weight: bold; font-family: 'Ubuntu', serif;">KEPEGAWAIAN <br> BTP JABAR</h2>
        {{-- <p style = "font-family: Helvetica, sans-serif;  text-align: center; font-weight: bold; color: black;">
            <br>KEPEGAWAIAN BALAI TEKNIK PERKERETAAPIAN
            WILAYAH JAWA BAGIAN BARAT
          </p> --}}
        </a> 
        {{-- <a href="http://www.dephub.go.id/" class="text-right db"><img src="{{ asset('material/images/logobtp.png')}}" alt="Home"  width="50px"/></a>  --}}
        @if(session('error'))
        <div class="form-group m-t-30">
            <div class="col-xs-12">
                <div class="alert alert-danger"> {{ session()->get('error') }} </div>
            </div>
        </div>
        @endif
        <div class="form-group {{ session('error') ? 'm-t-10' : 'm-t-40' }}">
          <div class="col-xs-12">
            <input class="form-control" name="username" type="text" required="" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" name="password" type="password" required="" placeholder="Password">
          </div>
        </div>
        
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-success btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" style="background-color:#2c176e">Log In</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
              <p>Lupa Password <a href="https://api.whatsapp.com/send?phone=6281394764570&text=Halo%20admin%20Verifikasi%20Smelter%20PTSI,%20" target="__blank" class="text-primary m-l-5"><b>Hubungi admin.</b></a></p>
          </div>
      </div>
        {{-- <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
            <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
          </div>
        </div> --}}
      </form>
      {{-- <form class="form-horizontal" id="recoverform" action="index.html">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Recover Password</h3>
            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
          </div>
        </div>
      </form> --}}
    </div>
  </div>
</section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('material/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('material/plugins/popper/popper.min.js')}}"></script>
    <script src="{{ asset('material/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('material/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('material/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('material/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('material/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ asset('material/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('material/js/custom.min.js')}}"></script>

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->

    {{--  <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>  --}}

    <script src="{{ asset('material/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

</body>

</html>