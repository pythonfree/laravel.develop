@extends('layouts.main')

@section('title', 'Новости')

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
                        @forelse ($news as $item)
                            <h2>{{ $item['title'] }}</h2>
                            @if (!$item['isPrivate'])
                                <a href="{{ route('news.show', $item['id']) }}">Подробнее...</a>
                            @endif
                            <hr>
                        @empty
                            'No news!'
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



