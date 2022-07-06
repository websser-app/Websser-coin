<style>
    i{
        font-size: 30px;
    }
    .conf{
        font-size: 40px;
        position: ;
        top: 18%;
    }
    .avatar{
        width: 70%; 
        height: 70%;
    }
    @media only screen and (max-width: 767px) {
        .conf{
            font-size: 20px;
            position: absolute;
            top: 10%;
            right: 22%;
        }
        .avatar{
        width: 20%; 
        height: 20%;
        margin-right: 80%;
        position: absolute;
        right:-75%;
        top: 40%;
        }
        
    }
</style>
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <div class="navbar-brand pt-0">
            <div class = "mb-3"></div>
                <a title="Perfil" href="{{url('profile')}}">
                    <i class="iconos ni ni-settings-gear-65 text-black conf " style=""></i>
                </a>
            <span class="avatar avatar-sm rounded-circle" style=" margin-right: 80%;">
                
                <div href="{{url('profile')}}">
                    <img alt="Image placeholder"    src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class= "">
                </div>
                
            </span> <br></br>
            <div class="media-body ml-2 d-none d-lg-inline">
                <span class="mb-0 text-sm  font-weight-bold" style=" font-size: 30px;">{{ auth()->user()->name }}</span> 
            </div>
        </div>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-9 collapse-close right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-black"  href="{{ url('home') }}">
                        <i class="iconos ni ni-chart-bar-32 text-black " style="font-size: 30px;"></i> 
                        <span class="nav-link-text text-black" style="color: #f4645f; font-size: 110%;">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ url('building') }}">
                        <i class="ni ni-building text-black" style="font-size: 30px; font-size: 30px;"></i> 
                        <span class="nav-link-text text-black" style="color: #f4645f; font-size: 110%;">{{ __('Entity') }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-black" href="{{url('bills')}}">
                        <i class="ni ni-money-coins text-black" style="color: #f4645f; font-size: 30px;"></i>
                        <span class="nav-link-text text-black" style="color: #f4645f; font-size: 110%;">{{ __('Expenses') }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ url('tenantpayments') }}">
                        <i class="bi bi-card-checklist text-black" style="color: #f4645f; font-size: 30px;"></i>
                        <span class="nav-link-text text-black" style="color: #f4645f; font-size: 110%;">{{ __('Expense report') }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ route('tenantpayments.wallet') }}">
                        <i class="bi bi-cash text-black" style="color: #f4645f; font-size: 30px;"></i>
                        <span class="nav-link-text text-black" style="color: #f4645f; font-size: 110%;">{{ __('Wallet') }}</span>
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ route('packages') }}">
                        <i class="bi bi-credit-card-2-front text-black" style="color: #f4645f; font-size: 30px;"></i>
                        <span class="nav-link-text text-black" style="color: #f4645f; font-size: 110%;">{{ __('Subscription') }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link text-black" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run" style="font-size: 30px; "></i>
                        <span font-size: 30px; style=" font-size: 110%;">{{ __('Logout') }}</span>
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
        </div>
    </div>
</nav>
