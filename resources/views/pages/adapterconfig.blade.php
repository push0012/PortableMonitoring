@extends('layouts.app', ['page' => __('Adapter Configuration'), 'pageSlug' => 'adapter'])
@section('title')
    PSMT - Adapter Configuration
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
                    <h3 class="title">{{ __('Adapter Configuration') }}</h3>
                </div>
                <form method="post" action="" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label>{{ __('Host Name') }}</label>
                                <input required type="text" name="host_name" class="form-control" placeholder="{{ __('Host Name') }}" value="">
                            </div>

                            <div class="form-group">
                                <label>{{ __('IP Address') }}</label>
                                <input required type="text" minlength="7" maxlength="15" size="15" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$" name="ip_address" class="form-control" placeholder="{{ __('xxx.xxx.xxx.xxx') }}" value="">
                            </div>

                            <div class="form-group">
                                <label>{{ __('Subnet Mask') }}</label>
                                <input required type="text" minlength="7" maxlength="15" size="15" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$" name="subnet_mask" class="form-control" placeholder="{{ __('xxx.xxx.xxx.xxx') }}" value="">
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
