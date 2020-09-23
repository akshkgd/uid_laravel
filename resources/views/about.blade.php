@extends('layouts.app')

@section('content')

<section class="hero hero-with-header">

<div class="container pt-5">
    <h2 class="text-center pb-5">Anywhere you are, UID can help you with your identification issues!</h2>
    <img src="{{'/img/2.jpg'}}" alt="" class="img-fluid rounded rounded">
</div>
<div class="pt-5 container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <h1 class="display-8 text-center">
                We are willing to provide the best class identification system worldwide to make people lives hasslefree!🤩
            </h1>
        </div>
    </div>
</div>

<div class="container pt-5">
    <div class="row justify-content-center text-center">

        <!-- <h1 class="text-center">Meet the creators!</h1> -->
        <div class="col-sm-4 text-center">
            <img src="{{asset('/img/user.png')}}" alt="" class="avatar-hero">
            <h3 class="pt-2">Ashish Shukla</h3>
            <h5 class="text-muted">ECC1505067</h5>
        </div>
        <div class="col-sm-4 text-center">
            <img src="{{asset('/img/user.png')}}" alt="" class="avatar-hero">
            <h3 class="pt-2">Ashish Shukla</h3>
            <h5 class="text-muted">ECC1605487</h5>
        </div>
    </div>
</div>

</section>


@endsection