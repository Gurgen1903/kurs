@extends('main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="col s12">
                <div class="backToDiplom">
                    <a href="{{url()->previous()}}">Назад</a>
                </div>
                @foreach($data as $val)

                    <div class="col s12 categories_list_data work_profi">
                        <p class="left" style="margin: 0">{{$val->display_name}}</p>
                        <div class="edit_download right">
                            <a download="{{$val->display_name}}" href="http://localhost/kurs/uploads/{{$val->works_name}}"> <i class="small material-icons">play_for_work</i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection