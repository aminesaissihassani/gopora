@extends('layout/primary')


@section('content')



<div class="container">
    <div class="row mt-4">
        <h2 class="text-dark"><strong>Latest News</strong></h2>
        <!-- News side Start -->
        <div class="col-9 text-dark mb-5">
            <!-- The latest 3 news Start-->
            <div class="row py-3 top-3-articles mb-3">
                @include('post-card/featured-post-card')
                @include('post-card/featured-post-card')
                @include('post-card/featured-post-card')
            </div>
            <!-- The latest 3 news End-->
            @include('post-card/post-card')
            @include('post-card/post-card')
            @include('post-card/post-card')
            @include('post-card/post-card')
            @include('post-card/post-card')
            @include('post-card/post-card')
            @include('post-card/post-card')
            @include('post-card/post-card')
        </div>
        <!-- News side End -->

        <!-- Right Side Start -->
        <div class="col-3">
            <h3 class="mb-3">The Best Teams</h3>
            <div class="row mb-2">
                <div class="col-2" style="height: 30px;">
                    <img src="{{ asset('ressources/icons/eu.png') }}" alt="" style="height: 100%;">
                </div>
                <div class="col-3">
                    <a href="#">
                        FNATIC
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        FNATIC
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        FNATIC
                    </a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-2" style="height: 30px;">
                    <img src="{{ asset('ressources/icons/eu.png') }}" alt="" style="height: 100%;">
                </div>
                <div class="col-3">
                    <a href="#">
                        FNATIC
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        FNATIC
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        FNATIC
                    </a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-2" style="height: 30px;">
                    <img src="{{ asset('ressources/icons/eu.png') }}" alt="" style="height: 100%;">
                </div>
                <div class="col-3">
                    <a href="#">
                        FNATIC
                    </a>
                </div>
                <div class="col-3">
                    <a href="#">
                        FNATIC
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        FNATIC
                    </a>
                </div>
            </div>
        </div>
        <!-- Right Side End -->
    </div>
</div>




@endsection
