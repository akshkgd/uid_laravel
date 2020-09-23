@extends('layouts.app')

@section('content')

<h3>Total Users: {{$users->count()}}</h3>
@foreach($users as $user)
<div class="text-center">
<h1>{{$user->name}}</h1>
<p>{{$user->email}}</p>
<br>
</div>

@endforeach



@endsection