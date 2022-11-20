@extends('layouts.base')

@section('content')
    <p>{{ $film->title }}</p>
    <p>{{ $film->description }}</p>
@endsection