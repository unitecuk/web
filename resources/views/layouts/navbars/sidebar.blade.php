<div class="sidebar" data-color="danger" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->

    <div class="logo" style="text-align:center">
        <img src="Images/logo2.jpg" >
        <h2><a class="simple-text" href="">Unitec</a></h2>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i class="material-icons">settings</i>
                    <p>{{ __('Settings') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <i class="material-icons">UP</i>
                                <span class="sidebar-normal">{{ __('User profile') }} </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
{{--            <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">--}}
{{--                <a class="nav-link" href="{{ route('table') }}">--}}
{{--                    <i class="material-icons">history</i>--}}
{{--                    <p>{{ __('Chatbot History') }}</p>--}}
{{--                </a>--}}
{{--            </li>--}}


            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('notifications') }}">
                    <i class="material-icons">notifications</i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>


        </ul>
    </div>
</div>
