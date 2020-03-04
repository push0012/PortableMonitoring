<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
               
            </div>
            <a class="navbar-brand ml-auto" style="padding-top:18px !important; padding-left:50px !important;" href="{{ url('/') }}">
                
                    <img style="width:100px !important;" src="{{ asset('img/head.png') }}" alt="{{ __('Profile Photo') }}">
                
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="font-size:1.5em !important;">
                    <a href="/" class="nav-link text-primary">
                        <i class="tim-icons icon-laptop"></i> {{ __('Portable Server Monitoring Tool') }}
                    </a>
                </li>
                <!--<li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="tim-icons icon-laptop"></i> {{ __('Link 2') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="tim-icons icon-single-02"></i> {{ __('Link 3') }}
                    </a>
                </li>-->
            </ul>
        </div>
    </div>
</nav>
