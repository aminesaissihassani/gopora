@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Team</h1>

            <form action="{{ route('team.edit', $team->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="bg-white pb-5 pt-3 px-4 mt-4 create-post">

                    <div class="form-group pt-3">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" name="name" value="{{ $team->name }}">
                    </div>

                    <div class="form-group pt-3">
                        <label for="e_sport_id">eSport *</label>
                        <select class="form-select" aria-label="Default select example" name="e_sport_id">
                            <option disabled>Select the eSport</option>

                            @foreach ($esports as $esport)
                                @if($esport->id === $team->e_sport_id)
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
                        <label for="region">Region *</label>
                        <input type="text" class="form-control" name="region" value="{{ $team->region }}">
                    </div>

                    <div class="form-group pt-3">
                        <label for="logo" class="form-label">Uplaod the team's logo</label>
                        <input class="form-control" id="logo" type="file" name="logo">
                    </div>

                    <div class="form-group pt-3">
                        <label for="founded_at">Founded at *</label>
                        <input type="text" class="form-control" name="founded_at" value="{{ $team->founded_at }}">
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
