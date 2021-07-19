@extends('layouts.main')

@section('title')
    @parent Новость
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @if (!$article['isPrivate'])
        <h3>{{ $article['title'] }}</h3>
        <p>{{ $article['text']  }}</p>
    @else
        Новость приватная, зарегистрируйтесь.
    @endif
@endsection
