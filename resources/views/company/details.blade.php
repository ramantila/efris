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
                        <span>List of company</span>
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
                <div class="card-body">
                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab" data-toggle="pill" href="#other-company"
                                role="tab" aria-controls="pills-company" aria-selected="true">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="services-tab" data-toggle="pill" href="#services-month" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Branch</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="other-tab" data-toggle="pill" href="#other-currency" role="tab"
                                aria-controls="pills-currency" aria-selected="false">Currencies</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="other-tab" data-toggle="pill" href="#other-product" role="tab"
                                aria-controls="pills-product" aria-selected="false">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="other-tab" data-toggle="pill" href="#other-customer" role="tab"
                                aria-controls="pills-customer" aria-selected="false">Customers</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="other-tab" data-toggle="pill" href="#other-unit" role="tab"
                                aria-controls="pills-unit" aria-selected="false">Measurement Units</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="other-company" role="tabpanel"
                            aria-labelledby="product-tab">
                            <div class="card-body">
                                <div class=" mt-0">
                                    <div class="dt-responsive">
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <td>#</td>
                                                    <th >Company Name</th>
                                                    <th >Company Type Name</th>
                                                    <th >Tin</th>
                                                    <th >Vrn</th>
                                                    <th >Tax office</th>
                                                    <th >Contact Person</th>
                                                    <th >Contact Person Email</th>
                                                    <th >Contact Phone</th>
                                                    <th >Sms Receipt</th>
                                                    <th >Created By Name</th>
                                                    <th >Total Receipt sent</th>
                                                    {{-- <th >Verification status</th> --}}
                                                    {{-- <th >Action</th> --}}
                                                    {{-- <th >Ver description</th> --}}
                                                    {{-- <th >ver stage</th> --}}
                                                    {{-- <th >Created</th> --}}
                                                    <th >Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($compantdetails as $index => $com) --}}
                                                <tr>
                                                    <td>1</td>
                                                    <td>{{ $companydetails['companyName'] }}</td>
                                                    <td>{{ $companydetails['companyTypeName'] }}</td>
                                                    <td>{{ $companydetails['tinNumber'] }}</td>
                                                    <td>{{ $companydetails['vrn'] }}</td>
                                                    <td>{{ $companydetails['taxOffice'] }}</td>
                                                    <td>{{ $companydetails['contactPersonName'] }}</td>
                                                    <td>{{ $companydetails['contactPersonEmail'] }}</td>
                                                    <td>{{ $companydetails['contactPersonPhone'] }}</td>
                                                    <td>{{ $companydetails['smsReceipts'] }}</td>
                                                    <td>{{ $companydetails['createdByName'] }}</td>
                                                    <td>{{ $companydetails['totalReceiptSent'] }}</td>
                                                    {{-- <td>{{ $com['status'] }}</td> --}}
                                                    {{-- <td>{{ $com['verificationStatus'] }}</td> --}}
                                                    {{-- <td>{{ $com['verificationStatusDescription'] }}</td> --}}
                                                    {{-- <td>{{ $com['verificationStage'] }}</td> --}}
                                                    {{-- <td>{{ $com['createdAt'] }}</td> --}}

                                                    <td>
                                                        <a class="add-btn"
                                                            href="{{ url('companies/details/' . $companydetails['id']) }}"><i
                                                                class="fas fa-eye"></i> <span
                                                                class="remove-mobile"><span></span></span></a>

                                                        <a class="add-btn"
                                                            href="{{ url('companies/edit/' . $companydetails['id']) }}"><i
                                                                class="fas fa-pencil-alt"></i> <span
                                                                class="remove-mobile"><span></span></span></a>

                                                        <a class="add-btn"
                                                            href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/types"><i
                                                                class="fas fa-trash"></i> <span
                                                                class="remove-mobile"><span></span></span></a>

                                                    </td>

                                                </tr>
                                                {{-- @endforeach --}}
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="services-month" role="tabpanel" aria-labelledby="services-tab">
                            <div class="card-body">
                                <div class="col col-sm-2 mb-4">
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded" data-toggle="modal"
                                        data-target="#exampleModalCenter">Add Branch</button>
                                </div>
                                <div class=" mt-0">
                                    <div class="dt-responsive">
                                        <table id="data_table" class="table">
                                            <thead>
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Branch Code</th>
                                                        <th>Status</th>
                                                        <th>Company Name</th>

                                                        <th>Created Name</th>
                                                        <th>createdAt</th>
                                                        <th>updatedAt</th>
                                                        <th>MainBranch</th>
                                                        {{-- <th>Action</th> --}}

                                                    </tr>
                                                </thead>
                                            <tbody>
                                                @foreach ($branchdetails as $index => $brn)
                                                <tr>
                                                    {{-- <td>{{ $index+1 }}</td> --}}
                                                    <td>1</td>
                                                    <td>{{ $branchdetails['name'] }}</td>
                                                    <td>{{ $branchdetails['branchCode'] }}</td>
                                                    <td>{{ $branchdetails['status'] }}</td>
                                                    <td>{{ $branchdetails['companyName'] }}</td>
                                                    <td>{{ $branchdetails['createdByName'] }}</td>
                                                    <td>{{ $branchdetails['createdAt'] }}</td>
                                                    <td>{{ $branchdetails['updatedAt'] }}</td>
                                                    <td>{{ $branchdetails['mainBranch'] }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>


                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="other-currency" role="tabpanel" aria-labelledby="other-tab">
                            <div class="card-body">
                                <div class="col col-sm-2 mb-4">
                                    <button type="button" class="btn btn-sm btn-primary btn-rounded" data-toggle="modal"
                                        data-target="#exampleModalCenter">Add Currencies</button>
                                </div>
                                <div class=" mt-0">
                                    <table id="data_table" class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 63px;">#</th>
                                                <th style="width: 63px;">Name</th>
                                                <th style="width: 63px;">Code</th>
                                                <th style="width: 63px;" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($currencies as $key)
                                                <tr>
                                                    <td>{{ $key['value'] }}</td>
                                                    <td>{{ $key['name'] }}</td>
                                                    <td>{{ $key['code'] }}</td>

                                                    <td class="text-center">
                                                        <div class="dropdown d-inline-block">
                                                            <a class="nav-link dropdown-toggle" href="#"
                                                                id="moreDropdown" role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="ik ik-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">


                                                                <a class="dropdown-item" href="#accountEdit"
                                                                    data-toggle="modal"
                                                                    data-target="#setedit{{ $key['value'] }}">
                                                                    <i class="ik ik-edit"></i> Edit </a>

                                                                <a class="dropdown-item" href="#accountEdit"
                                                                    data-toggle="modal"
                                                                    data-target="#delete{{ $key['value'] }}">
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

                        <div class="tab-pane fade" id="other-product" role="tabpanel" aria-labelledby="other-tab">
                            <div class="card-body">
                                <div class=" mt-0">
                                    <table id="data_table" class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 63px;">#</th>
                                                <th style="width: 63px;">Name</th>
                                                <th style="width: 63px;">Code</th>
                                                <th style="width: 63px;">Type</th>
                                                <th style="width: 63px;">Category</th>
                                                <th style="width: 63px;">Unit</th>
                                                <th style="width: 63px;">Unit Price</th>
                                                <th style="width: 63px;">Currency</th>
                                                <th style="width: 63px;">Quantity</th>
                                                <th style="width: 63px;" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $index => $key)
                                                <tr>
                                                    <td>{{ 1 + $index }}</td>
                                                    <td>{{ $key['productName'] }}</td>
                                                    <td>{{ $key['productCode'] }}</td>
                                                    <td>{{ $key['productType'] }}</td>
                                                    <td>{{ $key['commodityCategory'] }}</td>
                                                    <td>{{ $key['measurementUnit'] }}</td>
                                                    <td>{{ $key['unitPrice'] }}</td>
                                                    <td>{{ $key['currency'] }}</td>
                                                    <td>{{ $key['quantity'] }}</td>

                                                    <td class="text-center">
                                                        <div class="dropdown d-inline-block">
                                                            <a class="nav-link dropdown-toggle" href="#"
                                                                id="moreDropdown" role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="ik ik-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">


                                                                <a class="dropdown-item" href="#accountEdit"
                                                                    data-toggle="modal"
                                                                    data-target="#setedit{{ $key['id'] }}">
                                                                    <i class="ik ik-edit"></i> Edit </a>

                                                                <a class="dropdown-item" href="#accountEdit"
                                                                    data-toggle="modal"
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

                        <div class="tab-pane fade" id="other-customer" role="tabpanel" aria-labelledby="other-tab">
                            <div class="card-body">
                                <div class=" mt-0">
                                    <table id="data_table" class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 63px;">#</th>
                                                <th style="width: 63px;">Name</th>
                                                <th style="width: 63px;">Legal Name</th>
                                                <th style="width: 63px;">TIN Number</th>
                                                <th style="width: 63px;">Tax Payer Type</th>
                                                <th style="width: 63px;">Phone Number</th>
                                                <th style="width: 63px;" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($customers as $index => $key)
                                                <tr>
                                                    <td>{{ 1 + $index }}</td>
                                                    <td>{{ $key['customerName'] }}</td>
                                                    <td>{{ $key['legalName'] }}</td>
                                                    <td>{{ $key['tinNumber'] }}</td>
                                                    <td>{{ $key['taxPayerType'] }}</td>
                                                    <td>{{ $key['phoneNumber'] }}</td>

                                                    <td class="text-center">
                                                        <div class="dropdown d-inline-block">
                                                            <a class="nav-link dropdown-toggle" href="#"
                                                                id="moreDropdown" role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="ik ik-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">


                                                                <a class="dropdown-item" href="#accountEdit"
                                                                    data-toggle="modal"
                                                                    data-target="#setedit{{ $key['id'] }}">
                                                                    <i class="ik ik-edit"></i> Edit </a>

                                                                <a class="dropdown-item" href="#accountEdit"
                                                                    data-toggle="modal"
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

                        <div class="tab-pane fade" id="other-unit" role="tabpanel" aria-labelledby="other-tab">
                            <div class="card-body">
                                <div class=" mt-0">
                                    <table id="data_table" class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 63px;">Name</th>
                                                <th style="width: 63px;">Value</th>
                                                <th style="width: 63px;">Description</th>
                                                <th style="width: 63px;" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($units as $key)
                                                <tr>
                                                    <td>{{ $key['name'] }}</td>
                                                    <td>{{ $key['value'] }}</td>
                                                    <td>
                                                        @if (isset($key['description']))
                                                            {{ $key['description'] }}
                                                        @endif
                                                    </td>

                                                    <td class="text-center">
                                                        <div class="dropdown d-inline-block">
                                                            <a class="nav-link dropdown-toggle" href="#"
                                                                id="moreDropdown" role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="ik ik-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">


                                                                <a class="dropdown-item" href="#accountEdit"
                                                                    data-toggle="modal"
                                                                    data-target="#setedit{{ $key['id'] }}">
                                                                    <i class="ik ik-edit"></i> Edit </a>

                                                                <a class="dropdown-item" href="#accountEdit"
                                                                    data-toggle="modal"
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
            </div>
        </div>
    </div>
    </div>
    {{-- ======================================== models ===================================== --}}

    {{-- ======================================== Add Currency ================================================== --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterLabel">Add Currency</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ url('companies/' . $id . '/storecurrency') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="">Select Debt Type </label>
                            <select class="form-control select2" id="currency" name="currency_id" required="">
                                <option value="">Select Currency</option>
                                @foreach ($currencies as $key)
                                @endforeach
                            </select>
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

        {{-- ======================================== Add Branch ================================================== --}}
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterLabel">Add Currency</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ url('companies/' . $id . '/storecurrency') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="">Select Debt Type </label>
                            <select class="form-control select2" id="currency" name="currency_id" required="">
                                <option value="">Select Currency</option>
                                @foreach ($currencies as $key)
                                @endforeach
                            </select>
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


    <script>
        $(document).ready(function() {
            // Fetch debt types and populate the dropdown
            $.ajax({
                url: '/companies/get-currency',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    var select = $('#currency');
                    select.empty();
                    select.append('<option value="">Select Debt Type</option>');
                    $.each(data, function(index, currency) {

                        select.append('<option value="' + currency.id + '">' + currency.name +
                            '</option>');
                    });
                },
                error: function() {
                    console.log('Error fetching debt types.');
                }
            });
        });
    </script>
@endsection
