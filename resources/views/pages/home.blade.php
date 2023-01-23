@extends('layout.app')

@section('title', 'Movies')

@section('main')
    <h1>Home Page - All Movies</h1>
   

    @foreach ($movies as $elem)
    <h2>{{$elem['title']}} </h2>
    test push
    @endforeach
@endsection