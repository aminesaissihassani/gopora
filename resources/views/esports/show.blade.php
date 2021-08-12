@extends('layout/primary')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-9 mt-4 mb-5">
            <div class="row mb-3">
                <h1>League Of Legends</h1>
            </div>

            <div class="row mt-4">
                <h3 class="mb-3">League Of Legends's News</h3>
                @include('post-card/post-card')
                @include('post-card/post-card')
                @include('post-card/post-card')
            </div>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>

@endsection
