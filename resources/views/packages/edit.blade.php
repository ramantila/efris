@extends('layouts.master')
@section('title')
   Packages
@endsection

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-users bg-blue"></i>
                    <div class="d-inline">
                        <h5>Packages</h5>
                        <span>Update Package</span>
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
                            <a href="#">Packages</a>
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
                    <h3>Adding Packages</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <form action="{{ url('efris/package/store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Package Name<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" placeholder="Name"
                                            name="name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{--  <label for="title"><span class="text-red">*</span></label>  --}}
                                           <label for="title2">Package Type<span class="text-red">*</span></label>
                                           <select class="form-control select2" name="packagesId" required="">
                                            <option value="">Select Package Type</option>
                                            {{-- @foreach($packagesTypes as  $key)
                                                <option value="{{ $key['id'] }}">{{ $key['name'] }}</option>
                                            @endforeach --}}
                                        </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>
                                

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title"> Price <span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" placeholder="Price"
                                            name="price" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mr-">
                                         <div class="form-group">
                                            <label for="title">Renewal Price<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" placeholder="Renewal Price"
                                            name="renewalPrice" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title">Number of users<span class="text-red">*</span></label>
                                            <input id="title" type="text" class="form-control" placeholder="Number of users"
                                            name="noUsers" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Number of Branches<span class="text-red">*</span></label>
                                            <input id="title" type="number" class="form-control" placeholder="Number of Branches"
                                            name="noBranches" required="">
                                            <div class="help-block with-errors"></div>
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
