@extends('layouts.main')

@section('title', 'Админка')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2>Админка</h2>
            @forelse($news as $item)
                <div class="col-md-12 card">
                    <div class="card-body">
                        <h2>{{$item->title}}(id={{$item->id}})</h2>
                        <a href="{{route('admin.edit', $item)}}">
                            <button class="btn btn-success" type="button">Edit</button>
                        </a>
                        <a href="{{route('admin.destroy', $item)}}">
                            <button class="btn btn-danger" type="button">Delete</button>
                        </a>
                        <a href="{{route('news.show', $item)}}">Подробнее...</a>
                    </div>
                </div>
            @empty
                <p>Нет новостей</p>
            @endforelse
            {{$news->links()}}
        </div>
    </div>
@endsection
