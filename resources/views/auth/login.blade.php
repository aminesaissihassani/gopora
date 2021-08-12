@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="w-50">
            <h1 class="text-center">Login</h1>

            <form action="" method="POST">

                <div class="bg-white pb-5 pt-3 px-4 mt-4 create-post">

                    <div class="form-group pt-3 has-error">
                        <label for="email">Email <span class="require">*</span></label>
                        <input type="text" class="form-control" name="email">
                        <span class="help-block">Field not entered!</span>
                    </div>

                    <div class="form-group pt-3">
                        <label for="password">Password <span class="require">*</span></label>
                        <input type="password" class="form-control" name="password">
                    </div>


                </div>

            </form>
        </div>

    </div>
</div>

@endsection
