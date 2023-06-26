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
                        <h5>Company</h5>
                        <span>Adding Company</span>
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
                    <h3>Add The Company</h3>
                    <div class="card-header-right">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <form action="{{ url('companies/store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title1">Company Name<span class="text-red">*</span></label>
                                            <input id="title1" type="name" class="form-control" name="companyName"
                                                 placeholder="Company Name" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="title2">Company Type<span class="text-red">*</span></label>
                                            <select class="form-control select2" name="type" required="">
                                                <option value="">Select Package Type</option>
                                                @foreach($companyTypes as  $key)
                                                    <option value="{{ $key['id'] }}">{{ $key['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mr-">
                                        <div class="form-group">
                                            <label for="title3">Company Type Name<span class="text-red">*</span></label>
                                            <input id="title3" type="number" class="form-control" placeholder="Company Type Name"
                                            name="companyTypeName"required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title4">Tin Number<span class="text-red">*</span></label>
                                            <input id="title4" type="number" class="form-control" placeholder="Tin Number"
                                            name="tinNumber" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-md-6 mr-">
                                            <div class="form-group">
                                                <label for="title5">Vrn<span class="text-red">*</span></label>
                                                <input id="title5" type="number" class="form-control"  placeholder="VRN"
                                                name="vrn"required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title6">Tax Office<span class="text-red">*</span></label>
                                                <input id="title6" type="number" class="form-control"  placeholder="taxOffice "
                                                name="taxOffice"required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row">
                                            <div class="col-md-6 mr-">
                                                <div class="form-group">
                                                    <label for="title7">Contact Person Name<span class="text-red">*</span></label>
                                                    <input id="title7" type="number" class="form-control"   placeholder="Contact Person Name"
                                                    name="contactPersonName" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="title8">Contact person No.<span class="text-red">*</span></label>
                                                    <input id="title8" type="number" class="form-control" laceholder="Contact Person Phone"
                                                    name="contactPersonPhone" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                            <div class="row">
                                                <div class="col-md-6 mr-">
                                                    <div class="form-group">
                                                        <label for="title9">Contact Person Email<span class="text-red">*</span></label>
                                                        <input id="title9" type="number" class="form-control"    placeholder="Contact Person Email"
                                                        name="contactPersonEmail" required="">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="title0">Contact person No.<span class="text-red">*</span></label>
                                                        <input id="title0" type="number" class="form-control" laceholder="Contact Person Phone"
                                                        name="contactPersonPhone" required="">
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




