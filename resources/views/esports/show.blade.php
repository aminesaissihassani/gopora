@extends('layout/primary')

@section('content')

<div class="container">
    <div class="row mb-5">
        <div class="col-9 mt-4 mb-5">
            <div>
                <h1>{{ ucwords($esport->name) }}</h1>
                @auth
                @if(auth()->user()->role === 'admin')
                    <span><a href="{{ route('esport.edit', $esport->slug) }}" class="btn btn-edit">Edit</a></span>
                    <span>
                        <form action="{{ route('esport.delete', $esport->slug) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-edit">Delete</button>
                        </form>
                    </span>
                @endif
                @endauth
            </div>

            <div class="row mt-4">
                <h3 class="mb-4">{{ ucwords($esport->name) }}'s Articles</h3>
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
