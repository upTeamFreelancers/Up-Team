<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Team</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon.jpg">
    <link href="/adminn/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/adminn/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <link href="/adminn/css/style.min.css" rel="stylesheet">
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
                            IT Progress
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin" aria-expanded="false">
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
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    @if ($type == 0)
                    <form action="/editteasave/{{$get->id}}" method="POST" enctype="multipart/form-data" onsubmit="return Tekshirishtea()">
                        @csrf
                        <label for="input1" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="input1" value="{{$get->name}}">
                        <label for="input2" class="col-form-label">Career</label>
                        <input type="text" class="form-control" name="career" id="input2" value="{{$get->career}}">
                        <label for="image" class="btn btn-primary m-3" id="image_label">Image</label>
                        <br>
                        <input type="file" name="image" hidden id="image">
                        <br>
                        <label for="input3" class="col-form-label">Telegram</label>
                        <input type="text" class="form-control" name="teleg" id="input3" value="{{$get->teleg}}">
                        <label for="input4" class="col-form-label">Instagram</label>
                        <input type="text" class="form-control" name="insta" id="input4" value="{{$get->insta}}">
                        <label for="input5" class="col-form-label">Facebook</label>
                        <input type="text" class="form-control" name="face" id="input5" value="{{$get->face}}">
                        <label for="input6" class="col-form-label">Git hub</label>
                        <input type="text" class="form-control" name="github" id="input6" value="{{$get->github}}">
                        <button class="btn btn-primary m-2">Save</button>
                    </form>
                    @endif
                    @if ($type == 1)
                    <form action="/editteasave/{{$get->id}}" method="POST" enctype="multipart/form-data" onsubmit="return Tekshirishpro()">
                        @csrf
                        <label for="input1" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="input1" value="{{$get->name}}">
                        <label for="input2" class="col-form-label">Career</label>
                        <input type="text" class="form-control" name="about" id="input2" value="{{$get->about}}">
                        <label for="image" class="btn btn-primary m-3" id="image_label">Image</label>
                        <br>
                        <input type="file" name="image" hidden id="image">
                        <br>
                        <label for="input3" class="col-form-label">Telegram</label>
                        <input type="text" class="form-control" name="link" id="input3" value="{{$get->link}}">
                        <button class="btn btn-primary m-2">Save</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="/adminn/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/adminn/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/adminn/js/app-style-switcher.js"></script>
    <script src="/adminn/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/adminn/js/waves.js"></script>
    <script src="/adminn/js/sidebarmenu.js"></script>
    <script src="/adminn/js/custom.js"></script>
    <script src="/adminn/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="/adminn/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="/adminn/js/pages/dashboards/dashboard1.js"></script>
    <script src="/assets/vendor/return.js"></script>
</body>

</html>