
@extends('movies.layout')
@section('content')
<div class="container fluid mt-3">
    @if($movie)
<div class="row pb-5">
    <div class="col-4"></div>
    <div class="col-4">
    <div class="card" style="width: 20rem;">
        <img src="{{ asset('uploads/'.$movie->poster ) }}" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <p class="card-text">{{ $movie->genre }} | {{ $movie->release_year }}</p>
        </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>
    @endif
</div>
@endsection
