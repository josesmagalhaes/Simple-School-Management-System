<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/layoutadmin/img/apple-icon.png">
  <link rel="icon" type="/layoutadmin/image/png" href="/layoutadmin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="/layoutadmin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/layoutadmin/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/layoutadmin/demo/demo.css" rel="stylesheet" />
</head>
<body class="">
<div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="/layoutadmin/img/logo-small.png">
            </div>
            <!-- <p>CT</p> -->
            </a>
            <a href="#" class="simple-text logo-normal">
            Usuário
            <!-- <div class="logo-image-big">
                <img src="../img/logo-big.png">
            </div> -->
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
            <li>
                <a href="/admin/estudantes">
                <i class="nc-icon nc-single-02"></i>
                <p>Estudantes</p>
                </a>
            </li>
            <li>
                <a href="/admin/professores">
                <i class="nc-icon nc-single-02"></i>
                <p>Professores</p>
                </a>
            </li>
            <li>
                <a href="/admin/funcionarios">
                <i class="nc-icon nc-single-02"></i>
                <p>Funcionários</p>
                </a>
            </li>            
            </ul>
        </div>
        </div>
        <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                </div>
                <a class="navbar-brand" href="javascript:;">Painel de Controle</a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>
                        <span class="d-lg-none d-md-block">Some Actions</span>
                    </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <form action="/logout" method="POST">
                      @csrf
                      <a href="/logout" 
                        class="nav-link" 
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Sair
                      </a>
                </form>
                    </div>
                </li>
                </ul>
            </div>
            </div>
        </nav>                      
@yield('content')
<main>
            @if(session('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p class="msg">{{ session('msg') }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
      </main>
<footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
      <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="/layoutadmin/js/core/jquery.min.js"></script>
  <script src="/layoutadmin/js/core/popper.min.js"></script>
  <script src="/layoutadmin/js/core/bootstrap.min.js"></script>
  <script src="/layoutadmin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="/layoutadmin/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="/layoutadmin/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/layoutadmin/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="/layoutadmin/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>
</html>
