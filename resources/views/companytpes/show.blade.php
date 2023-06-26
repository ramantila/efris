@extends('layouts.master')
@section('title')
    Package Type
@endsection
@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-users bg-blue"></i>
                    <div class="d-inline">
                        <h5>Package Type</h5>
                        <span>List of package type</span>
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
                            <a href="#">Package Type</a>
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
                        data-target="#exampleModalCenter">Add Package Type</button>
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
                                <tr>
                                    <th style="width: 63px;">#</th>
                                    {{-- <th style="width: 63px;">ID</th> --}}
                                    <th style="width: 63px;">Name</th>
                                    <th style="width: 63px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companytype as $index => $comtype)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        {{-- <td>{{ $comtype['id'] }}</td> --}}
                                        <td>{{ $comtype['name'] }}</td>
                                        {{-- <td>{{ $comtype['companyTypeName'] }}</td> --}}

                                        <td>
                                            <a class="add-btn"
                                               href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/types"><i
                                                        class="fas fa-eye"></i> <span
                                                        class="remove-mobile"><span></span></span></a>

                                            <a class="add-btn"
                                               href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/types"><i
                                                        class="fas fa-pencil-alt"></i> <span
                                                        class="remove-mobile"><span></span></span></a>

                                            <a class="add-btn"
                                               href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/types"><i
                                                        class="fas fa-trash"></i> <span
                                                        class="remove-mobile"><span></span></span></a>
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

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterLabel">Create Debt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ url('company-types/store') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="title">Comapany Type Name<span class="text-red">*</span></label>
                        <input id="title" type="text" class="form-control" placeholder="Company Type Name"
                        name="name"
                        required="">
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
@endsection
