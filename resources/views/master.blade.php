<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('alamat')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <!-- <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <!--  CSS for Data Table    -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/DataTables/media/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/DataTables/media/css/dataTables.bootstrap.css') }}">

    <!-- Animation library for notifications   -->
    <link href="{{ URL::asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ URL::asset('assets/css/paper-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="{{ URL::asset('assets/css/demo.css') }}" rel="stylesheet" /> -->


    <!--  Fonts and icons     -->
    <link href="{{ URL::asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <script src="{{ URL::asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <div class="wrapper">
            <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

    <div class="sidebar-wrapper">
        <div class="logo" style="padding-bottom: 30px;">
            <center>
                <div class="header">
                    <h4 class="title" style="margin-top: 10px">SI _ EMJE</h4>
                    <label class="simple-text" style="margin-bottom: 0px">SI Data Penjualan Group</label>
                    <label class="simple-text">EMJE T-Shirt & Oleh2</label>
                </div>
            </center>

        </div>

        <ul class="nav">
            <li class="active">
                <a href="/member-customer">
                    <i class="ti-user"></i>
                    <p>Member Customer</p>
                </a>
            </li>

            <li >
                <a href="dashboard.html">
                    <i class="ti-panel"></i>
                    <p>Member Marketing</p>
                </a>
            </li>

            <li class="active-pro">
                <a href="dashboard.html">
                    <i class="fa fa-history"></i>
                    <p>Log Out</p>
                </a>
            </li>

            <!-- 
            <li class="active-pro">
                <a href="upgrade.html">
                    <i class="ti-export"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>

<div class="main-panel">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>

                <h3 class="navbar-brand" href="#">@yield('judul') </h3>
            </div>
            
        </div>
    </nav>


    <div class="content">
        <div class="container-fluid"> 
            @yield('isi')               


        </div>
    </div>

    <div aria-hidden="true" class="modal fade" id="modalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background: #EB5E28">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="modalMdTitle" style="color: white"></h4>
          </div>
          <div class="modal-body">
              <!-- <div class="modalError"></div> -->
              <div id="modalMdContent"></div>
          </div>
      </div>
  </div>
</div>
@yield('modal')
@yield('content')
<script type="text/javascript">
    $(document).on('ajaxComplete ready', function () {
        $('.modalMd').off('click').on('click', function () {
            $('#modalMdContent').load($(this).attr('value'));
            $('#modalMdTitle').html($(this).attr('title'));
            // $('#modalMdContent').html($(this).attr('value'));
        });
    });
</script>
</body>

<!--   Core JS Files   -->
<!-- <script src="{{ URL::asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script> -->

<script type="text/javascript" src="{{ URL::asset('assets/DataTables/media/js/jquery.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('assets/DataTables/media/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.maskedinput.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>



@stack('script')
<script>
    jQuery(function($){
        $("#tgl").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
        $("#npwp").mask("99-999-999-9-999-999");
        $("#tlp").mask("999 999 999 999");
        $("#hp").mask("999 999 999 999");
    });
</script>

<!--  Checkbox, Radio & Switch Plugins -->
<!-- <script src="{{ URL::asset('assets/js/bootstrap-checkbox-radio.js') }}"></script> -->

<!--  Notifications Plugin    -->
<script src="{{ URL::asset('assets/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ URL::asset('assets/js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<!-- <script src="{{ URL::asset('assets/js/demo.js') }}"></script> -->



</html>
