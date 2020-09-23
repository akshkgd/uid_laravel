@extends('layouts.app')

@section('content')
<section class="hero hero-with-header">

<div class="container">
    <div class="row">
        <div class="col-sm-4 ">
        <div class="card p-3 bg-light">
        <h3>Total Users</h1>
        <h2>{{$users->count()}}</h3>
        </div>
        </div>

        <div class="col-sm-4">
        <div class="card p-3 bg-light">
        <h3>Total Users</h1>
        <h2>{{$users->count()}}</h3>
        </div>
        </div>

        <div class="col-sm-4">
        <div class="card p-3  bg-light">
        <h3>Total Users</h1>
        <h2>{{$users->count()}}</h3>
        </div>
        </div>
    </div>
</div>

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card p-3">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Aadhar</th>
      <th scope="col">option</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)  
  <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->mobile}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->aadhar}}</td>
      <td>
      <div class="d-flex">
          <a href="{{route('profile.edit', $user->id)}}" class="link">edit</a>
      <a href="{{ route('profile.update', $user->id) }}" class="link pl-1">Approve</a>
      <form action="{{route('profile.destroy', [$user->id])}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-xs" value="Delete" />
                        </form>
      </div>    
     
    </td>
    </tr>
    @endforeach
            </div>
        </div>
    </div>
</div>
</section>
@endsection