@extends('home')
@section('page_title', 'Movie')
@section('main')
    <div class="container mt-5">
        <div class="row g-4">
            @forelse ($movies as $movie)
                <div class="col-7">
                    <div class="card ">
                        <div class="card-body">
                            <h2 class="fs-3 fw-bolder">{{ $movie->title }}</h2>
                            <p class="fw-medium">{{ $movie->original_title }}</p>
                            <p class="text-success">{{ $movie->nationality }}</p>
                            <p class="text-primary">{{ $movie->date }}</p>
                            <p class="text-warning">{{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @empty
                No Film Founded
            @endforelse
        </div>
    </div>
@endsection
