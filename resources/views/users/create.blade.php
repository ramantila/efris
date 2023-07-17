@extends('layouts.master')
@section('title')
    Company
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-users bg-blue"></i>
                    <div class="d-inline">
                        <h5>Users</h5>
                        <span>Create Users</span>
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
                <div class="card-header">
                    <h3>Create Users</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <form action="{{ url('efris/users/store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Full Name<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" name="fullName"
                                                 placeholder="Full Name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Email<span class="text-red">*</span></label>
                                            <input id="title" type="email" class="form-control" name="email"
                                                 placeholder="Email" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Phone Number<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" name="phoneNumber"
                                                  placeholder="Phone Number" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Role<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" name="role"
                                                  placeholder="Role" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>

                                
                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Password<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" name="password"
                                                  placeholder="password" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Confirm Password<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" name="confirmPassword"
                                                  placeholder="confirm" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>


                                {{-- details company --}}

                                <div class="row">
                                    <div class="col-md-12 mr-">
                                        <div class="form-group">
                                            <label for="title2">Company<span class="text-red">*</span></label>
                                            <select class="form-control select2" name="companyName" onselect="this.className = '' required="">
                                                <option value="">Select Comapny Name</option>
                                                @foreach($companydetails as  $key)
                                                    <option value="{{ $key['id'] }}">{{ $key['companyName'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-6">
                                        <div class="form-group">Branch<span class="text-red">*</span></label>
                                            <select class="form-control select2" name="companyType" onselect="this.className = '' required="">
                                                <option value="">Select Branch </option>
                                                @foreach($branchdetails as  $key)
                                                    <option value="{{ $key['id'] }}">{{ $key['name'] }}</option>
                                                @endforeach
                                            </select>
                                    </div> --}}

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
