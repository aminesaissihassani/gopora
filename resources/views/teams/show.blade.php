@extends('layout/primary')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-9 mt-4 mb-5">
            <div>
                <h2>{{ ucwords($team->name) }}</h2>
                @auth
                @if(auth()->user()->role === 'admin')
                    <span><a href="{{ route('team.edit', $team->slug) }}" class="btn btn-edit">Edit</a></span>
                    <span>
                        <form action="{{ route('team.delete', $team->slug) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-edit">Delete</button>
                        </form>
                    </span>
                @endif
                @endauth
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="team-img-div">
                        <img class="team-img" src="{{ asset('storage/logos/'. $team->logo) }}" alt="{{ ucwords($team->name) }}'s logo">
                    </div>
                </div>
                <div class="col-9">
                    <p><strong>ESport: </strong><a href="/esports/{{ $team->esport->slug }}">{{ ucwords($team->esport->name) }}</a></p>
                    <p><strong>Region: </strong>{{ $team->region }}</p>
                    <p><strong>Created: </strong>{{ $team->founded_at }}</p>
                </div>
            </div>
            <div class="row mt-4">
                <h3 class="mb-3">{{ ucwords($team->name) }}'s News</h3>
                @if($team->posts->count())
                    @foreach ($team->posts->sortByDesc('created_at') as $post)
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
