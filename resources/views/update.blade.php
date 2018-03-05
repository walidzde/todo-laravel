@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('task.save',['id'=>$task->id])}}" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control-input-lg" name="task" value="{{$task->task}}">
            </form>
        </div>
    </div>

@endsection