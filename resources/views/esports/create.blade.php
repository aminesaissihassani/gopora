@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>New ESport</h1>

            <form action="{{ route('esport.create') }}" method="POST" class="mb-5">
                @csrf

                <div class="bg-white pb-5 pt-3 px-4 mt-4 create-post">

                    <div class="form-group pt-3 has-error">
                        <label for="slug">Slug *</span> <small>(This field use in url path.)</small></label>
                        <input type="text" class="form-control" name="slug">
                        @error('slug')
                            <span class="text-danger">
                                    {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pt-3">
                        <label for="name">Name *</span></label>
                        <input type="text" class="form-control" name="name">
                        @error('name')
                            <span class="text-danger">
                                    {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-edit btn-block mt-3">Create</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

@endsection
