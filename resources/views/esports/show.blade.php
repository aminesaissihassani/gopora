@extends('layout/primary')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-9 mt-4 mb-5">
            <div class="row mb-3">
                <h1>{{ ucwords($esport->name) }}</h1>
            </div>

            <div class="row mt-4">
                <h3 class="mb-4">{{ ucwords($esport->name) }}'s News</h3>
                @if($posts->count())
                @foreach ($posts as $post)
                    @include('post-card/post-card')
                @endforeach
                @else
                <p class="text-center">No posts yet, Please check later</p>
                @endif
            </div>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>

@endsection
