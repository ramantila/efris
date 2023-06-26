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
                <div class="card-header row">
                    <div class="col col-sm-2">
                            <a href="{{ url('companies/create') }}" class="btn btn-sm btn-primary btn-rounded">Add Company </a>
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
                                @foreach($company as $index => $com)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $com['companyName'] }}</td>
                                        <td>{{ $com['companyType'] }}</td>
                                        <td>{{ $com['companyTypeName'] }}</td>
                                        <td>{{ $com['tinNumber'] }}</td>
                                        <td>{{ $com['vrn'] }}</td>
                                        <td>{{ $com['taxOffice'] }}</td>
                                        <td>{{ $com['contactPersonName'] }}</td>
                                        <td>{{ $com['contactPersonEmail'] }}</td>
                                        <td>{{ $com['contactPersonPhone'] }}</td>
                                        <td>{{ $com['smsReceipts'] }}</td>
                                        <td>{{ $com['createdBy'] }}</td>
                                        <td>{{ $com['createdByName'] }}</td>
                                        <td>{{ $com['totalReceiptSent'] }}</td>
                                        {{-- <td>{{ $com['status'] }}</td> --}}
                                        {{-- <td>{{ $com['verificationStatus'] }}</td> --}}
                                        {{-- <td>{{ $com['verificationStatusDescription'] }}</td> --}}
                                        {{-- <td>{{ $com['verificationStage'] }}</td> --}}
                                        {{-- <td>{{ $com['createdAt'] }}</td> --}}

                                        <td>
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

