@extends('layouts.master')

<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

@section('title')
    Company
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- page statustic chart start -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-red text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">1<h4>
                                <p class="mb-0">Companies</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="fas fa-cube f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart1" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">0</h4>
                                <p class="mb-0">Branches</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-shopping-cart f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-green text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">0</h4>
                                <p class="mb-0">Users</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart3" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-yellow text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">0
                                </h4>
                                <p class="mb-0">Total Sales Receipts</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik f-30">৳</i>
                            </div>
                        </div>
                        <div id="Widget-line-chart4" class="chart-line chart-shadow"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>Recent Debts</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>Recent Sales on chart</h3>
                        {{-- <canvas id="myChart" style="width:100%;max-width:700px"></canvas> --}}


                        {{-- <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div> --}}
                    </div>
                    {{-- <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Cash</th>
                                        <th>Mobile</th>
                                        <th>POS</th>
                                        <th>Debts</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-xl-6 col-md-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h3>Recent Receipts</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer</th>
                                        <th>Issue Date</th>
                                        <th>Due Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#INV00001</td>
                                        <td>Apple Company</td>
                                        <td>23/05/2017</td>
                                        <td>04/08/2018</td>
                                        <td>$55.00</td>
                                        <td><label class="badge badge-info">Draft</label></td>
                                    </tr>
                                    <tr>
                                        <td>#INV00002</td>
                                        <td>Envato Pvt Ltd.</td>
                                        <td>20/03/2017</td>
                                        <td>04/08/2019</td>
                                        <td>$551.00</td>
                                        <td><label class="badge badge-danger">Unpaid</label></td>
                                    </tr>
                                    <tr>
                                        <td>#INV00003</td>
                                        <td>Dribble Company</td>
                                        <td>13/05/2017</td>
                                        <td>03/01/2018</td>
                                        <td>$655.00</td>
                                        <td><label class="badge badge-warning">Sent</label></td>
                                    </tr>
                                    <tr>
                                        <td>#INV00004</td>
                                        <td>Adobe Family</td>
                                        <td>11/01/2016</td>
                                        <td>02/03/2017</td>
                                        <td>$535.00</td>
                                        <td><label class="badge badge-success">Paid</label></td>
                                    </tr>
                                    <tr>
                                        <td>#INV00005</td>
                                        <td>Apple Company</td>
                                        <td>23/05/2017</td>
                                        <td>04/08/2018</td>
                                        <td>$25.00</td>
                                        <td><label class="badge badge-danger">Unpaid</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
const xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
const yValues = [55, 49, 44, 24, 15];
const barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {...}
});

    </script>

@endsection
