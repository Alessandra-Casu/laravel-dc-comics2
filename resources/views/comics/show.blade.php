@extends('layouts.base')

@section('contents')

    <h2>{{ $comic->title}}</h2>
    <img class="img" src="{{$comic->thumb}}" alt="">
    <p>{{ $comic->description }}</p>
    <h6>{{ $comic->type}}</h6>
    <h6>{{ $comic->series}}</h6>
    <h6>{{ $comic->sale_date}}</h6>
    <h6>{{ $comic->price}}</h6>

    

@endsection