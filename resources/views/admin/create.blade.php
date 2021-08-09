@extends('layouts.main')

@section('title', 'Добавить новость')


@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">

                        <form enctype="multipart/form-data" method="POST" action="{{route('admin.create')}}">
                            @csrf

                            <div class="form-group">
                                <label for="newsTitle">Название новости</label>
                                <input type="text" name="title" class="form-control"
                                id="newsTitle" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <label for="newsCategory">Категория новости</label>
                                <select name="category" class="form-control" id="newsCategory"
                                >
                                    @forelse($categories as $item)
                                        <option @if ($item['id'] == old('category')) selected @endif
                                            value="{{$item['id']}}">
                                            {{$item['category']}}
                                        </option>
                                    @empty
                                        <h2>Нет категории</h2>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="newsText">Текс новости</label>
                                <textarea name="text" id="newsText" cols="5" rows="5" class="form-control">{{old('text')}}</textarea>
                            </div>

                            <div class="form-group">
                                <input type="file" name="image">
                            </div>

                            <div class="form-check">
                                <input @if (1 == old('isPrivate')) checked @endif
                                    type="checkbox" name="isPrivate" class="form-check-input"
                                value="1" id="newsPrivate">
                                <label for="newsPrivate" class="form-check-label">
                                    Новость private?
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control">
                                    @if ($news->id)
                                        Изменить
                                    @else
                                        Добавить
                                    @endif
                                </button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
