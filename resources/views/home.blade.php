@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="mb-4">Finished Projects</h1>

    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-4 mb-3">
                <div class="card bg-dark text-light">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project['name'] }}</h5>
                        <p class="card-text">{{ $project['description'] }}</p>
                        <a href="{{ $project['link'] }}" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
