@extends('layout/primary')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-9 mt-4 mb-5">
            <div class="row mb-3">
                <h2>FNATIC</h2>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="team-img-div">
                        <img class="team-img" src="https://img.kooora.com/?i=kooora_logo%2fteams%2fspain%2ffc+barcelona.gif" alt="">
                    </div>
                </div>
                <div class="col-9">
                    <p><strong>ESport: </strong>League of Legends</p>
                    <p><strong>Region: </strong>Europe</p>
                    <p><strong>Created: </strong>March 14, 2011</p>
                </div>
            </div>
            <div class="row mt-4">
                <h3 class="mb-3">FNATIC's News</h3>
                @include('post-card/post-card')
                @include('post-card/post-card')
                @include('post-card/post-card')
            </div>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>

@endsection
