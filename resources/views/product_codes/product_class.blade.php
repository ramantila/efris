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
                        <h5>Product Segments Class</h5>
                        <span>List of Product Segments Class</span>
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
                            <a href="#">Product Segments Class</a>
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
                    {{-- <div class="col col-sm-2">
                        <button type="button" class="btn btn-sm btn-primary btn-rounded" data-toggle="modal"
                            data-target="#exampleModalCenter">Add tax codes</button>
                    </div> --}}
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
                        <ul id="myList">
                            <!-- Existing list items for myList -->
                            @foreach ($classes as $key)
                            <li>{{ $key['code'] }} - {{ $key['name'] }}</li>
                            @endforeach
                           
                            {{-- <li>List Item 2</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // $(document).ready(function() {
        //     const targetListId = 'myList'; // Replace with your actual list ID

        //     // Add an event listener to the document to capture clicks on the dynamic list items
        //     $(document).on('click', `#${targetListId} li`, function() {
        //         const clickedLi = $(this);

        //         // Check if the clicked item has a nested list already
        //         if (clickedLi.find('ul').length === 0) {
        //             // If not, make an Ajax request to populate the nested list
        //             $.ajax({
        //                 type: 'GET',
        //                 url: '/efris/product/get-category-segment', // Adjust the URL as needed
        //                 dataType: 'json',
        //                 success: function(data) {
        //                     // Create a nested ul element
        //                     const nestedList = $('<ul>');

        //                     // Loop through the retrieved data and create nested list items
        //                     data.forEach(item => {
        //                         const li = $('<li>').text(item.name);
        //                         nestedList.append(li);
        //                     });

        //                     // Append the nested list to the clicked list item
        //                     clickedLi.append(nestedList);
        //                 },
        //                 error: function() {
        //                     alert('Error fetching data.');
        //                 }
        //             });
        //         } else {
        //             // If the clicked item already has a nested list, toggle its visibility
        //             clickedLi.find('ul').toggle();
        //         }
        //     });

        //     // Rest of your code for the first list
        // });


        // $(document).ready(function() {
        //     const targetListId = 'myList2'; // Replace with your actual list ID

        //     $.ajax({
        //         type: 'GET',
        //         url: '/efris/product/segment-family/1',
        //         dataType: 'json',
        //         success: function(data) {
        //             const targetList = document.getElementById(targetListId);

        //             // Clear any existing list items
        //             while (targetList.firstChild) {
        //                 targetList.removeChild(targetList.firstChild);
        //             }

        //             // Loop through the retrieved data and create list items
        //             data.forEach(item => {
        //                 console.log(item.code);
        //                 const li = document.createElement('li');
        //                 li.textContent = item
        //                     .code; // Adjust this based on your API response structure
        //                 targetList.appendChild(li);
        //             });
        //         },
        //         error: function(jqXHR, textStatus, errorThrown) {
        //             // Handle the error here
        //             console.error("AJAX Error: " + textStatus, errorThrown);

        //             // You can display an error message to the user
        //             const errorMessage = "An error occurred while fetching data.";
        //             // You can choose how to display this error message, e.g., alert, appending to a div, etc.
        //             // For example, appending it to a div with id "error-container":
        //             const errorContainer = document.getElementById('error-container');
        //             errorContainer.textContent = errorMessage;
        //         }
        //     });
        // });
    </script>
@endsection
