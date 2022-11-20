@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($films as $film)
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <a href="{{ route('film.detail', ['film' => $film->id]) }}">{{ $film->title }}</a>
                    <p>Ganres:</p>
                    <div>
                        @foreach ($film->ganres as $ganre)
                            <a href="">{{ $ganre->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection