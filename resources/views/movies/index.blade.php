@extends('layouts.main')

@section('page-title')
Laravel Model Controller
@endsection


@section('main-content')
<div class="container">
    <h1 class="text-center">
        Movies
    </h1>
    <div class="row justify-content-center">
      @foreach($movies as $movie)  
        <div class="col-5 gy-3 text-center">
            <div class="card">
                <div class="card-body">
                    <h4>
                        {{$movie->title}}
                    </h4>
                    <h6>
                        {{$movie->original_title}}
                    </h6>
                    <div>
                        {{$movie->date}}
                    </div>
                    <div>
                        {{$movie->nationality}}
                    </div>
                    <div>
                        {{$movie->vote}}
                    </div>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection