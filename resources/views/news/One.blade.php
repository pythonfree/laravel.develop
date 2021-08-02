@extends('layouts.main')

@section('title', 'Новость')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (!$article['isPrivate'])
                            <h3>{{ $article['title'] }}</h3>
                            <div class="card-img" style="background-image: url({{$article['image'] ?? asset('storage/default.jpg')}})">
                            </div>
                            <p>{{ $article['text']  }}</p>
                        @else
                            Новость приватная, зарегистрируйтесь.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
