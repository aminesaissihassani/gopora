@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Add a New Team</h1>

            <form action="{{ route('team.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="bg-white pb-5 pt-3 px-4 mt-4 create-post">

                    <div class="form-group pt-3 has-error">
                        <label for="slug">Slug * <small>(This field use in url path.)</small></label>
                        <input type="text" class="form-control" name="slug">
                        <span class="help-block">Field not entered!</span>
                    </div>

                    <div class="form-group pt-3">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" name="name">
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
                        <label for="region">Region *</label>
                        <input type="text" class="form-control" name="region">
                    </div>

                    <div class="form-group pt-3">
                        <label for="logo" class="form-label">Uplaod the team's logo</label>
                        <input class="form-control" id="logo" type="file" name="logo">
                    </div>

                    <div class="form-group pt-3">
                        <label for="founded_at">Founded at *</label>
                        <input type="date" class="form-control" name="founded_at">
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary btn-block mt-3">Create</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

@endsection
