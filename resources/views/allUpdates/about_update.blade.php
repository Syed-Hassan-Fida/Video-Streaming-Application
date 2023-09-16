<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Brebow || Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin\vendor\fontawesome-free\css\all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin\css\sb-admin-2.min.css')}}" rel="stylesheet">

    <link href="{{ asset('images\White-Background-Icon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('images\White-Background-Icon.png') }}" rel="apple-touch-icon">
    <style>
        .bg-gradient-primary {
            background-color: black;
            background-image: linear-gradient(180deg,#000000 10%,#000000 100%);
            background-size: cover;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('brebow-index')}}">
                
                <div class="sidebar-brand-text">
                    <img src="{{asset('images\Black Background Logotype.png')}}" height="28">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route("dashboard")}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Update Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data</h6>
                        <a class="collapse-item" href="{{ route('alldata') }}">All Data</a>
                        {{-- <a class="collapse-item" href="cards.html">Cards</a> --}}
                    </div>
                </div>
            </li>

            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    @Auth {{Auth::user()->name}} @endAuth
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary ml-4"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</button>
                                </form>
                               
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>

                    <div class="mt-4">
                        <h1>Update About Info</h1>
                        <form method="post" action="{{ route('about-edit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Title</label>
                                <input type="text" name="title" value="{{ $contacts->title }}" class="form-control" id="exampleInputPassword1" >
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Line</label>
                                <input type="text" name="line" value="{{ $contacts->line }}" class="form-control" id="exampleInputPassword1" >
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">About</label>
                                <input type="text" name="desc" value="{{ $contacts->description }}" class="form-control" id="exampleInputPassword1" >
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Expertise</label>
                                @foreach($expertise as $key => $item)
                                    <input type="text" name="expertise[]" value="{{ $item }}" class="form-control mb-2">
                                    <input type="hidden" name="exp_id[]" value="{{$key}}">
                                @endforeach
                            </div>


                            <input type="hidden" name="about_id" value="{{ $contacts->id }}">
                            

                            

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <br><br>

                    <div class="mt-4">
                        <h1>Update About Preview</h1>
                        <form method="post" action="{{ route('update-about-video') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">About Preview</label>
                                <input type="file" name="about_video" value="{{ asset("about_videos/".$contacts->about_video) }}" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <input type="hidden" name="about_id" value="{{ $contacts->id }}">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <br><br>
                    
                    {{-- <div class="mt-4">
                        <h1>Add Archives Info</h1>
                        <form method="post" action="{{ route('updateAgif') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Video</label>
                                <input type="file" name="video" value="{{ asset("videos/".$archives->video) }}" class="form-control" id="exampleInputPassword1" >
                            </div>

                            <input type="hidden" name="arch_id" value="{{ $archives->id }}">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> --}}
                    

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Brebow Studio</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit">
                        <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin\vendor\jquery\jquery.min.js')}}"></script>
    <script src="{{asset('admin\vendor\bootstrap\js\bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin\vendor\jquery-easing\jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin\js\sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('admin\vendor\chart.js\Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin\js\demo\chart-area-demo.js')}}"></script>
    <script src="{{asset('admin\js\demo\chart-pie-demo.js')}}"></script>

</body>

</html>