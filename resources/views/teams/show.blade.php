@extends('layout/primary')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-9 mt-4 mb-5">
            <div class="row mb-3">
                <h2>{{ ucwords($team->name) }}</h2>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="team-img-div">
                        <img class="team-img" src="https://img.kooora.com/?i=kooora_logo%2fteams%2fspain%2ffc+barcelona.gif" alt="">
                    </div>
                </div>
                <div class="col-9">
                    {{-- @dd($team->esport) --}}
                    <p><strong>ESport: </strong><a href="/esports/{{ $team->esport->slug }}">{{ ucwords($team->esport->name) }}</a></p>
                    <p><strong>Region: </strong>{{ $team->region }}</p>
                    {{-- <p><strong>Created: </strong>{{ $team->founded_at->diffForHumans() }}</p> --}}
                    <p><strong>Created: </strong>{{ $team->founded_at }}</p>
                </div>
            </div>
            <div class="row mt-4">
                <h3 class="mb-3">{{ ucwords($team->name) }}'s News</h3>
                @foreach ($team->posts as $post)
                    @include('post-card/post-card')
                @endforeach
            </div>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>

@endsection
