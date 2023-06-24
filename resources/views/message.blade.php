<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Messages</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.jpg">
    <link href="adminn/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="adminn/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <link href="adminn/css/style.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        tbody>tr td img {
            max-height: 100px;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="/">
                        <span class="logo-text" style="color: #000; font-weight: bold; font-size: 25px;">
                            Up team
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li>
                            <a class="profile-pic" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class='bx bx-log-out'></i>  Log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/home" aria-expanded="false">
                                <i class='bx bxs-dashboard' aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/message" aria-expanded="false">
                                <i class='bx bxs-chat' aria-hidden="true"></i>
                                <span class="hide-menu">Messages</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/projectt" aria-expanded="false">
                                <i class='bx bxs-network-chart' aria-hidden="true"></i>
                                <span class="hide-menu">Project</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/teamm" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Team</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/data" aria-expanded="false">
                                <i class="fa fa-paperclip"></i>
                                <span class="hide-menu">data</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Unread message</h3>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Subject</th>
                                            <th class="border-top-0">Message</th>
                                            <th class="border-top-0">Setting</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mes as $me)
                                        @if($me->read == 0)
                                        <tr>
                                            <td>{{$me->id}}</td>
                                            <td>{{$me->name}}</td>
                                            <td>{{$me->email}}</td>
                                            <td>{{$me->subject}}</td>
                                            <td>{{$me->message}}</td>
                                            <td>
                                                <a href="/read/{{$me->id}}" class="btn btn-primary text-white">Read</a>
                                                <a href="/dmes/{{$me->id}}" class="btn btn-danger text-white">Delete</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Message read</h3>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Subject</th>
                                            <th class="border-top-0">Message</th>
                                            <th class="border-top-0">Readed</th>
                                            <th class="border-top-0">Setting</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mes as $me)
                                        @if($me->read == 1)
                                        <tr>
                                            <td>{{$me->id}}</td>
                                            <td>{{$me->name}}</td>
                                            <td>{{$me->email}}</td>
                                            <td>{{$me->subject}}</td>
                                            <td>{{$me->message}}</td>
                                            <td>{{$me->updated_at}}</td>
                                            <td>
                                                <a href="/dmes/{{$me->id}}" class="btn btn-danger text-white">Delete</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="adminn/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="adminn/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="adminn/js/app-style-switcher.js"></script>
    <script src="adminn/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="adminn/js/waves.js"></script>
    <script src="adminn/js/sidebarmenu.js"></script>
    <script src="adminn/js/custom.js"></script>
    <script src="adminn/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="adminn/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="adminn/js/pages/dashboards/dashboard1.js"></script>
    <script src="assets/vendor/return.js"></script>

</body>
</html>