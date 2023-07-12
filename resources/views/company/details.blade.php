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
                            <a class="nav-link active" id="product-tab" data-toggle="pill" href="#product-month"
                                role="tab" aria-controls="pills-timeline" aria-selected="true">Branch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="services-tab" data-toggle="pill" href="#services-month" role="tab"
                                aria-controls="pills-profile" aria-selected="false">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="other-tab" data-toggle="pill" href="#other-month" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Other</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="current-month" role="tabpanel"
                            aria-labelledby="product-tab">
                            <div class="card-body">
                                <div class=" mt-0">
                                    branch content
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="services-month" role="tabpanel" aria-labelledby="services-tab">
                            <div class="card-body">
                                <div class=" mt-0">
                                    user content
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="other-month" role="tabpanel" aria-labelledby="other-tab">
                            <div class="card-body">
                                <div class=" mt-0">
                                    <div class="dt-responsive">
                                        <table id="data_table" class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 63px;">#</th>
                                                    <th style="width: 63px;">Company Name</th>
                                                    <th style="width: 63px;">Company Type</th>
                                                    <th style="width: 63px;">Company Type Name</th>
                                                    <th style="width: 63px;">Tin</th>
                                                    <th style="width: 63px;">Vrn</th>
                                                    <th style="width: 63px;">Tax office</th>
                                                    <th style="width: 63px;">Contact Person</th>
                                                    <th style="width: 63px;">Contact Person Email</th>
                                                    <th style="width: 63px;">Contact Phone</th>
                                                    <th style="width: 63px;">Sms Receipt</th>
                                                    <th style="width: 63px;">Created By</th>
                                                    <th style="width: 63px;">Created By Name</th>
                                                    <th style="width: 63px;">Total Receipt sent</th>
                                                    {{-- <th style="width: 63px;">Verification status</th> --}}
                                                    {{-- <th style="width: 63px;">Action</th> --}}
                                                    {{-- <th style="width: 63px;">Ver description</th> --}}
                                                    {{-- <th style="width: 63px;">ver stage</th> --}}
                                                    {{-- <th style="width: 63px;">Created</th> --}}
                                                    <th style="width: 63px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($compantdetails as $index => $com) --}}
                                                <tr>
                                                    {{-- <td>{{ $index+1 }}</td> --}}
                                                    <td>{{ $companydetails['companyName'] }}</td>
                                                    <td>{{ $companydetails['companyType'] }}</td>
                                                    <td>{{ $companydetails['companyTypeName'] }}</td>
                                                    <td>{{ $companydetails['tinNumber'] }}</td>
                                                    <td>{{ $companydetails['vrn'] }}</td>
                                                    <td>{{ $companydetails['taxOffice'] }}</td>
                                                    <td>{{ $companydetails['contactPersonName'] }}</td>
                                                    <td>{{ $companydetails['contactPersonEmail'] }}</td>
                                                    <td>{{ $companydetails['contactPersonPhone'] }}</td>
                                                    <td>{{ $companydetails['smsReceipts'] }}</td>
                                                    <td>{{ $companydetails['createdBy'] }}</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
