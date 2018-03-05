@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="./create/task" method="post">
                {{csrf_field()}}
                <input type="text" name="task"  class="form-control-input-lg" placeholder="Task here">
            </form>
        </div>
    </div>
    @foreach($tasks as $task)
        {{$task->task}}
        <a href="{{route('task.delete',['id'=>$task->id])}}" class="btn btn-danger">X</a>
        <a  class="btn btn-info btn-s" href="{{route('task.update',['id'=>$task->id])}}" >Update</a>
        @if(! $task->completed)
            <a href="{{route('task.completed',['id'=>$task->id])}}" class="btn btn-success btn-s">Mark as completed</a>
        @else
            <span class="text-success">Completed !</span>
        @endif
        <hr>
    @endforeach
    {{!!  $tasks->render() !!}}
@endsection