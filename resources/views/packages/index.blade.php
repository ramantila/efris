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
                        <span>List of Packages</span>
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
                <div class="card-header row">
                    <div class="col col-sm-2">
                            <a href="{{ url('efris/package/create') }}" class="btn btn-sm btn-primary btn-rounded">Add Company </a>
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
                                        <th style="width: 20px;">#</th>
                                        <th style="width: 60px;">Package Name</th>
                                        <th style="width: 60px;">Type</th>
                                        <th style="width: 63px;">Price</th>
                                        <th style="width: 63px;">Renewal Price</th>
                                        <th style="width: 60px;">No of Users</th>
                                        <th style="width: 60px;">No of Branches</th>
                                        <th style="width: 63px;">Created By</th>
                                        <th style="width: 63px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($packages as $index => $key)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $key['name'] }}</td>
                                            <td>{{ $key['packageTypeName'] }}</td>
                                            <td>{{ $key['price'] }}</td>
                                            <td>{{ $key['renewalPrice'] }}</td>
                                            <td>{{ $key['numberOfUsers'] }}</td>
                                            <td>{{ $key['numberOfBranches'] }}</td>
                                            <td>{{ $key['createdByName'] }}</td>
                                            <td>
                                                <a class="add-btn"
                                                   href=""><i
                                                            class="fas fa-eye"></i> <span
                                                            class="remove-mobile"><span></span></span></a>

                                                <a class="add-btn"
                                                   href="{{ url('efris/package/edit/'.$key['id']) }}"><i
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
@endsection
