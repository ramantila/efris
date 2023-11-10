@extends ('layouts.master')
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
                {{-- @if ($tinNumber != '') --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <form action="{{ url('companies/completeprofile/') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mr-">
                                            <div class="form-group">
                                                <label for="title">Company<span class="text-red">*</span></label>
                                                <input id="title" type="text"
                                                    class="form-control" value="{{$company['id']}}" placeholder="Company Name" name="company"
                                                    required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Short Code<span class="text-red">*</span></label>
                                                <input id="title" name="shortCode" value=""
                                                    type="text" class="form-control" placeholder="Unique Short code"
                                                    required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="row">
                                        <div class="col-md-6 mr-">
                                            <div class="form-group">

                                                <label for="title">Sms Receipts<span class="text-red">*</span></label>
                                                <label for="title2"><span class="text-red">*</span></label>
                                                <select class="form-control select2" name="contactPersonIdType" required="">
                                                    <option value="true">True</option>
                                                    <option value="false">False</option>
                                                </select>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                         {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Id Number<span class="text-red">*</span></label>
                                                <input id="title"
                                                    value="" type="text"
                                                    class="form-control" placeholder="Id Number" name="contactPersonIdNumber"
                                                    required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div> --}}

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
    </div>


@endsection

{{-- @endsection --}}
