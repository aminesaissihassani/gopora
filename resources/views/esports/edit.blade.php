@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit ESport</h1>

            <form action="{{ route('esport.edit', $esport->slug) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="bg-white pb-5 pt-3 px-4 mt-4 create-post">

                    <div class="form-group pt-3">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" name="name" value="{{ $esport->name }}">
                        @error('slug')
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
