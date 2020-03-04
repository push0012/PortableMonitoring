@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('title')
    Portable Server Monitoring Tool
@endsection

@section('content')
<!--first row-->
    <div class="row">
    <div class="col-lg-5">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">P S M T</h5>
                    <h3 class="card-title">
                        <i class="tim-icons icon-alert-circle-exc text-success"></i> 
                        Job Detail
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <a href="{{ url('adapter') }}">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">P S M T</h5>
                    <h3 class="card-title">
                        <i class="tim-icons icon-settings-gear-63 text-info"></i>
                        Adapter Configuration
                    </h3>
                </div>
            </div>
            </a>
        </div>
    </div>
    <!--second row-->
    <div class="row">
        <div class="col-lg-5">
            <a href="{{ url('client') }}">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">P S M T</h5>
                    <h3 class="card-title">
                        <i class="tim-icons icon-single-02 text-danger"></i>
                        Clent Nodes
                    </h3>
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-5">
            <a href="{{ url('monitoring') }}">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">P S M T</h5>
                    <h3 class="card-title">
                        <i class="tim-icons icon-sound-wave text-warning"></i> 
                        Server Monitoring
                    </h3>
                </div>
            </div>
            </a>
        </div>
    </div>
    <!-- third row-->
    <div class="row">
        <div class="col-lg-5">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">P S M T</h5>
                    <h3 class="card-title">
                        <i class="tim-icons icon-delivery-fast text-info"></i>
                        Proposed
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">P S M T</h5>
                    <h3 class="card-title">
                        <i class="tim-icons icon-send text-success"></i> 
                        Proposed
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- forth row-->
    <div class="row">
        <div class="col-lg-5">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">P S M T</h5>
                    <h3 class="card-title">
                        <i class="tim-icons icon-delivery-fast text-info"></i>
                        Proposed
                    </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">P S M T</h5>
                    <h3 class="card-title">
                        <i class="tim-icons icon-send text-success"></i> 
                        Proposed
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
    </div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush

@push('styles')
    <style type="text/css">
        .card{
            height: 90px !important; 
        }
        .col-lg-2 {
            max-height: 150px;
        }

    </style>
@endpush

