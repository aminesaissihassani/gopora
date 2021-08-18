@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="w-50">
            <h1 class="text-center">Login</h1>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="bg-white pb-5 pt-3 px-4 mt-4 create-post">
                    @if (session()->has('status'))
                        <div class="text-center text-danger">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group pt-3 has-error">
                        <label for="email">Email *</label>
                        <input type="text" class="form-control" name="email">
                        @error('email')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pt-3">
                        <label for="password">Password *</label>
                        <input type="password" class="form-control" name="password">
                        @error('password')
                            <span>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary btn-block mt-3">Login</button>
                    </div>

                </div>

            </form>
        </div>

    </div>
</div>

@endsection
