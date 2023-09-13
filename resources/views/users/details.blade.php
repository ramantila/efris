@extends('layouts.master')
@section('title')
    Users
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-users bg-blue"></i>
                    <div class="d-inline">
                        <h5>Users</h5>
                        <span>List of Users</span>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="https://radmin.themicly.com/dashboard"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Users</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- start message area-->
        <div class="col-md-12">
        </div> <!-- end message area-->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header row">
                    <div class="col col-sm-2">
                        <a href="{{ url('efris/users/create') }}" class="btn btn-sm btn-primary btn-rounded">Add User </a>
                    </div>
                    <div class="col col-sm-1">
                        <div class="card-options d-inline-block">

                            {{-- <div class="dropdown d-inline-block">
                                <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ik ik-more-horizontal"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">More Action</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col col-sm-6">

                    </div>
                    <div class="col col-sm-3">
                    </div>
                </div>
                <div class="card-body">
                    <div class="dt-responsive">
                        <table id="data_table" class="table">
                            <thead>
                                <thead>
                                    <tr>
                                        <th style="width: 20px;"># </th>
                                        <th style="width: 60px;">Full Name</th>
                                        <th style="width: 63px;">User Name </th>

                                        <th style="width: 60px;">Email </th>
                                        <th style="width: 63px;">Phone no</th>
                                        <th style="width: 63px;">Registration date</th>
                                        <th style="width: 60px;">Role</th>
                                         <th style="width: 60px;">Status</th>
                                         {{-- <th style="width: 60px;">Last Login</th> --}}

                                    </tr>
                                </thead>
                            <tbody>
                                {{-- @foreach ($user as $index => $key) --}}
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $user['fullName']}}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td>{{ $user['username'] }}</td>
                                        <td>{{ $user['phoneNumber'] }}</td>
                                        <td>{{ $user['registrationDate'] }}</td>
                                        <td>{{ $user['role'] }}</td>
                                        <td>{{ $user['status'] }}</td>



                                       

                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>


                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
