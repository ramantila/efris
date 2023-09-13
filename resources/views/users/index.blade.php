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
                                        <th style="width: 60px;">Email </th>
                                        <th style="width: 63px;">Phone no</th>
                                        {{-- <th style="width: 63px;">Registration date</th> --}}
                                        <th style="width: 60px;">Role</th>

                                        <th style="width: 63px;">Action</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($users as $index => $key)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $key['fullName'] }}</td>
                                        <td>{{ $key['email'] }}</td>
                                        <td>{{ $key['phoneNumber'] }}</td>
                                        <td>{{ $key['role'] }}</td>

                                        <td class="text-center">
                                            <div class="dropdown d-inline-block">
                                                <a class="nav-link dropdown-toggle" href="#" id="moreDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ik ik-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">


                                                    <a class="dropdown-item"
                                                        href="{{ url('efris/users/userdetails/' . $key['id']) }}"><i
                                                            class="ik ik-edit"></i> View </a>

                                                    <a class="dropdown-item" href="#accountEdit" data-toggle="modal"
                                                        data-target="#setedit{{ $key['id'] }}">
                                                        <i class="ik ik-edit"></i> Change Password </a>

                                                    <a class="dropdown-item"
                                                        href="{{ url('efris/users/edit/' . $key['id']) }}"><i
                                                            class="ik ik-edit"></i> Edit </a>

                                                    <a class="dropdown-item" href="#accountEdit" data-toggle="modal"
                                                        data-target="#delete{{ $key['id'] }}">
                                                        <i class="ik ik-trash"></i> Delete </a>

                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>


                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ======================================== Edit Currency ================================================== --}}
    @foreach ($users as $index => $key)
        <div class="modal fade" id="setedit{{ $key['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ url('efris/users/change-password/update/'. $key['id']) }}" method="POST">
                        @csrf
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title">Password<span class="text-red">*</span></label>
                                <input id="title" type="password" class="form-control" name="password"
                                    placeholder="password" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label for="title">Confirm Password<span class="text-red">*</span></label>
                                <input id="title" type="password" class="form-control" name="confirmPassword"
                                    placeholder="confirm" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
