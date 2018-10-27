<?php $i = 0;?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="{{route('admin.index')}}">Boshqaruv Paneli</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Site Pages:</h6>
                <a class="dropdown-item" href="{{route('site.index')}}">Bosh Sahifa</a>
                <a class="dropdown-item" href="{{route('site.faculty')}}">Fakultetlar</a>
                <a class="dropdown-item" href="{{route('site.teacher')}}">O'qituvchilar</a>
                <a class="dropdown-item" href="{{route('site.news')}}">Yangiliklar</a>
                <a class="dropdown-item" href="{{route('site.student')}}">Talabalar uchun</a>

            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('faculties.index')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Fakultetlar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('departments.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Kafedralar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('teachers.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>O'qituvchilar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('subjects.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Fanlar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('groups.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Guruhlar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Talabalar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('news.index')}}">
                <i class="fas fa-fw fa-table"></i>
                <span>Yangiliklar</span></a>
        </li>
    </ul>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.index')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Guruhlar</li>
            </ol>



            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <i class="fas fa-table"></i>
                           Guruhlar ro'yhati
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('groups.create')}}" role="button" class="btn  btn-primary">Kiritish</a>
                        </div>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th width="6%">#</th>
                                <th>Guruh nomi</th>
                                <th>Fakulteti</th>
                                <th  width="5%"></th>
                                <th  width="5%"></th>
                                <th  width="5%"></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th width="6%">#</th>
                                <th>Guruh nomi</th>
                                <th>Fakulteti</th>
                                <th  width="5%"></th>
                                <th  width="5%"></th>
                                <th  width="5%"></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($groups as $group)
                                <tr>
                                    <td> {{$i+=1}}</td>
                                    <td>{{$group->name}}</td>
                                    <td>{{$group->faculty->name}}</td>
                                    <td>
                                        <a href="{{ route('groups.show',['id'=>$group->id]) }}" class="btn btn-default btn-icon">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('groups.edit',['id'=>$group->id]) }}" class="btn btn-default btn-icon">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('groups.destroy',['id'=>$group->id]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button class="btn btn-default btn-icon deleteData"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2018</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin.min.js')}}"></script>

<script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
<!-- Demo scripts for this page-->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>

</body>

</html>
