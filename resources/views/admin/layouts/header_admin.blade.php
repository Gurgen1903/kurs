<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Document</title>


    <!-- importing google fonts icons library !-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- STYLE -->
    <link href="{{url('/css/admin.css')}}" rel="stylesheet">

    <!-- Materialize -->
    <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/materialize.css') }}" />
    <script src="{{ url('js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ url('materialize/js/materialize.min.js') }}"></script>
    {{--Weather plugin--}}

    <script src="{{ url('js/script.js') }}"></script>
</head>
<body>

<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#" data-activates="slide-out" class="button-collapse button_side_bar_open"><i class="material-icons">menu</i></a></li>
        </ul>
    </div>
</nav>
<ul id="slide-out" class="side-nav">
    <li><div class="userView">
        </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="{{url('add-work')}}">Add new Diplom work</a></li>
    <li><a class="waves-effect" href="{{url('all-order-work')}}">Orders</a></li>
</ul>





