@extends('layouts.app')

@section('content')


<section class="hero hero-with-header">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-7">
      <div class="card">
          <div class="text-center pt-2">
              <img src="{{asset('/storage/'. $user->avatar)}}" alt="" class="avatar">
              <h4>{{$user->name}}</h4>
          </div>
        <div class="card-header">Update {{$user->name}} Details</div>
        <div class="card-body">
          <form method="POST" action="{{ route('profile.update', $user->id) }}" files="true" enctype="multipart/form-data">
            @method('Patch')
            @csrf
            <div class="form-group row pl-3 pr-3">
              <label for="name">Name</label>
              <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}">
            </div>
            <div class="form-group row pl-3 pr-3">
              <label for="email">Email</label>
              <input id="email" name="email" type="text" class="form-control" value="{{$user->email}}">
            </div>
            <div class="form-group row pl-3 pr-3">
              <label for="mobile">Mobile Number</label>
              <input id="mobile" name="mobile" type="text" class="form-control" value="{{$user->mobile}}">
            </div>
            <div class="form-group row pl-3 pr-3">
              <label for="address">Address</label>
              <input id="address" name="address" placeholder="your address" type="text" class="form-control" value="{{$user->address}}">
            </div>
            <div class="form-group row pl-3 pr-3">
              <label for="aadhar">Aadhar card Number</label>
              <input id="aadhar" name="aadhar" placeholder="your aadhar card" type="text" class="form-control" value="{{$user->aadhar}}">
            </div>
            <div class="form-group">
                        <label for=""> Image</label> <br>
                        <input type="file" name="avatar" value="upload" class="b">
                    </div>
            <button type="submit" class="btn btn-primary">Update profile</button>
          </form>
        </div>
      </div>

    </div>
    
</section>



<div class="container">
  <div class="row">

  </div>
</div>
@endsection