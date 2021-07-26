@extends('layouts.main')

@section('title', 'Test 2')


@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <p>Test 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
