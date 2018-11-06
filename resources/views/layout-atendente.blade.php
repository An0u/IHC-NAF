<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="{{ asset('node_modules/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('node_modules/gentelella/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset('node_modules/gentelella/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('node_modules/gentelella/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
      
        <!-- bootstrap-progressbar -->
        <link href="{{ asset('node_modules/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{ asset('node_modules/gentelella/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="{{ asset('node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset('node_modules/gentelella/build/css/custom.min.css') }}" rel="stylesheet">

        <!-- Calendar -->
        <link href="{{ asset('node_modules/gentelella/vendors/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('node_modules/gentelella/vendors/fullcalendar/dist/fullcalendar.print.css') }}" rel="stylesheet" media="print">

        <style>
            .haddad_13 {
                height: 70px !important;
                width: 70px !important;
            }
        </style>
    </head>
    <body class="nav-md">
        <div class="container body">
          <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-clock-o"></i> Painel admin NAF <span></span></a>
                    </div>
        
                    <div class="clearfix"></div>
        
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/haddad.jpg" alt="..." class="img-circle profile_img haddad_13">
                    </div>
                    <div class="profile_info">
                        <span>Bem vindo,</span>
                        <h2>Atendente</h2>
                    </div>
                    </div>
                    <!-- /menu profile quick info -->
        
                    <br />
        
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Menu geral</h3>
                        <ul class="nav side-menu">
                        <li><a href="{{ route('atendente') }}" ><i class="fa fa-home"></i> Inicio </a> </li>
                        <li><a href="{{ route('agendamentos-atendente') }}" ><i class="fa fa-edit"></i> Agendamentos </span></a>
                        <li><a href="{{ route('servicos-atendente') }}" ><i class="fa fa-tags"></i> Serviços </span></a>
                        <li><a href="{{ route('mesa-atendente') }}" ><i class="fa fa-sitemap"></i> Mesa </span></a>
                        <li><a href="{{ route('situacao-atendente') }}" ><i class="fa fa-map-signs"></i> Situação </span></a>
                        <li><a href="{{ route('calendario-atendente') }}"><i class="fa fa-calendar"></i> Calendário <span class="label label-success pull-right"> Versão Beta </span></a></li>
                        </ul>
                    </div>
        
                    </div>
                    <!-- /sidebar menu -->
        
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" >
                    </a>
                    <a data-toggle="tooltip" data-placement="top" >
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('login') }}">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
                </div>
        
                <!-- top navigation -->
                <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
        
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="{{ route('login') }}" >
                                Sair
                            </a>
                        </li>
                        <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="images/haddad.jpg" alt="">Atendente
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="javascript:;"> Perfil</a></li>
                            <li><a href="javascript:;">Ajuda</a></li>
                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-out pull-right"></i> Sair </a></li>
                        </ul>
                        </li>
        
                        <li role="presentation" class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="badge bg-green">2</span>
                        </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                            <li>
                            <a>
                                <span class="image"><img src="images/haddad.jpg" class="haddad_13" alt="Profile Image" /></span>
                                <span>
                                <span> Visitante </span>
                                <span class="time">50 minutos atrás</span>
                                </span>
                                <span class="message">
                                Um de seus agendamentos foi cancelado
                                </span>
                            </a>
                            </li>
                            <li>
                            <a>
                                <span class="image"><img src="images/visitante.jpg" alt="Profile Image" /></span>
                                <span>
                                <span>Visitante</span>
                                <span class="time">5 minutos atrás</span>
                                </span>
                                <span class="message">
                                Olá visitante,  faltam apenas alguns minutos para seu atendimento aguardamos anciosamente a sua presença
                                </span>
                            </a>
                            </li>
                            <li>
                            <div class="text-center">
                                <a>
                                <strong>Ver todos os alertas</strong>
                                <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            </li>
                        </ul>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>
                <!-- /top navigation -->
        
                <!-- page content -->
                <div class="right_col" role="main">
                    @yield('content')
                </div>
                <!-- /page content -->
        
                <!-- footer content -->
                <footer>
                <div class="pull-right">
                    NAF - SISTEMA DE AGENDAMENTO
                </div>
                <div class="clearfix"></div>
                </footer>
          </div>
        </div>
        <!-- jQuery -->
        <script src="{{ asset('node_modules/gentelella/vendors/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('node_modules/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('node_modules/gentelella/vendors/fastclick/lib/fastclick.js') }}"></script>
        <!-- NProgress -->
        <script src="{{ asset('node_modules/gentelella/vendors/nprogress/nprogress.js') }}"></script>
        <!-- Chart.js -->
        <script src="{{ asset('node_modules/gentelella/vendors/Chart.js/dist/Chart.min.js') }}"></script>
        <!-- gauge.js -->
        <script src="{{ asset('node_modules/gentelella/vendors/gauge.js/dist/gauge.min.js') }}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{ asset('node_modules/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ asset('node_modules/gentelella/vendors/iCheck/icheck.min.js') }}"></script>
        <!-- Skycons -->
        <script src="{{ asset('node_modules/gentelella/vendors/skycons/skycons.js') }}"></script>
        <!-- Flot -->
        <script src="{{ asset('node_modules/gentelella/vendors/Flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('node_modules/gentelella/vendors/Flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('node_modules/gentelella/vendors/Flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('node_modules/gentelella/vendors/Flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('node_modules/gentelella/vendors/Flot/jquery.flot.resize.js') }}"></script>
        <!-- Flot plugins -->
        <script src="{{ asset('node_modules/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
        <script src="{{ asset('node_modules/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
        <script src="{{ asset('node_modules/gentelella/vendors/flot.curvedlines/curvedLines.js') }}"></script>
        <!-- DateJS -->
        <script src="{{ asset('node_modules/gentelella/vendors/DateJS/build/date.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('node_modules/gentelella/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
        <script src="{{ asset('node_modules/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('node_modules/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="{{ asset('node_modules/gentelella/vendors/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        @stack('scripts')
        <!-- Custom Theme Scripts -->
        <script src="{{ asset('node_modules/gentelella/build/js/custom.js') }}"></script>
    </body>
</html>
