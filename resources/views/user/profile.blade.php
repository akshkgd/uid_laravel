@extends('layouts.app')

@section('content')
<style>
    .avatar {
        height: 100px;
        width: 100px;
        border-radius: 50%;
    }
</style>
<section class="hero hero-with-header">
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card card-body">
                <h2 class="text-center">Unique Identification System</h2>
                <hr>
                <div class="row">
                    @foreach($aa as $a)
                    <div class="col-sm-6">
                        <h3 class="card-title">Name: {{$a->name}}</h3>
                        <h4 class="card-text">Email: {{$a->email}}</h4>
                        <h4 class="card-text">Mobile: {{$a->mobile}}</h4>
                        <h4 class="card-text">Address: {{$a->address}}</h4>



                    </div>
                    @endforeach
                    <div class="col-sm-6 text-right">
                        <img src="{{asset('/storage/'.$a->avatar)}}" alt="" class="avatar">

                    </div>
                </div>
                @if($a->is_verified == 1)
                <h4 class="alert alert-success text-center mt-3" style="letter-spacing: 0.625rem;">{{$a->uniqueid}}</h4>
                @endif


                @if($a->is_verified == 0)
                <h4 class="alert alert-danger text-center mt-3" ">User Not Verified</h4>
                @endif
                
                
            </div>
        </div>
    </div>
</div>

</section>


@endsection