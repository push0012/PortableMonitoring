@extends('layouts.app', ['pageSlug' => _('dashboard') ,  'pageSlug' => 'monitoring'])
@section('title')
    PSMT - Monitoring
@endsection
@section('content')
    <div class="row">   
        <div class="col-md-12">
            <div class="card card-user">
                <div class="card-header">
                    <h3 class="card-title">
                        Monitoring
                    </h3>
                </div>
                <div class="card-body">
                    <form method="post" action="" autocomplete="off">
                        <div class="">
                            <div class="">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label>{{ __('Target Server') }}</label>
                                    <select class="form-control drop">
                                        <option>Web Master</option>
                                        <option>File 001</option>
                                        <option>File 003</option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Heat</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i></h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartLinePurple"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">CPU Usage</h5>
                    <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> </h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="CountryChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Disk Usage</h5>
                    <h3 class="card-title"><i class="tim-icons icon-send text-success"></i></h3>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartLineGreen"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
@endsection

@push('js')
    <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
@push('styles')
    <style type="text/css">
        .card-user{
            height: 145px !important; 
        }
        .drop option{
            background-color: none !important;
            color: black !important;
        }
       
    </style>
@endpush

