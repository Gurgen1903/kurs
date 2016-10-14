@extends('main')
@section('content')
    <div class="container">
        <div class= "row all_diplom_works_name">
            <div class="col s12 center work_profi">
                <h3>Diplomnye raboty</h3>
            </div>
            <div class="col s12 center work_profi_categories">
                {{--<div class="width_margin_auto  ">--}}
                    {{--@foreach($subjects as $subject)--}}
                        {{--<div class="work_profi_categories_bg">--}}
                            {{--<a href="#">{{$subject->subject_name}}</a>--}}
                            {{--@foreach($diploms_works as $work)--}}
                                {{--@if($subject->subject_name == $work->subject)--}}
                                    {{--<div class="works_name">--}}
                                        {{--<a>{{$work->diplom_name}}</a>--}}
                                    {{--</div>--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                </div>
            </div>
        </div>
    </div>
@endsection