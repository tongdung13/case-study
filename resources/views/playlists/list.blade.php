<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Dashboard - SB Admin</title>
    <link href="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/css/styles.css')}}" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
          crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
            crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('playlists.index')}}">
        MusicD2T</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                   aria-describedby="basic-addon2"/>
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/login.html')}}">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{route('playlists.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Home
                    </a>
                    <div class="sb-sidenav-menu-heading">List</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                       aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        List Music
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link"
                               href="{{route('category.index')}}">Category</a>
                            <a class="nav-link"
                               href="{{route('country.index')}}">Country</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                       aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                               data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                 data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link"
                                       href="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/login.html')}}login.html">Login</a>
                                    <a class="nav-link"
                                       href="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/register.html')}}register.html">Register</a>
                                    <a class="nav-link"
                                       href="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/password.html')}}password.html">Forgot
                                        Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                               data-target="#pagesCollapseError" aria-expanded="false"
                               aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                 data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link"
                                       href="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/401.html')}}">401
                                        Page</a>
                                    <a class="nav-link"
                                       href="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/404.html')}}">404
                                        Page</a>
                                    <a class="nav-link"
                                       href="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/500.html')}}">500
                                        Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/charts.html')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/tables.html')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in by:</div>
                Admin
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Manage playlists</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">MusicD2T</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Primary Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Warning Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Success Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Danger Card</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        List Music
                        <a class="btn btn-success" href="{{route('category.create')}}">ADD</a>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false">Cancel</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name music</th>
                                    <th>Singer</th>
                                    <th>Category</th>
                                    <th>Country</th>
                                    <th>Image</th>
                                    <th>Audio</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Name music</th>
                                    <th>Singer</th>
                                    <th>Category</th>
                                    <th>Country</th>
                                    <th>Image</th>
                                    <th>Audio</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($playlists as $key => $playlist)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>
                                            {{ $playlist->music_name }}

                                        </td>
                                        <td>{{ $playlist->singer }}</td>
                                        <td>{{ $playlist->category->category_name }}</td>
                                        <td>{{ $playlist->country->country_name }}</td>
                                        <td>
                                            <img src="{{ url('storage/' . $playlist->image) }}" height="100px"
                                                 width="100px">
                                        </td>
                                        <td>
                                            {{--                                            <a href="{{ route('playlists.show', $playlist->id) }}">{{ $playlist->audio }}</a>--}}
                                            <audio controls>
                                                <source src="{{ url('storage/audio/' . $playlist->audio) }}"
                                                        type="audio/mp3">
                                                Your browser does not support the audio element.
                                                </audio>
                                        </td>
                                        <td>
                                            <a href="{{ route('playlists.edit', $playlist->id) }}"
                                               class="btn btn-success">Update</a>
                                            <a href="{{ route('playlists.destroy', $playlist->id) }}"
                                               class="btn btn-danger"
                                               onclick="return confirm('Do you delete?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="{{asset('backend/startbootstrap-sb-admin-gh-pages/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="{{asset('backend/startbootstrap-sb-admin-gh-pages/dist/assets/demo/datatables-demo.js')}}"></script>
</body>
</html>

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>Title</title>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<form>--}}
{{--    <a class="btn btn-success" href="{{route('category.create')}}">ADD</a>--}}
{{--    <button class="btn btn-secondary" onclick="window.history.go(-1); return false">Cancel</button>--}}
{{--    <table class="table">--}}
{{--        <tr>--}}
{{--            <th>STT</th>--}}
{{--            <th>NAME CATEGORY</th>--}}
{{--            <th>ACTION</th>--}}
{{--        </tr>--}}
{{--        @forelse($categories as $key=>$category)--}}
{{--            <tr>--}}
{{--                <td>{{++$key}}</td>--}}
{{--                <td>{{$category->category_name}}</td>--}}
{{--                <td>--}}
{{--                    <a class="btn btn-success" href="{{route('category.edit',$category->id)}}">EDIT</a>--}}
{{--                    <a class="btn btn-danger" href="{{route('category.destroy',$category->id)}}" onclick="return confirm('Do you delete?')">DELETE</a>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>No data</tr>--}}
{{--        @endforelse--}}
{{--    </table>--}}
{{--</form>--}}
{{--<!-- Optional JavaScript -->--}}
{{--<!-- jQuery first, then Popper.js, then Bootstrap JS -->--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"--}}
{{--        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"--}}
{{--        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}

{{--@extends('layouts.app')--}}

{{--@section('title', 'list music')--}}

{{--@section('content')--}}

{{--    <div class="container">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                List Mucsic--}}
{{--            </div>--}}
{{--            <div class="card-header">--}}
{{--                <a href="{{ route('playlists.create') }}" class="btn btn-primary">Add</a>--}}
{{--                <a href="{{ route('category.index') }}" class="btn btn-primary">Category</a>--}}
{{--                <a href="{{ route('country.index') }}" class="btn btn-primary">Country</a>--}}
{{--            </div>--}}
{{--            <div class="table">--}}
{{--                <table class="table table-striped">--}}
{{--                    <thead>--}}
{{--                        <tr>--}}
{{--                            <th>#</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Singer</th>--}}
{{--                            <th>Category</th>--}}
{{--                            <th>Country</th>--}}
{{--                            <th>Image</th>--}}
{{--                            <th>Audio</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                        @foreach($playlists as $key => $playlist)--}}
{{--                            <tr>--}}
{{--                                <td>{{ ++$key }}</td>--}}
{{--                                <td>--}}
{{--                                    {{ $playlist->music_name }}--}}

{{--                                </td>--}}
{{--                                <td>{{ $playlist->singer }}</td>--}}
{{--                                <td>{{ $playlist->category->category_name }}</td>--}}
{{--                                <td>{{ $playlist->country->country_name }}</td>--}}
{{--                                <td>--}}
{{--                                   <img src="{{ url('storage/' . $playlist->image) }}" style="width: 100px">--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{ route('playlists.show', $playlist->id) }}">{{ $playlist->audio }}</a>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{ route('playlists.edit', $playlist->id) }}" class="btn btn-success">Update</a>--}}
{{--                                    <a href="{{ route('playlists.destroy', $playlist->id) }}" class="btn btn-danger" onclick="return confirm('Do you delete?')">Delete</a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                    </tbody>--}}

{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--@endsection--}}
