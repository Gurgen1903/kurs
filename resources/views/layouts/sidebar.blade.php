<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />


    <title>Document</title>


    <!-- importing google fonts icons library !-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
        <a href="{{url('/')}}" class="order_work waves-effect">  <i class="fa fa-home fa-lg" aria-hidden="true"></i>Home</a>
    </li>
    <li class="userView">
            <a href="#modal_order_work" class="order_work modalOrderOpen waves-effect">  <i class=" material-icons">work</i>Zakazat Rabotu</a>
    </li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li class="userView" style="padding: 0!important; border-bottom: none">
                <a class="collapsible-header order_work waves-effect">Работы<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul class="dropBacColor">
                        <li class="userView"><a href="{{url('diplom-works/diplom')}}" class="order_work waves-effect">Дипломная</a></li>
                        <li class="userView"><a href="{{url('diplom-works/kursovoi')}}" class="order_work waves-effect">Курсовая</a></li>
                        <li class="userView"><a href="{{url('diplom-works/referat')}}" class="order_work waves-effect">Реферат</a></li>
                        <li class="userView"><a href="{{url('diplom-works/esse')}}" class="order_work waves-effect">ESSE</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
</ul>





