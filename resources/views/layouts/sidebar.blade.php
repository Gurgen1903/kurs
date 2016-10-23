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
    <link href="{{url('/css/style.css')}}" rel="stylesheet">
    <link href="{{url('/css/media.css')}}" rel="stylesheet">

    <!-- Materialize -->
    <link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/materialize.css') }}" />
    <script src="{{ url('js/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ url('materialize/js/materialize.min.js') }}"></script>
    {{--Weather plugin--}}

    <script src="{{ url('js/script.js') }}"></script>
</head>
<body>

<ul id="slide-out" class="side-nav">
    <li class="userView">
        <a href="{{url('/')}}" class="order_work waves-effect">  <i class=" material-icons">work</i>Home</a>
    </li>
    <li class="userView">
            <a href="#modal_order_work" class="order_work waves-effect">  <i class=" material-icons">work</i>Zakazat Rabotu</a>
    </li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li class="userView" style="padding: 0!important;">
                <a class="collapsible-header order_work waves-effect">Works<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul class="dropBacColor">
                        <li class="userView"><a href="{{url('diplom-works')}}" class="order_work waves-effect"><i class="material-icons">assignment</i>Diploms</a></li>
                        <li class="userView"><a href="#!" class="order_work waves-effect"><i class="material-icons">assignment</i>Kursovoi</a></li>
                        <li class="userView"><a href="#!" class="order_work waves-effect"><i class="material-icons">assignment</i>ESSE</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
</ul>





