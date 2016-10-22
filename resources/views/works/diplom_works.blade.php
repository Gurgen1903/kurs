@extends('main')
@section('content')
    @if(Auth::check())
            <div class="row all_diplom_works_name">
                <div class="col s12 center work_profi">
                    <h3>Diplomnye raboty</h3>
                </div>
                <div class="col s12 center work_profi_categories">
                    <div class="width_margin_auto  ">
                        <div class="row">
                        @foreach($works_category as $categ)

                            <div class="col s5 work_profi_categories_bg">

                                <a href="diplom-works/worksByCategory/{{$categ->works_object}}" class="{{$categ->works_object}}">{{$categ->works_object}}</a>
                                {{--@foreach($diploms_works as $work)--}}
                                    {{--@if($work->works_object ==  $categ->works_object)--}}
                                        {{--<div class="worker">--}}
                                            {{--<p>{{$work->works_name}}</p>--}}
                                        {{--</div>--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
                            </div>
                        @endforeach
                        </div>

                    </div>
            </div>
        </div>
    @else
        <script>
            $(document).find('.login_modal_view').click();
        </script>

    @endif
@endsection