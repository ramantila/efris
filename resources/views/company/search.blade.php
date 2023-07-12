@extends('layouts.master')

{{-- <style>body{ margin-top:20px; }</style> --}}
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

                        <div class ="row">
                            <div class="col-sm-4">
                             <div class="app-search-box col-6">
                            Search Tin here
                            <form class="app-search-form" action="{{ url('companies/data') }}" method="POST">
                               @csrf
                                <input type="text" placeholder="Search..." name="tinNumber"
                                    class="form-control search-input"><br>
                                <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                        class="fas fa-search"></i></button>
                            </form>
                        </div><br><br>
                            </div>
                        {{-- <div class="card">
                            <div class="card-body"> --}}
                    
                        {{-- <div class="container"> --}}
                            {{-- <div class="row form-group"> --}}
                                <div class="col-sm-8">
                                    <b>
                                    <ul class="nav nav-pills  setup-panel">
                                        <li class="active" style="margin-left: 1"><a href="#step-1">
                                            <p class="list-group-item-heading text-center">Step 1 -></p>
                                            {{-- <p class="list-group-item-text">First step </p> --}}
                                        </a></li>
                                        <li class="disabled"><a href="#step-2">
                                            <p class="list-group-item-heading"style="margin-left: 2">Step 2 -></p>
                                            {{-- <p class="list-group-item-text"style="margin-left: 2">Second step </p> --}}
                                        </a></li>
                                        <li class="disabled" style="margin-left: 3"><a href="#step-3">
                                            <p class="list-group-item-heading">Step 3 -></p>
                                            {{-- <p class="list-group-item-text">Third step </p> --}}
                                        </a></li>
                                        <li class="disabled" style="margin-left: 3"><a href="#step-4">
                                            <p class="list-group-item-heading" style="margin-left: 3">Step 4 </p>
                                            {{-- <p class="list-group-item-text"style="margin-left: 3">Second step </p> --}}
                                        </a></li>    
                                    </ul>
                                </b>
                                {{-- </div> --}}
                            {{-- </div> --}}
                        {{-- </div>	 --}}
                    
                    
                    <form class="container">
                    
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12 well text-center">
                                    <h1> Company Details </h1>
                    
                    <!-- <form> -->               
                                    
                        <div class="container col-xs-12">
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <table class="table table-bordered table-hover" id="tab_logic">
                                    <thead>
                                        <tr >
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th class="text-center">
                                               Business Name
                                            </th>
                                            <th class="text-center">
                                               Tin
                                            </th>
                                            <th class="text-center">
                                                Address
                                            </th>
                    
                                            <th class="text-center">
                                                Tax Payer Status
                                            </th>
                                            
                                            <th class="text-center">
                                                Company type
                                            </th>						
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id='addr0'>
                                            <td>
                                            1
                                            </td>
                                            <td>
                                            <input type="text" name='name0'  placeholder='Business Name' value="" class="form-control"/>
                                            </td>
                                            <td>
                                            <input type="text" name='sur0' placeholder=' Goverment  Tin' class="form-control"/>
                                            </td>
                                            <td>
                                            <input type="text" name='email0' placeholder='Address' class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" name='email0' placeholder='Tax payer status' class="form-control"/>
                                                </td>
                                            <td>
                                            <select type="text" name="gender0" class="form-control">
                                                <option name="male" value="male">Male</option>
                                                <option name="Female" value="Female">Female</option>
                                                <option name="3rdgen" value="none">None</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr id='addr1'></tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <button id="" class="btn btn-danger pull-left"><= Prev </button> --}}
                    
                            {{-- <a id="add_row" class="btn btn-success pull-left">Add Row</a> --}}
                            {{-- <a id='delete_row' class="btn btn-danger pull-right">Delete Row</a> --}}
                        </div>
                                    
                    <!-- </form> -->
                                    
                                    <button id="activate-step-2" class="btn btn-primary btn-md">Next =></button>
                                </div>
                            </div>
                        </div>
                    
                    </form>
                    
                    <form class="container">
                    
                        <div class="row setup-content" id="step-2">
                            <div class="col-xs-12">
                                <div class="col-md-12 well text-center">
                                    <h1 class="text-center"> Person Details </h1>
                                    
                    <form>
                        <div class="container col-xs-12">
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <table class="table table-bordered table-hover" id="tab_logic">
                                    <thead>
                                        <tr >
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th class="text-center">
                                                Contact Mobile
                                            </th>
                                            <th class="text-center">
                                                Contact Number
                                            </th>
                                            <th class="text-center">
                                               Status Code
                                            </th>
                                            
                                            <th class="text-center">
                                                Taxpayer Type
                                            </th>						
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id='addr0'>
                                            <td>
                                            1
                                            </td>
                                            <td>
                                            <input type="text" name='name0'  placeholder='Contact Mobile' class="form-control"/>
                                            </td>
                                            <td>
                                            <input type="text" name='sur0' placeholder='Contact No' class="form-control"/>
                                            </td>
                                            <td>
                                            <input type="text" name='email0' placeholder='Status Code' class="form-control"/>
                                            </td>
                                            <td>
                                            <select type="text" name="gender0" class="form-control">
                                                <option name="male" value="male">Individual</option>
                                                <option name="Female" value="Female">Goverment</option>
                                                <option name="3rdgen" value="none">NGO</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr id='addr1'></tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <button id="" class="btn btn-primary btn-md" a href="#step-1" > <= Prev</button></a><br> --}}
                            <button class="btn btn-primary">
                            <ul class="nav nav-pills  setup-panel">
                                <li class="active" style="margin-left: 30"><a href="#step-1">
                                    <p class="list-group-item-heading text-center">Prev</p>
                                    <p class="list-group-item-text"> </p>
                                </a></li></button>
                            {{-- <a id="add_row" class="btn btn-success pull-left">Add Row</a>
                            <a id='delete_row' class="btn btn-danger pull-right">Delete Row</a> --}}
                        </div>
                                    
                    </form> 
                                    
                                    <button id="activate-step-3" class="btn btn-primary btn-md">Next</button>
                                </div>
                            </div>
                        </div>
                    
                    </form>
                    
                    <form class="container">
                    
                        <div class="row setup-content" id="step-3">
                            <div class="col-xs-12">
                                <div class="col-md-12 well text-center">
                                    <h1 class="text-center"> STEP 3</h1>
                                    
                                    <form>
                        
                    
                                        <div class="container col-xs-12">
                                            <div class="row clearfix">
                                                <div class="col-md-12 column">
                                                    <table class="table table-bordered table-hover" id="tab_logic">
                                                    <thead>
                                                        <tr >
                                                            <th class="text-center">
                                                                #
                                                            </th>
                                                            <th class="text-center">
                                                                Name
                                                            </th>
                                                            <th class="text-center">
                                                                Surname
                                                            </th>
                                                            <th class="text-center">
                                                                Email
                                                            </th>
                                                            
                                                            <th class="text-center">
                                                                Gender
                                                            </th>						
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr id='addr0'>
                                                            <td>
                                                            1
                                                            </td>
                                                            <td>
                                                            <input type="text" name='name0'  placeholder='Name' class="form-control"/>
                                                            </td>
                                                            <td>
                                                            <input type="text" name='sur0' placeholder='Surname' class="form-control"/>
                                                            </td>
                                                            <td>
                                                            <input type="text" name='email0' placeholder='Email' class="form-control"/>
                                                            </td>
                                                            <td>
                                                            <select type="text" name="gender0" class="form-control">
                                                                <option name="male" value="male">Male</option>
                                                                <option name="Female" value="Female">Female</option>
                                                                <option name="3rdgen" value="none">None</option>
                                                            </select>
                                                            </td>
                                                        </tr>
                                                        <tr id='addr1'></tr>
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            {{-- <button id="" class="btn btn-primary btn-md">Prev</button> --}}
                    
                                            {{-- <a id="add_row" class="btn btn-success pull-left">Add Row</a>
                                            <a id='delete_row' class="btn btn-danger pull-right">Delete Row</a> --}}
                                        </div>
                                         
                                        
                    </form> 
                  
                                    
                                    <button id="activate-step-4" class="btn btn-primary btn-md">Next</button>
                                </div>
                            </div>
                        </div>
                    
                    </form>
                    
                    <form class="container">
                        
                        <div class="row setup-content" id="step-4">
                            <div class="col-xs-12">
                                <div class="col-md-12 well text-center">
                                    <h1 class="text-center"> Submission Form</h1>
                                    
                    <form>
                        <div class="container col-xs-12">
                            <div class="row clearfix">
                                <div class="col-md-12 column">
                                    <table class="table table-bordered table-hover" id="tab_logic">
                                    <thead>
                                        <tr >
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th class="text-center">
                                                Name
                                            </th>
                                            <th class="text-center">
                                                Surname
                                            </th>
                                            <th class="text-center">
                                                Email
                                            </th>
                                            
                                            <th class="text-center">
                                                Gender
                                            </th>						
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id='addr0'>
                                            <td>
                                            1
                                            </td>
                                            <td>
                                            <input type="text" name='name0'  placeholder='Name' class="form-control"/>
                                            </td>
                                            <td>
                                            <input type="text" name='sur0' placeholder='Surname' class="form-control"/>
                                            </td>
                                            <td>
                                            <input type="text" name='email0' placeholder='Email' class="form-control"/>
                                            </td>
                                            <td>
                                            <select type="text" name="gender0" class="form-control">
                                                <option name="male" value="male">Male</option>
                                                <option name="Female" value="Female">Female</option>
                                                <option name="3rdgen" value="none">None</option>
                                            </select>
                                            </td>
                                        </tr>
                                        <tr id='addr1'></tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            {{-- <a id="add_row" class="btn btn-success pull-left">Add Row</a>
                            <a id='delete_row' class="btn btn-danger pull-right">Delete Row</a> --}}
                            <button type="submit" class="btn btn-success">Finish</button>
                        </div>
                                    
                    </form>               
                                    
                                </div>
                            </div>
                        </div>
                    
                    </form>






                       {{-- <table id="data_table" class="table">
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

                  
                                       

                                   

                                    </tr> --}}
                               {{-- @endforeach --}} 
                            {{-- </tbody>
                        </table> --}}
                            </div>
                        </div>

                    </div>

                        @endif
                        
                        {{-- @if ($request->tinNumber="") --}}

                        
                    </div>
                {{-- </div>

        </div> --}}
    </div>


    
        </div></div>
</div>
<script>
    
// Activate Next Step

$(document).ready(function() {

var navListItems = $('ul.setup-panel li a'),
allWells = $('.setup-content');

allWells.hide();

navListItems.click(function(e)
{
e.preventDefault();
var $target = $($(this).attr('href')),
$item = $(this).closest('li');

if (!$item.hasClass('disabled')) {
navListItems.closest('li').removeClass('active');
$item.addClass('active');
allWells.hide();
$target.show();
}
});

$('ul.setup-panel li.active a').trigger('click');

// DEMO ONLY //
$('#activate-step-2').on('click', function(e) {
$('ul.setup-panel li:eq(1)').removeClass('disabled');
$('ul.setup-panel li a[href="#step-2"]').trigger('click');
$(this).remove();
})

$('#activate-step-3').on('click', function(e) {
$('ul.setup-panel li:eq(2)').removeClass('disabled');
$('ul.setup-panel li a[href="#step-3"]').trigger('click');
$(this).remove();
})

$('#activate-step-4').on('click', function(e) {
$('ul.setup-panel li:eq(3)').removeClass('disabled');
$('ul.setup-panel li a[href="#step-4"]').trigger('click');
$(this).remove();
})

$('#activate-step-3').on('click', function(e) {
$('ul.setup-panel li:eq(2)').removeClass('disabled');
$('ul.setup-panel li a[href="#step-3"]').trigger('click');
$(this).remove();
})
});


// Add , Dlelete row dynamically

$(document).ready(function(){
var i=1;
$("#add_row").click(function(){
$('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input  name='sur"+i+"' type='text' placeholder='Surname'  class='form-control input-md'></td><td><input  name='email"+i+"' type='text' placeholder='Email'  class='form-control input-md'></td><td><select type='text' name='gender"+i+"' class='form-control'><option name='male"+i+"' value='male'>Male</option><option name='Female"+i+"' value='Female'>Female</option><option name='3rdgen"+i+"' value='none'>None</option></select></td>");

$('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
i++; 
});
$("#delete_row").click(function(){
if(i>1){
$("#addr"+(i-1)).html('');
i--;
}
});

});



</script>
{{-- @endif --}}
@endsection
