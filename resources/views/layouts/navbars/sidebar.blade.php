<div class="sidebar">
    <div class="sidebar-wrapper">
        <!--<div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('PSMT') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Dashboard') }}</a>
        </div>-->
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a class="nav-text" href="/">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p >{{ __('Dashboard') }}</p>
                </a>
            </li>
            <hr>
            <li @if ($pageSlug == 'job') class="active " @endif>
                <a class="nav-text" href="{{ url('job') }}">
                    <i class="tim-icons icon-alert-circle-exc"></i>
                    <p>{{ __('Job Details') }}</p>
                </a>
            </li>

            <li @if ($pageSlug == 'adapter') class="active " @endif>
                <a class="nav-text" style="font-size: 0.8em !important;" href="{{ url('adapter') }}">
                    <i class="tim-icons icon-settings-gear-63"></i>
                    <p>{{ __('Adapter Configuration') }}</p>
                </a>
            </li>

            <li @if ($pageSlug == 'client') class="active " @endif>
                <a class="nav-text" href="{{ url('client') }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Client Nodes') }}</p>
                </a>
            </li>

            <li @if ($pageSlug == 'monitoring') class="active " @endif>
                <a class="nav-text" href="{{ url('monitoring') }}">
                    <i class="tim-icons icon-sound-wave"></i>
                    <p>{{ __('Server Monitoring') }}</p>
                </a>
            </li>
            
            <li @if ($pageSlug == 'credits') class="active " @endif>
                <a class="nav-text" href="{{ url('credits') }}">
                    <i class="tim-icons icon-heart-2"></i>
                    <p>{{ __('Credits') }}</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>
