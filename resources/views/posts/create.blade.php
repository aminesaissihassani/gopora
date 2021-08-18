@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>New Post</h1>

            <form action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="bg-white pb-5 pt-3 px-4 mt-4 create-post">

                    <div class="form-group pt-3 has-error">
                        <label for="slug">Slug *<small>(This field use in url path.)</small></label>
                        <input type="text" class="form-control" name="slug">
                        @error('slug')
                            <span class="text-danger">
                                    {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pt-3">
                        <label for="title">Title *</label>
                        <input type="text" class="form-control" name="title">
                        @error('title')
                            <span class="text-danger">
                                    {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pt-3">
                        <label for="e_sport_id">eSport *</label>
                        <select class="form-select" aria-label="Default select example" name="e_sport_id">
                            <option selected disabled>Select the eSport</option>
                            @foreach ($esports as $esport)
                                <option value="{{ $esport->id }}">{{ $esport->name }}</option>
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
                            <option selected disabled>Select the team</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
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
                        <textarea rows="5" id="body" class="form-control" name="body"></textarea>
                        @error('body')
                            <span class="text-danger">
                                    {{ 'The Article field is required' }}
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary btn-block mt-3">Publish</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

@endsection
