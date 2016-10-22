@extends('admin.layouts.main_admin')
@section('content')

    <div class="allOrders">
        <div class="header_title">
            <h4>Orders</h4>
        </div>
        {{--<div class="orders_examples">--}}
            {{--<a class="waves-effect waves-light btn">All</a>--}}
            {{--<a class="waves-effect waves-light btn">New</a>--}}
            {{--<a class="waves-effect waves-light btn">V rabote</a>--}}
        {{--</div>--}}

        <div class="order_work">
            <table class="bordered">
                <thead>
                <tr>
                    <th data-field="id">Category Order</th>
                    <th data-field="name">Fakultet</th>
                    <th data-field="price">Name Of Work</th>
                    <th data-field="price">Teacher</th>
                    <th data-field="price">Completion Date</th>
                    <th data-field="price">Student Name</th>
                    <th data-field="price">Number</th>
                    <th data-field="price">Permissions</th>
                </tr>
                </thead>

                <tbody>
                @foreach($orders as $val)
                <tr>
                    <td>{{$val->category_order}}</td>
                    <td>{{$val->fakultet}}</td>
                    <td>{{$val->name}}</td>
                    <td>{{$val->teacher}}</td>
                    <td>{{$val->completion_date}}</td>
                    <td>{{$val->name_student}}</td>
                    <td>{{$val->tel_number}}</td>
                    <td>
                        <a href="{{url('update-status-new/').'/'.$val->id}}" data-id="{{$val->id}}"><i class="material-icons">add</i></a>
                        @if($val->new_end == 1)<i class="material-icons">new_releases
                        </i>@endif
                    </td>
                </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>

@endsection