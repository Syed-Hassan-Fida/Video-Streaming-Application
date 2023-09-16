<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                
                <div class="sidebar-brand-text">
                    <img src="{{asset('images\Black Background Logotype.png')}}" height="28">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}">
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

            
            <hr class="sidebar-divider">

            

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

                    <!-- Topbar Search -->
                    

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
                    <br>
                    <table class="table table-hover">
                        <h3>Contact Info</h3>
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Line</th>
                            <th scope="col">About</th>
                            <th scope="col">Expertise</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if($contacts)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$contacts->title}}</td>
                                    <td>{{$contacts->line}}</td>
                                    <td>{{$contacts->description}}</td>
                                    <td>
                                        @foreach($expertise as $item)
                                            {{$item}} -- 
                                        @endforeach
                                    </td>

                                    <td>
                                        <a href="{{ route('about-edit-view', ['id'=>$contacts->id]) }}" style="color: green; text-decoration: none;">Edit</a>
                                        <a href="{{ route('deleteContact', ['id'=>$contacts->id]) }}" style="color: red; text-decoration: none;">Delete</a>
                                    </td>
                                </tr>
                            @else
                                <tr><td><p>No Records</p></td></tr>
                            @endif
                        </tbody>
                    </table>
                    <br><br>
                    
                    <table class="table table-hover">
                        <h3>Home Previews Info <a class="btn btn-primary" href="{{ route("home-order-view") }}">Order The Home Videos</a></h3>
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Col1--Col2</th>
                            {{-- <th scope="col">Col2</th> --}}
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if(sizeof($homeVideos) > 0)
                                @foreach ($homeVideos as $key => $homeVideo)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{$homeVideo->title}}</td>
                                    @php
                                        $homeVideoInfo = [];
                                        $homeVideoInfo = DB::table("home_video_infos")->where("home_id",  $homeVideo->id)->get();
                                    @endphp
                                    @if(sizeof($homeVideoInfo) > 0)
                                    <td>
                                        @foreach ($homeVideoInfo as $homeinfo)
                                            {{$homeinfo->col1}}--{{$homeinfo->col2}}<br>
                                            {{-- <td>{{$homeinfo->col2}}</td> --}}
                                        @endforeach
                                    </td>
                                    @else
                                        <td>Not Defined</td>
                                        {{-- <td>Not Defined</td> --}}
                                    @endif
                                    <td>
                                        <a href="{{ route('home-video-edit-view', ['id'=>$homeVideo->id]) }}" style="color: green; text-decoration: none;">Edit</a>

                                        <a href="{{ route('deletePertners', ['id'=>$homeVideo->id]) }}" style="color: red; text-decoration: none;">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr><td><p>No Records</p></td></tr>
                            @endif
                        </tbody>
                    </table>
                    <br><br>

                    <table class="table table-hover">
                        <h3>Home Main Preview Info</h3>
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Col1--Col2</th>
                            {{-- <th scope="col">Col2</th> --}}
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if(sizeof($homeSingleVideos) > 0)
                                @foreach ($homeSingleVideos as $key => $homeSingleVideo)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{$homeSingleVideo->title}}</td>
                                    @php
                                        $homeSingleVideoInfo = [];
                                        $homeSingleVideoInfo = DB::table("single_video_infos")->where("home_id",  $homeSingleVideo->id)->get();
                                    @endphp
                                    @if(sizeof($homeSingleVideoInfo) > 0)
                                    <td>
                                        @foreach ($homeSingleVideoInfo as $homeinfo)
                                            {{$homeinfo->col1}}--{{$homeinfo->col2}}<br>
                                            {{-- <td>{{$homeinfo->col2}}</td> --}}
                                        @endforeach
                                    </td>
                                    @else
                                        <td>Not Defined</td>
                                        {{-- <td>Not Defined</td> --}}
                                    @endif
                                    <td>
                                        <a href="{{ route('home-single-video-edit-view', ['id'=>$homeSingleVideo->id]) }}" style="color: green; text-decoration: none;">Edit</a>

                                        <a href="{{ route('home-single-video-delete', ['id'=>$homeSingleVideo->id , 'public_id' => $homeSingleVideo->public_id]) }}" style="color: red; text-decoration: none;">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr><td><p>No Records</p></td></tr>
                            @endif
                        </tbody>
                    </table>
                    <br><br>
                    <table class="table table-hover">
                        <h3>Archives Info <a class="btn btn-primary" href="{{ route("check-order-view") }}">Order The Archives</a></h3>
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Project</th>
                            <th scope="col">Client</th>
                            <th scope="col">Production</th>
                            <th scope="col">Industry</th>
                            {{-- <th scope="col">Title</th>
                            <th scope="col">Creative Direction</th>
                            <th scope="col">Production</th>
                            <th scope="col">Music and Sound Design</th>
                            <th scope="col">Design and Motion Design</th> --}}
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if(sizeof($archives) > 0)
                                @foreach ($archives as $key => $archive)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{$archive->year}}</td>
                                    <td>{{$archive->client}}</td>
                                    <td>{{$archive->project}}</td>
                                    <td>{{$archive->industry}}</td>
                                    {{-- <td>{{$archive->title}}</td>
                                    <td>{{$archive->creativeDir}}</td>
                                    <td>{{$archive->production}}</td>
                                    <td>{{$archive->music}}</td>
                                    <td>{{$archive->design}}</td> --}}
                                    <td>
                                        <a href="{{ route('updateA',  ['id'=>$archive->id]) }}" style="color: green; text-decoration: none;">Edit</a>
                                        <a href="{{ route('deleteArchives', ['id'=>$archive->id]) }}" style="color: red; text-decoration: none;">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                            <tr><td><p>No Records</p></td></tr>
                            @endif
                        </tbody>
                    </table>
                   

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