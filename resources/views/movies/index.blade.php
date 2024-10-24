@extends('layouts.app')
@section('page-title', 'Movies')
@section('main-content')

    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="text-center text-info mb-5">Movies</h1>
            </div>
            @forelse ($movies as $movie)
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-header text-center fw-bold fs-5">
                            {{ $movie->title }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-primary list-group-item-action">
                                <span class="fw-bold">Original Title:</span> {{ $movie->original_title }}
                            </li>
                            <li class="list-group-item list-group-item-info list-group-item-action">
                                <span class="fw-bold">Nationality:</span> {{ $movie->nationality }}
                            </li>
                            <li class="list-group-item list-group-item-success list-group-item-action">
                                <span class="fw-bold">Release Date:</span> {{ $movie->date }}
                            </li>
                            <li class="list-group-item  list-group-item-danger list-group-item-action">
                                <span class="fw-bold">Vote:</span> {{ $movie->vote }}
                            </li>
                        </ul>
                    </div>
                </div>

            @empty
                <div class="col-12">
                    <h2>
                        No Movies Available
                    </h2>
                </div>
            @endforelse
        </div>
    </div>

@endsection
