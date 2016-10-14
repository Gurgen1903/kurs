<nav class="nav_header" data-base_url="{{url('/')}}">
    <div class="nav-wrapper">
        {{--<a href="#" class="brand-logo"><img src="{{url('imgs/logo.png')}}" alt=""></a>--}}
        <ul class="right hide-on-med-and-down header_menu_login">
            @if (Auth::guest())
                <li><a href="#!" class="login_modal_view">Login</a></li>
                <li><a href="#!" class="register_modal_view">Register</a></li>

            @else
                <li class="dropdown user_name_header">
                        {{ Auth::user()->name }} <span class="caret"></span>
                </li>
                <li><a href="#!" id="logoutUser"><i class="large material-icons" >power_settings_new</i></a></li>

            @endif
                <li><a href="#" data-activates="slide-out" class="button-collapse button_side_bar_open"><i class="material-icons">menu</i></a></li>

        </ul>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="#!">Zakazat Diplomnuyu</a></li>
            <li><a href="#!">Zakazat Kursovuyu</a></li>
            <li><a href="#!">Zakazat Referat</a></li>
        </ul>
    </div>
</nav>
@extends('auth.login')
@extends('auth.register')