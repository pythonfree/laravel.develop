@extends('layouts.main')

@section('title', 'Главная')

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
                        Добро пожаловать!!!!!!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
