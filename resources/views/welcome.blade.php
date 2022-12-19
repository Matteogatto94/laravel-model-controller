@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome to Laravel-Model-Controller</h1>
        <p class="fs-4">Find Our Amazing Movies collection</p>
        <button class="btn btn-primary btn-lg" type="button">Find out More</button>
    </div>
</div>
<div class="content">
    <div class="container my-5">
        <div class="row row-cols-md-3 g-4">
            @forelse($movies as $movie)
            <div class="col p-4">
                <div class="card">
                    <div class="card-body">
                        <h3>{{$movie->title}}</h3>
                        <h5>{{$movie->original_title}}</h5>
                        <p>Nazionalità: {{$movie->nationality}}</p>
                        <p>Data: {{$movie->date}}</p>
                        <p>Voto: {{$movie->vote}}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <p>Sorry, no movies in the store yet.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection