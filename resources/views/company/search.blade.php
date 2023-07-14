@extends('layouts.master')
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: inherit;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: inherit;
        border: 1px solid #aaaaaa;
        border-radius: 12px;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #007bff;
        color: #ffffff;
        border-radius: 12px;
        border: 1px solid#007bff;
        /* height:35px; */
        padding: 10px 20px;
        font-size: 17px;
        font-family: inherit;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }
</style>
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

    <div class="card-body">



        <div class="dt-responsive">


            @if ($tinNumber != '')
                <form id="regForm" action="/action_page.php">
                    <h1>Register:</h1>
                    <!-- One "tab" for each step in the form: -->
                    <b>
                        <div class="tab">Company Name:
                            <p><input placeholder="Company name..." value="{{ $company->businessName }}"
                                    oninput="this.className = ''" name="fname" readonly></p>
                            <p>Address:<input placeholder="Address..." value="{{ $company->address }}"
                                    oninput="this.className = ''" name="lname" readonly></p>
                            <p>Legal Name:<input placeholder="Legal Name" value="{{ $company->legalName }}"
                                    oninput="this.className = ''" name="fname" readonly></p>
                            <p>Tin:<input placeholder="Tin..." value="{{ $company->tin }}" oninput="this.className = ''" name="lname"
                                    readonly>
                            </p>
                            <p>Tax Payer status:<input placeholder="Company status" value="{{ $company->taxpayerStatus }}"
                                    oninput="this.className = ''" name="fname" readonly></p>
                            <p>Tax Payer status Code:<input placeholder="Status Code"
                                    value="{{ $company->taxpayerStatusCode }}" oninput="this.className = ''" name="lname"
                                    readonly></p>


                        </div>
                        <div class="tab">Contact Info:
                            <p>Contact Person:<input placeholder="Contact person..." value="{{ $company->contactNumber }}"
                                    oninput="this.className = ''" name="email" readonly></p>
                            <p>Contact Mobile<input placeholder="Phone..." value="{{ $company->contactMobile }}"
                                    this.className='' name="phone" readonly></p>
                            <p>Representative Contact:<input placeholder="Phone..." value="" this.className=''
                                    name="phone" ></p>

                        </div>
                        <div class="tab">Birthday:
                            <p><input placeholder="dd" value="" oninput="this.className = ''" name="dd">
                            </p>
                            <p><input placeholder="mm" value="" oninput="this.className = ''" name="nn">
                            </p>
                            <p><input placeholder="yyyy"value="" oninput="this.className = ''" name="yyyy">
                            </p>
                        </div>
                        <div class="tab">Login Info:
                            <p><input placeholder="Username..." value="" oninput="this.className = ''" name="uname">
                            </p>
                            <p><input placeholder="Password..." value="" oninput="this.className = ''" name="pword"
                                    type="password"></p>
                        </div>
                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" id="prevBtn" style="border-radius: 12px;"
                                    onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)"
                                    style="border-radius: 12px">Next</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                </form>
            @else
                <div class="app-search-box col-3">
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
                            <th style="width: 63px;">Contact Mobile </th>
                            <th style="width: 63px;">Contact Number</th>
                            <th style="width: 63px;">Goverment Tin</th>
                            <th style="width: 63px;">Tax payer Status Code</th>
                            <th style="width: 63px;">Tax payer Status</th>
                            <th style="width: 63px;">Tax payer Type</th>
                            <th style="width: 63px;">Tax payer Type code</th>


                        </tr>
                    </thead>
                    <tbody>



                        {{-- <tr>
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




                        </tr> --}}
                    </tbody>
                </table>



        </div>
    </div>

    </div>
    @endif


    </div>

    </div>



    </div>
    </div>
    </div>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    {{-- @endif --}}
@endsection
