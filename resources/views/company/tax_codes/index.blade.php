@extends('layouts.master')
@section('title')
    Company Type
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-users bg-blue"></i>
                    <div class="d-inline">
                        <h5>Tax Codes</h5>
                        <span>List of tax codes</span>
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
                            <a href="#">Tax Codes</a>
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
                        <button type="button" class="btn btn-sm btn-primary btn-rounded" data-toggle="modal"
                            data-target="#exampleModalCenter">Add tax codes</button>
                    </div>
                    <div class="col col-sm-1">
                        <div class="card-options d-inline-block">
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
                                <tr>
                                    <th style="width: 63px;">Tax Name</th>
                                    <th style="width: 63px;">Tax Index</th>
                                    <th style="width: 63px;">Tax Code</th>
                                    <th style="width: 63px;">Tax Rate</th>
                                    <th style="width: 63px;" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($taxes as $key)
                                    <tr>
                                        <td>{{ $key['taxName'] }}</td>
                                        <td>{{ $key['taxIndex'] }}</td>
                                        <td>{{ $key['taxCode'] }}</td>
                                        <td>{{ $key['taxRate'] }}</td>

                                        <td class="text-center">
                                            <div class="dropdown d-inline-block">
                                                <a class="nav-link dropdown-toggle" href="#" id="moreDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ik ik-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">


                                                    <a class="dropdown-item" href="#accountEdit" data-toggle="modal"
                                                        data-target="#setedit{{ $key['id'] }}">
                                                        <i class="ik ik-edit"></i> Edit </a>

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

    {{-- ======================================== Add Tax Code ================================================== --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterLabel">Add Tax Code</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ url('efris/tax-codes/store') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title">Tax Index<span class="text-red">*</span></label>
                            <input id="title" type="text" class="form-control" placeholder="Tax Index"
                                name="taxIndex" required="">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="title">Tax Code<span class="text-red">*</span></label>
                            <input id="title" type="text" class="form-control" placeholder="Tax Code"
                                name="taxCode" required="">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="title">Tax Name<span class="text-red">*</span></label>
                            <input id="title" type="text" class="form-control" placeholder="Tax Name"
                                name="taxName" required="">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="title">Tax Rate<span class="text-red">*</span></label>
                            <input id="title" type="text" class="form-control" placeholder="Tax Rate"
                                name="taxRate" required="">
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ======================================== Edit Payment Mode ================================================== --}}
    @foreach ($taxes as $index => $key)
        <div class="modal fade" id="setedit{{ $key['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterLabel">Edit Tax Code</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ url('efris/tax-codes/update/' . $key['id']) }}" method="POST">
                        @csrf
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title">Tax Index<span class="text-red">*</span></label>
                                <input id="title" type="text" class="form-control" placeholder="Tax Index"
                                    value="{{ $key['taxIndex'] }}"
                                    name="taxIndex" required="">
                                <div class="help-block with-errors"></div>
                            </div>
    
                            <div class="form-group">
                                <label for="title">Tax Code<span class="text-red">*</span></label>
                                <input id="title" type="text" class="form-control" placeholder="Tax Code"
                                value="{{ $key['taxCode'] }}"
                                    name="taxCode" required="">
                                <div class="help-block with-errors"></div>
                            </div>
    
                            <div class="form-group">
                                <label for="title">Tax Name<span class="text-red">*</span></label>
                                <input id="title" type="text" class="form-control" placeholder="Tax Name"
                                value="{{ $key['taxName'] }}"
                                    name="taxName" required="">
                                <div class="help-block with-errors"></div>
                            </div>
    
                            <div class="form-group">
                                <label for="title">Tax Rate<span class="text-red">*</span></label>
                                <input id="title" type="text" class="form-control" placeholder="Tax Rate"
                                value="{{ $key['taxRate'] }}"
                                    name="taxRate" required="">
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


    {{-- ======================================== Delete Payment Mode ================================================== --}}
    @foreach ($taxes as $index => $key)
        <div class="modal fade" id="delete{{ $key['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ url('efris/tax-codes/delete/' . $key['id']) }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <span>Are you sure, You want to Delete this ?</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
