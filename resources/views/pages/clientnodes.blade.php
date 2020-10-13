@extends('layouts.app', ['page' => __('Client Nodes'), 'pageSlug' => 'client'])
@section('title')
    PSMT - Client Nodes
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                <a href="/" class="text-primary">
                        <i class="tim-icons icon-double-left"></i> {{ __('Back') }}
                    </a>
                    <br><br>
                    <h3 class="title">{{ __('Client Nodes Configuration') }}</h3>
                </div>
                
                    <div class="card-body">
                            @csrf
                            
                            <button type="button" class="btn btn-outline-success btn-sm float-right" id="addClient">
                                <span class="btn-label"><i class="fas fa-plus"></i></span>
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm float-right" id="removeClient">
                                <span class="btn-label"><i class="fas fa-times"></i></span>
                            </button>
                            </br></br>
                            <table id="clientTable" class="table table-striped display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="max-width:125px !important;">Job Name</th>
                                        <th style="max-width:125px !important;">Interval</th>
                                        <th style="max-width:125px !important;">Target</th> 
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                    </div>
                    <div class="card-footer">
                        <button onClick="data_save()" type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                
            </div>
        </div>
    </div>
@endsection
