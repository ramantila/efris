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
                        <h5>Branches</h5>
                        <span>Create Branch</span>
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
                            <a href="#">Sale</a>
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
                    <h3>Adding Branches</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <form action="{{ url('efris/branches/store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Branch Name<span class="text-red">*</span></label>
                                            <input id="title" type="number" class="form-control" placeholder="Branch Name"
                                            name="name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Is Main Branch<span class="text-red">*</span></label>
                                            <select class="form-control select2" name="isMainBranch" required="">
                                            {{-- <select id="cat" name="isMainBranch" required=""> --}}
                                            <option value="True">True</option>
                                            <option value="False">False</option>

                                        </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">

                                            <label for="title">Select The company<span class="text-red">*</span></label>
                                            <label for="title2">Company Type<span class="text-red">*</span></label>
                                            <select class="form-control select2" name="type" required="">
                                                <option value="">Select Package Type</option>
                                                @foreach($company as $key)
                                                    <option value="{{ $key['id'] }}">{{ $key['companyName'] }}</option>
                                                @endforeach
                                            </select>



                                            {{-- <select id="cat2" class= "form-select"  name="isMainBranch" required="">
                                                <option value="">Select The company</option>
                                                @foreach ($company as $key)
                                                    <option value="{{ $key['id'] }}">{{ $key['companyName'] }}</option>
                                                @endforeach
                                            </select> --}}
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Branch Code<span class="text-red">*</span></label>
                                            <input id="title" type="number" class="form-control" placeholder="Branch Code"
                                            name="companyId" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

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
@endsection
