@extends('admin.layouts.main_admin')
@section('content')
    <div class="top_lists_all">
        <div class="box total_users">
            <p>Total Users</p>
            <p>{{$total_users}}</p>

        </div>
        <div class="box average_time">
            <p> Average Time</p>

        </div>
        <div class="box total_users">
            <p>Total Males</p>
        </div>
        <div class="box total_users">
            <p> Total Females</p>
        </div>
        <div class="box total_users">
            <p>Total Collections</p>
        </div>
    </div>
    <div class="users_table">

    </div>


@endsection