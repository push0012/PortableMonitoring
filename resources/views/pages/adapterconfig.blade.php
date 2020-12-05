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
                    <center><div id="result"></div></center>
                </div>
                
                    <div class="card-body">
                    @csrf
                           

                            <div class="form-group">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-secondary active">
                                        <input type="radio" name="options" id="option1" autocomplete="off" checked> DHCP
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" name="options" id="option2" autocomplete="off"> Static
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>{{ __('SSID') }}</label>
                                <input required type="text" name="ssid" id="ssid" class="form-control" placeholder="{{ __('SSID') }}" value="">
                            </div>

                            <div class="form-group">
                                <label>{{ __('Password') }}</label>
                                <input required type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}" value="" >
                            </div>
                            
                            <div class="form-group">
                                <label>{{ __('IP Address') }}</label>
                                <input type="text" minlength="7" maxlength="15" size="15" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$" name="ip_address" id="ip_address" class="form-control" placeholder="{{ __('xxx.xxx.xxx.xxx') }}" value="" disabled="disabled">
                            </div>

                            <div class="form-group">
                                <label>{{ __('Subnet Mask') }}</label>
                                <input type="text" minlength="7" maxlength="15" size="15" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$" name="subnet_mask" id="subnet_mask" class="form-control" placeholder="{{ __('xxx.xxx.xxx.xxx') }}" value="" disabled="disabled">
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" onclick="adapter_save();" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                
            </div>
        </div>
    </div>
    <script>



    </script>
@endsection
