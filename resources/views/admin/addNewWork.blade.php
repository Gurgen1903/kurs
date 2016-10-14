@extends('admin.layouts.main_admin')
@section('content')
    <div class="row">
        <form class="col s6" id="add_new_work" action="{{url('upload-new-work')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col s12">
                <div class="row">

                    <div class="input-field col s10 {{(count($errors) > 0)?'errorsForm':''}}">
                        <select name="work_object">
                            <option value="" disabled selected>Choose Object</option>
                            <option value="ekonomika">Economika</option>
                            <option value="informatika">Informatika</option>
                            <option value="yuridicheskii">Yurisprudenciya</option>
                        </select>
                        <label></label>
                    </div>
                    <div class="input-field col s10 {{(count($errors) > 0)?'errorsForm':''}}" >
                        <input id="work_name" type="text" name="work_name" class="validate">
                        <label for="work_name">Work Name</label>
                    </div>
                    <div class="file-field input-field col s10 {{(count($errors) > 0)?'errorsForm':''}}">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" name="filefield">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <div class="file-field left input-field col s10 ">
                        <input type="submit" class="waves-effect waves-light btn" value="ADD">
                    </div>

                </div>
            </div>
        </form>
        <div class="col s4">
            @foreach($data as $val)
                <div class="all_work_this_user">
                    <span class="work_object_this_user">{{$val->works_object}}</span>: <a href="http://localhost/kurs/uploads/{{$val->works_name}}">{{$val->works_name}}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection