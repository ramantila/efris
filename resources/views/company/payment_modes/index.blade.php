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
                        <h5>Payment Modes</h5>
                        <span>List of payment modes</span>
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
                            <a href="#">Payment Modes</a>
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
                            data-target="#exampleModalCenter">Add payment modes</button>
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
                                    <th style="width: 63px;">Name</th>
                                    <th style="width: 63px;">Value</th>
                                    <th style="width: 63px;" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($modes as $key)
                                    <tr>
                                        <td>{{ $key['name'] }}</td>
                                        <td>{{ $key['value'] }}</td>

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

    {{-- ======================================== Add Payment Mode ================================================== --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterLabel">Add Payment Mode</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ url('efris/payment-modes/store') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title">Payment Mode Name<span class="text-red">*</span></label>
                            <input id="title" type="text" class="form-control" placeholder="Currency Name"
                                name="name" required="">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="title">Payment Mode Value<span class="text-red">*</span></label>
                            <input id="title" type="text" class="form-control" placeholder="Currency Value"
                                name="value" required="">
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
    @foreach ($modes as $index => $key)
        <div class="modal fade" id="setedit{{ $key['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterLabel">Edit Payment Mode</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ url('efris/payment-modes/update/' . $key['id']) }}" method="POST">
                        @csrf
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title">Payment Mode Name<span class="text-red">*</span></label>
                                <input id="title" type="text" class="form-control" placeholder="Currency Name"
                                    value="{{ $key['name'] }}"
                                    name="name" required="">
                                <div class="help-block with-errors"></div>
                            </div>
    
                            <div class="form-group">
                                <label for="title">Payment Mode Value<span class="text-red">*</span></label>
                                <input id="title" type="text" class="form-control" placeholder="Currency Value"
                                value="{{ $key['value'] }}"
                                    name="value" required="">
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
    @foreach ($modes as $index => $key)
        <div class="modal fade" id="delete{{ $key['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ url('efris/payment-modes/delete/' . $key['id']) }}" method="POST">
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
