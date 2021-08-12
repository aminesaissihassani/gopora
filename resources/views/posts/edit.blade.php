@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Post</h1>

            <form action="" method="POST">

                <div class="bg-white pb-5 pt-3 px-4 mt-4 create-post">

                    <div class="form-group pt-3 has-error">
                        <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                        <input type="text" class="form-control" name="slug">
                        <span class="help-block">Field not entered!</span>
                    </div>

                    <div class="form-group pt-3">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group pt-3">
                        <label for="formFileLg" class="form-label">Uplaod the article's image</label>
                        <input class="form-control form-control-lg" id="formFileLg" type="file">
                    </div>

                    <div class="form-group pt-3">
                        <label for="acticle">Acticle</label>
                        <textarea rows="5" class="form-control" name="acticle"></textarea>
                    </div>

                </div>

            </form>
        </div>

    </div>
</div>

@endsection
