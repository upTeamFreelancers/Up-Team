<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.jpg">
    <link href="adminn/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="adminn/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <link href="adminn/css/style.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .hidden {
            display: none;
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/about" aria-expanded="false">
                                <i class="fa fa-inbox" aria-hidden="true"></i></i>
                                <span class="hide-menu">About</span>
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
        div class="page-wrapper">
        <div class="page-wrapper">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box row">
                            <h3 class="box-title col">About</h3>
                            <p class="hidden ap">{{$cabo}}</p>
                            <button type="button" class="btn btn-primary col a" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Add info
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add info</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="addabosave" method="POST" enctype='multipart/form-data'>
                                            @csrf
                                            <input type="text" placeholder="name" name="name" class="form-control"><br>
                                            <label for="image" class="btn btn-primary m-3" id="image_label">Image</label>
                                            <input type="file" name="img" hidden id="image"><br>
                                            <input type="text" placeholder="about" name="about" class="form-control"><br>
                                            <input type="text" placeholder="about2" name="about2" class="form-control"><br>
                                            <input type="text" placeholder="know" name="know" class="form-control"><br>
                                            <input type="text" placeholder="work" name="work" class="form-control"><br>
                                            <label for="prevyu" class="btn btn-primary m-3" id="image_label">Prevyu</label>
                                            <input type="file" name="prevyu" hidden id="prevyu"><br>
                                            <input type="text" placeholder="Video link" name="link" class="form-control"><br>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div><br>
                            <div class="table-responsive mt-5">
                                <table class="datatable table table-bordered less hover-table container" style="overflow-x: scroll;" width='50%'>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>name</th>
                                            <th>img</th>
                                            <th>about</th>
                                            <th>about2</th>
                                            <th>know</th>
                                            <th>skills</th>
                                            <th>work</th>
                                            <th>prevyu</th>
                                            <th>link</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($abo as $d)
                                        <tbody>
                                            <tr>
                                                <td>{{$d->id}}</td>
                                                <td>{{$d->name}}</td>
                                                <td><img src="abouts/{{$d->img}}" width="300" alt="{{$d->name}}"></td>
                                                <td>{{$d->about}}</td>
                                                <td>{{$d->about2}}</td>
                                                <td>{{$d->know}}</td>
                                                <td>{{$d->skills}}</td>
                                                <td>{{$d->work}}</td>
                                                <td><img src="abouts/{{$d->prevyu}}" width="300" alt="{{$d->name}}"></td>
                                                <td>{{$d->link}}</td>
                                                <td>
                                                    <a href="/dabo/{{$d->id}}" class="btn btn-danger">Delete</a>
                                                    <!-- Button trigger modal -->
                                                    <a href="#" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{$d->id}}">
                                                        Edit
                                                    </a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="editModal{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="editabosave/{{$d->id}}" method="POST" enctype='multipart/form-data'>
                                                                    @csrf
                                                                    <input type="text" value="{{$d->name}}" name="name" class="form-control"><br>
                                                                    <label for="img1" class="btn btn-primary m-3" id="img_label">Image</label>
                                                                    <input type="file" name="img" hidden id="img1"><br>
                                                                    <input type="text" value="{{$d->about}}" name="about" class="form-control"><br>
                                                                    <input type="text" value="{{$d->about2}}" name="about2" class="form-control"><br>
                                                                    <input type="text" value="{{$d->know}}" name="know" class="form-control"><br>
                                                                    <input type="text" value="{{$d->work}}" name="work" class="form-control"><br>
                                                                    <label for="img2" class="btn btn-primary m-3" id="">Prevyu</label>
                                                                    <input type="file" name="prevyu" hidden id="img2"><br>
                                                                    <input type="text" value="{{$d->link}}" name="link" class="form-control"><br>
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">

                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
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
    <script src="assets/vendor/a.js"></script>
</body>

</html>