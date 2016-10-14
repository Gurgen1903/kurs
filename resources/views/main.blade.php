@include('layouts.sidebar')
@include('layouts.header')
<div class="cont" style="width: 75%;float:left;">
    @yield('content')
</div>
<div class="rightBar" style="width: 23%;float:left;">
    @include('layouts.leftbar')
</div>
{{--CALL BACK--}}
<div class="ask_price">
    <div class="body_ask_price">
        <div class="header_ask_price">
            <p>Zadaite vopros</p>
            <i class="material-icons fixed_sms">view_week</i>
        </div>
        <div class="middle_ask_price" style="display: none">
            <div class="row">
                <form action="" method="POST" class="col s12">
                    <div class="input-field ">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Theme</label>
                    </div>
                    <div class="input-field ">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Theme</label>
                    </div>
                    <div class="input-field ">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Theme</label>
                    </div>
                    <div class="input-field ">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Theme</label>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer_ask_price">

        </div>
    </div>
</div>
@include('layouts.footer')