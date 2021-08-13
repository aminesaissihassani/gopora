@extends('layout/primary')

@section('content')

<div class="container">
    <div class="row my-5">
        <!-- Article Start -->
        <div class="col-9">
            <!-- Article's Title -->
            <h4><strong>{{ $post->title }}</strong></h4>
            <!-- Date -->
            <p>{{ $post->created_at->diffForHumans() }}</p>
            <!-- Image -->
            <div class="article-img-div px-5 my-4">
                <img class="article-img" src="https://s3-eu-central-1.amazonaws.com/www-staging.esports.com/WP%20Media%20Folder%20-%20esports-com/app/uploads/2021/07/51108093029_d2397f9b02_c-1-607x405.jpg" alt="">
            </div>
            <!-- Article's body -->
            <p class="mt-4">
                {{ $post->body }}
            </p>
        </div>
        <!-- Article End -->
        <div class="col-3">

        </div>
    </div>
</div>

@endsection
