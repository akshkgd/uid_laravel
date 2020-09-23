@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5 justify-content-center">
        <div class="col-sm-7">
            <div class="card">
            <div class="card-header">Add New task</div>
            <div class="card-body">
            <form method="POST" action="{{ route('task.update', $task->id) }}">
             @method('Patch')           
            @csrf
                <div class="form-group row pl-3 pr-3">
                    <label for="task"></label>
                    <input id="task" name="task" placeholder="Please type your task" type="text" class="form-control" value="{{$task->task}}">
                </div>
                <button type="submit" class="btn btn-primary">Update task</button>
                </form>
            </div>
            </div>
            
        </div>
    </div>
</div>

@endsection