@extends('layouts.app')
@section('content')
<section class="hero hero-with-header">
<form method="POST" action="{{ action('DocumentController@store') }}" files="true" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-7">
                <div class="card p-4">
                    <div class="form-group mb-1">
                        <label for="password">Document Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Document Title">
                    </div>
                    <div class="form-group">
                    <input type="file" name="docs" value="upload" class="b">    
                    </div>
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                    <button type="submit" value="upload" class="btn btn-outline-primary">Add Document</button>
                </div>
            </div>
        </div>
    </div>

</form>
</section>
@endsection()