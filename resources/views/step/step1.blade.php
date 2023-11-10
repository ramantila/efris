@extends('layouts.master')
@section('title')
    Company
@endsection
@section('content')
    {{--
<form method="post" action="{{ url('step1') }}">
    @csrf --}}
    <!-- Step 1 form fields -->
    {{-- <input type="text" name="field1">
    <input type="text" name="field2">
    <button type="submit">Next</button>
</form> --}}


    {{-- @section('content') --}}

    @if(isset($error))
    <div class="alert alert-danger">
        <strong>Error:</strong> {{ $error }}
    </div>
@endif

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-users bg-blue"></i>
                    <div class="d-inline">
                        <h5>Step1</h5>
                        <span>Add Details</span>
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
                            <a href="#">Company</a>
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
                    <h3>Adding Company</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                @if ($tinNumber != '')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <form action="{{ url('companies/store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mr-">
                                            <div class="form-group">
                                                <label for="title">Company Name<span class="text-red">*</span></label>
                                                <input id="title" type="text"
                                                    class="form-control" value="{{ $company->businessName }}" placeholder="Company Name" name="name"
                                                    required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Tin Number<span class="text-red">*</span></label>
                                                <input id="title" name="tin" value="{{ $company->tin }}"
                                                    type="number" class="form-control" placeholder="Tin Number"
                                                    required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mr-">
                                            <div class="form-group">

                                                <label for="title">Select<span class="text-red">*</span></label>
                                                <label for="title2">Company Type<span class="text-red">*</span></label>
                                                <select class="form-control select2" name="companyType" required="">
                                                    <option value="">Select Package Type</option>
                                                    @foreach ($companytype as $key)
                                                        <option value="{{ $key['id'] }}">{{ $key['name']}}</option>
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

                                        <div class="col-md-6 mr-">
                                            <div class="form-group">
                                                <label for="title">Contact Person Name <span class="text-red">*</span></label>
                                                <input id="title" type="text"
                                                    class="form-control"  placeholder=" Name" name="contactFullName"
                                                    required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mr-">
                                            <div class="form-group">
                                                <label for="title">Contact Number<span class="text-red">*</span></label>
                                                <input id="title" name="contactPersonPhoneNumber"
                                                    value="{{ $company->contactNumber }}" type="text"
                                                    class="form-control" placeholder="Representative Number"
                                                    required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Contact Person Email<span
                                                        class="text-red">*</span></label>
                                                <input id="title"
                                                value=""  type="text"
                                                    class="form-control" placeholder="Contact Person Email" name="emailAddress"
                                                    required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mr-">
                                            <div class="form-group">

                                                <label for="title">Select<span class="text-red">*</span></label>
                                                <label for="title2">ID Type<span class="text-red">*</span></label>
                                                <select class="form-control select2" name="contactPersonIdType" required="">
                                                    <option value="NIDA">NIDA</option>
                                                    <option value="PASSPORT">Passport</option>
                                                </select>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Id Number<span class="text-red">*</span></label>
                                                <input id="title"
                                                    value="" type="text"
                                                    class="form-control" placeholder="Id Number" name="contactPersonIdNumber"
                                                    required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                    </div>

                                   {{-- <div class="row">
                                        <div class="col-md-12 mr-">
                                            <div class="form-group">
                                                <label for="title">Id Number<span class="text-red">*</span></label>
                                                <input id="title" name="contactPersonIdNumber"
                                                    value="contactPersonIdNumber" type="text" class="form-control"
                                                    placeholder="Id Number" name="branchCode" required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="row">
                                        <div class="col-md-6 mr-">

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-primary">Next</button>
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
    </div>
@else
<div class="card">
    <div class="card-body">
<div style="text-align: center"><h1>Tin Is Empty </h1></div></div></div>
    @endif
@endsection

{{-- @endsection --}}
