@extends('layout/primary')

@section('content')

<div class="container">
    <div class="row my-5">
        <!-- Article Start -->
        <div class="col-lg-9">
            <!-- Article's Title -->
            <h4><strong>{{ $post->title }}</strong></h4>
            <!-- Date -->
            <div>
                <span>Published by {{ $post->user->name }}, {{ $post->created_at->diffForHumans() }}</span>
                @auth
                @if(auth()->user()->role === 'admin' || auth()->user()->id === $post->user_id)
                <span><a href="{{ route('post.edit', $post->slug) }}" class="btn btn-edit">Edit</a></span>
                <span>
                    <form action="{{ route('post.delete', $post->slug) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-edit">Delete</button>
                    </form>
                </span>
                @endif
                @endauth
            </div>

            <br>


            <a href="{{ '/esports/'. $post->esport->slug  }}" class="esport-block">
                {{ ucwords($post->esport->name) }}
            </a>

            @if($post->team)
            <a href="{{ '/teams/'. $post->team->slug  }}" class="team-block">
                {{ ucwords($post->team->name) }}
            </a>
            @endif

            <!-- Image -->
            <div class="article-img-div px-5 my-4">
                <img class="article-img" src="{{ asset('storage/images/'. $post->image) }}" alt="Article's Photo">
            </div>
            <!-- Article's body -->
            <p class="mt-4">
                {{ $post->body }}
            </p>
        </div>
        <!-- Article End -->
        <div class="col-3">

        </div>
    </div>
</div>

@endsection
