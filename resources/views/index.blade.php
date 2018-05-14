<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
{{\Jenssegers\Date\Date::setLocale('es')}}
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Sistema Dojo Bushido">
  <meta name="author" content="Diego Wilson">
  <title>Sistema Administracion Dojo Bushido</title>
  <!-- Bootstrap core CSS-->
  <link href="/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <div class=""></div>
  <link href="/components/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="/components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  @stack('styles')
  {{-- <link rel="stylesheet" href="/dist/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="/dist/modules/flag-icon-css/css/flag-icon.min.css"> --}}
  <link href="/components/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
  <!-- <link rel="stylesheet" href="../dist/css/demo.css"> -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/red.css">

</head>

<body>
  <!-- Navigation-->
     @include('partials.nav')
     @include('partials.sidebar')

    <div class="main-content">
      <div id="app">
        <section class="section">
                 @if (session()->has('flash'))
                      <div class="alert alert-success" role="alert">
                          {{session('flash')}}
                      </div>
                 @endif
                 @yield('content')
              
        </section>
      </div>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <!-- Logout Modal-->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg"  role="document" >
        <div class="modal-content" id="modal-content">

        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
     <script src="/components/jquery/dist/jquery.min.js"></script>
     <script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="/components/popper.js/dist/umd/popper.min.js"></script>
     <script type="text/javascript" src="/components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
     <script src="/components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
     <script src="/components/datatables.net/js/jquery.dataTables.js"></script>
     @stack('scripts')
     
     <script type="text/javascript" src="/js/scripts.js"></script>
     <script src="/js/sa-functions.js"></script>
     <script type="text/javascript" src="/js/custom.js"></script>
     <script src="/components/font-awesome/svg-with-js/js/fontawesome-all.min.js"></script>

</body>

</html>
