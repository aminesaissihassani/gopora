@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>New Team</h1>

            <form action="" method="POST">

                <div class="bg-white pb-5 pt-3 px-4 mt-4 create-post">

                    <div class="form-group pt-3 has-error">
                        <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                        <input type="text" class="form-control" name="slug">
                        <span class="help-block">Field not entered!</span>
                    </div>

                    <div class="form-group pt-3">
                        <label for="name">Name <span class="require">*</span></label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group pt-3">
                        <label for="esport">ESport <span class="require">*</span></label>
                        <input type="text" class="form-control" name="esport">
                    </div>

                    <div class="form-group pt-3">
                        <label for="region">Region <span class="require">*</span></label>
                        <input type="text" class="form-control" name="region">
                    </div>

                    <div class="form-group pt-3">
                        <label for="logo" class="form-label">Uplaod the team's logo</label>
                        <input class="form-control" id="logo" type="file" name="logo">
                    </div>

                    <div class="form-group pt-3">
                        <label for="founded_at">Founded at <span class="require">*</span></label>
                        <input type="text" class="form-control" name="founded_at">
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

@endsection
