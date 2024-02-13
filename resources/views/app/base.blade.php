<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TeachApp</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/teacher-hat.png" alt="">
                <span class="d-none d-lg-block">TeachApp</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#profesores-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-card-list"></i><span>Profesores</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="profesores-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{url('profesor')}}">
                            <i class="bi bi-circle"></i><span>Listado</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('profesor/create')}}">
                            <i class="bi bi-circle"></i><span>Añadir profesor</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#formacion-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-card-list"></i><span>Formaciones</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="formacion-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{url('formacion')}}">
                            <i class="bi bi-circle"></i><span>Listado</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('formacion')}}">
                            <i class="bi bi-circle"></i><span>Añadir formacion</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#modulos-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-card-list"></i><span>Modulos</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="modulos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{url('modulo')}}">
                            <i class="bi bi-circle"></i><span>Listado</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('modulo/create')}}">
                            <i class="bi bi-circle"></i><span>Añadir modulo</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#grupos-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-card-list"></i><span>Grupos</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="grupos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{url('grupo')}}">
                            <i class="bi bi-circle"></i><span>Listado</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('grupo/create')}}">
                            <i class="bi bi-circle"></i><span>Añadir grupo</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#lecciones-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-card-list"></i><span>Lecciones</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="lecciones-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{url('leccion')}}">
                            <i class="bi bi-circle"></i><span>Listado</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('leccion/create')}}">
                            <i class="bi bi-circle"></i><span>Añadir leccion</span>
                        </a>
                    </li>
                </ul>
            </li>
        
        </ul>

    </aside>
   <!-- End Sidebar-->
    @yield('content')
  
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{url('assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{url('assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{url('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{url('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('assets/js/main.js')}}"></script>

</body>

</html>
