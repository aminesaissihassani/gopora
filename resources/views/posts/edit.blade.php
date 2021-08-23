@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Post</h1>

            <form action="{{ route('post.edit', $post->slug) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="bg-white pb-5 pt-3 px-4 mt-4 create-post">

                    <div class="form-group pt-3">
                        <label for="title">Title *</label>
                        <input type="text" value="{{ $post->title }}" class="form-control" name="title">
                        @error('title')
                            <span class="text-danger">
                                    {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pt-3">
                        <label for="e_sport_id">eSport *</label>
                        <select class="form-select" aria-label="Default select example" name="e_sport_id">
                            <option disabled>Select the eSport</option>

                            @foreach ($esports as $esport)
                                @if($esport->id === $post->e_sport_id)
                                    <option value="{{ $esport->id }}" selected>{{ $esport->name }}</option>
                                @else
                                    <option value="{{ $esport->id }}">{{ $esport->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('e_sport_id')
                            <span class="text-danger">
                                    {{ 'The eSport field is required' }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pt-3">
                        <label for="team_id">Team</label>
                        <select class="form-select" aria-label="Default select example" name="team_id">
                            @if (!$post->team_id)
                                <option selected disabled>Select the team</option>
                            @endif
                            @foreach ($teams as $team)
                                @if($post->team_id && $team->id === $post->team_id)
                                    <option value="{{ $team->id }}" selected>{{ $team->name }}</option>
                                @else
                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group pt-3">
                        <label for="formFileLg" class="form-label">Uplaod the article's image</label>
                        <input class="form-control" id="formFileLg" type="file" name="image">
                        @error('image')
                            <span class="text-danger">
                                    {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pt-3">
                        <label for="body">Acticle</label>
                        <textarea rows="5" class="form-control" name="body" id="body">{{ $post->body }}</textarea>
                        @error('body')
                            <span class="text-danger">
                                    {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-edit btn-block mt-3">Update</button>
                    </div>

                </div>

            </form>
        </div>

    </div>
</div>

@endsection
