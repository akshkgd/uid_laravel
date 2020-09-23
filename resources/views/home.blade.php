@extends('layouts.app')

@section('content')
<style>
    .card {
        margin-bottom: 10px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-7">
            @foreach($task as $mytask)
            @if(Auth::user()->id != $mytask->user_id)
            <div class="card p-3">

                <h2 class="card-title">{{$mytask->task}}</h3>
                    <p>{{$mytask->created_at->format('M-d')}}</p>
                    <h4>Assigned by {{$mytask->assigned_by->name}}</h4>
            </div>
            @endif
            @endforeach
        </div>
        <div class="col-md-5">
            <div class="card shadow-sm">
                <ul class="list-group list-group-flush"></ul>
                <a href="{{url('/add-task')}}"class="btn btn-outline-primary">New Task</a>


                <h3 class="p-3">tasks you Assigned</h3>
                @foreach($task as $mytask)
                @if(Auth::user()->id == $mytask->user_id)
            
                <li class="list-group-item">{{$mytask->task}} <a href="{{route('task.edit', $mytask->id)}}">edit</a></li>
                
                

                @endif
                @endforeach

                
            </div>

        </div>
    </div>
</div>
</div>

@endsection