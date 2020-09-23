@extends('layouts.app')

@section('content')


<section class="hero hero-with-header">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-7">
      <div class="card">
        <div class="card-header">Update your Details</div>
        <div class="card-body">

        <div class="text-center pt-2">
              <img src="{{asset('/storage/'. Auth::user()->avatar)}}" alt="" class="avatar">
              <h4>{{Auth::user()->name}}</h4>
          </div>
          <form method="POST" action="{{ route('profile.update', Auth::User()->id) }}" files="true" enctype="multipart/form-data">
            @method('Patch')
            @csrf
            <div class="form-group row pl-3 pr-3">
              <label for="name">Name</label>
              <input id="name" name="name" type="text" class="form-control" value="{{Auth::user()->name}}">
            </div>
            <div class="form-group row pl-3 pr-3">
              <label for="email">Email</label>
              <input id="email" name="email" type="text" class="form-control" value="{{Auth::user()->email}}">
            </div>
            <div class="form-group row pl-3 pr-3">
              <label for="mobile">Mobile Number</label>
              <input id="mobile" name="mobile" type="text" class="form-control" value="{{Auth::user()->mobile}}">
            </div>
            <div class="form-group row pl-3 pr-3">
              <label for="address">Address</label>
              <input id="address" name="address" placeholder="your address" type="text" class="form-control" value="{{Auth::user()->address}}">
            </div>
            <div class="form-group row pl-3 pr-3">
              <label for="aadhar">Aadhar card Number</label>
              <input id="aadhar" name="aadhar" placeholder="your aadhar card" type="text" class="form-control" value="{{Auth::user()->aadhar}}">
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
    <div class="col-sm-5">
      <div class="card">
        <!-- <img src="{{asset('bg.jpeg')}}" class="card-img-top" alt="..."> -->
        <div class="card-body">
          @if(Auth::User()->is_verified == 0)
          <div class="alert alert-warning" role="alert"> Your identity is under approval.


          </div>
          @endif
          @if(Auth::User()->is_verified == 1)
          <div class="alert alert-success" role="alert"> Your identity is Approved and Active.

          </div>
          @endif
          <h5 class="card-title">{{Auth::User()->name}}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          @if(Auth::User()->is_verified == 1)
          <h5>Unique Id: {{Auth::User()->uniqueid}}</h5>
          @endif




          
        </div>
      </div>

      <!-- documents -->
      @foreach($documents as $document)
      <div class="card mt-2 p-2">
        <img src="{{asset('storage/'.$document->document)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">{{$document->title}}</h5>
        
        </div>
      </div>
      @endforeach
      <div class="text-center">
      <a href="{{url('/docs/create')}}" class="btn btn-primary mt-3">Add More Documents</a>
     
      </div>
       <!-- documennts   -->


    </div>
  </div>
</div>
</section>



<div class="container">
  <div class="row">

  </div>
</div>
@endsection