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
                        <a href="{{ url('companies/searchview') }}" class="btn btn-sm btn-primary btn-rounded">Add Company
                        </a>
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
                                    {{-- <th style="width: 63px;">Vrn</th> --}}
                                    {{-- <th style="width: 63px;">Tax office</th> --}}
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
                                @foreach ($company as $index => $com)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $com['companyName'] }}</td>
                                        <td>{{ $com['companyType'] }}</td>
                                        <td>{{ $com['companyTypeName'] }}</td>
                                        <td>{{ $com['tinNumber'] }}</td>
                                        {{-- <td>{{ $com['vrn'] }}</td> --}}
                                         {{-- <td>{{ $com['taxOffice'] }}</td> --}}
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

                                        <td class="text-center">
                                            <div class="dropdown d-inline-block">
                                                <a class="nav-link dropdown-toggle" href="#" id="moreDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ik ik-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">


                                                    <a class="dropdown-item"
                                                    href="{{ url('companies/details/' . $com['id']) }}"><i
                                                            class="ik ik-edit"></i> View </a>

                                                    <a class="dropdown-item"
                                                    href="{{ url('companies/edit/' . $com['id']) }}"><i
                                                            class="ik ik-edit"></i> Edit </a>


                                                            <a class="dropdown-item"
                                                            href="{{url ('companies/modeselection/' . $com['id']) }}"><i
                                                                    class="ik ik-eye"></i> Mode offline </a>
                                                                    <a class="dropdown-item"
                                                                    href="{{url ('companies/modeselection_update/' . $com['id']) }}" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i
                                                                            class="ik ik-eye"></i> Mode update </a>

                                                                            <a class="dropdown-item"
                                                                            href="{{url ('companies/completeprofile/' . $com['id']) }}"><i
                                                                                    class="ik ik-eye"></i> Complete Profile </a>


                                                    <a class="dropdown-item"  href="{{ url('companies/companydelete/' . $com['id']) }}"
                                                   >
                                                        <i class="ik ik-trash"></i> Delete </a>

                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
{{-- <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
