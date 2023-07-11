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

                           
                    

                    @if ( $tinNumber != "")
                        
                    
                        <div class="app-search-box col-4">
                            Search Tin here
                            <form class="app-search-form" action="{{ url('companies/data') }}" method="POST">
                               @csrf
                                <input type="text" placeholder="Search..." name="tinNumber"
                                    class="form-control search-input"><br>
                                <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                        class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th style="width: 63px;">Business Name</th>
                                    <th style="width: 63px;">Address</th>
                                    <th style="width: 63px;">Tin</th>

                                    <th style="width: 63px;">Legal Name</th>
                                    <th style="width: 63px;">Contact Mobile  </th>
                                    <th style="width: 63px;">Contact Number</th>
                                    <th style="width: 63px;">Goverment Tin</th>
                                    <th style="width: 63px;">Tax payer Status Code</th>
                                    <th style="width: 63px;">Tax payer Status</th>
                                    <th style="width: 63px;">Tax payer Type</th>
                                    <th style="width: 63px;">Tax payer Type code</th>

                                    
                                    {{-- <th style="width: 63px;">Action</th> --}}
                                </tr>
                                </thead>
                            <tbody>

                                
                           
                                    <tr>
                                        <td>{{ $company->businessName }}</td>
                                           <td>{{ $company->address }}</td>
                                             <td>{{ $company->tin }}</td>
                                                <td>{{ $company->legalName }}</td>
                                                <td>{{ $company->contactMobile }}</td>
                                                <td>{{ $company->contactNumber }}</td>
                                                <td>{{ $company->governmentTIN }}</td>
                                                <td>{{ $company->taxpayerStatusCode }}</td>
                                                <td>{{ $company->taxpayerStatus }}</td>
                                                <td>{{ $company->taxPayerType }}</td>
                                                <td>{{ $company->taxPayerTypeCode }}</td>
                                       

                                   

                                    </tr>
                            </tbody>
                        </table>
                        @else
                            <div class="app-search-box col-4">
                            Search Tin here
                            <form class="app-search-form" action="{{ url('companies/data') }}" method="POST">
                               @csrf
                                <input type="text" placeholder="Search..." name="tinNumber"
                                    class="form-control search-input"><br>
                                <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                        class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th style="width: 63px;">Business Name</th>
                                    <th style="width: 63px;">Address</th>
                                    <th style="width: 63px;">Legal Name</th>
                                    <th style="width: 63px;">Contact Mobile  </th>
                                    <th style="width: 63px;">Contact Number</th>
                                    <th style="width: 63px;">Goverment Tin</th>
                                    <th style="width: 63px;">Tax payer Status Code</th>
                                    <th style="width: 63px;">Tax payer Status</th>
                                    <th style="width: 63px;">Tax payer Type</th>
                                    <th style="width: 63px;">Tax payer Type code</th>

                                    
                                    <th style="width: 63px;">Action</th>
                                </tr>
                                </thead>
                            <tbody>

                  
                                       

                                   

                                    </tr>
                               {{-- @endforeach --}} 
                            </tbody>
                        </table>
                        @endif
                        
                        {{-- @if ($request->tinNumber="") --}}

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
