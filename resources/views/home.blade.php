@extends('layout/primary')


@section('content')



<div class="container">
    <div class="row mt-4">
        @if($posts && $posts->count())
            <h2 class="text-dark"><strong>Latest Articles</strong></h2>
            <!-- News side Start -->
            <div class="col-lg-9 text-dark mb-5">
                <!-- The latest 3 news Start-->
                <div class="row py-3 top-3-articles mb-3">
                    @foreach ($featured_posts as $post)
                        @include('post-card/featured-post-card')
                    @endforeach
                </div>
                <!-- The latest 3 news End-->
                @foreach ($posts as $post)
                    @include('post-card/post-card')
                @endforeach
                <div class="d-flex justify-content-center mt-3 mx-lg-0 mx-4">
                    {{ $posts->links() }}
                </div>
            </div>
        @else
            <div class="col-lg-9 text-dark mb-5">
                <p class="text-center">No posts yet, Please check later</p>
            </div>
        @endif
        <!-- News side End -->

        <!-- Right Side Start -->
        <div class="col-lg-3 mb-4">
            <h3 class="mb-3">The Best Teams</h3>
            <div class="row mb-2">
                <div class="col-2" style="height: 30px;">
                    <img src="{{ asset('ressources/icons/eu.png') }}" alt="" style="height: 100%;">
                </div>
                <div class="col-3">
                    <a href="{{ route('team.show', 'fnaticlol') }}">
                        FNATIC
                    </a>
                </div>
                <div class="col-3">
                    <a href="{{ route('team.show', 'g2lol') }}">
                        G2
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{ route('team.show', 'mad') }}">
                        MAD
                    </a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-2" style="height: 30px;">
                    <img src="{{ asset('ressources/icons/ma.png') }}" alt="" style="height: 100%;">
                </div>
                <div class="col-5">
                    <a href="{{ route('team.show', 'fxglol') }}">
                        Fox Gaming
                    </a>
                </div>
                <div class="col-3">
                    <a href="{{ route('team.show', 'tbllol') }}">
                        TBL
                    </a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-2" style="height: 30px;">
                    <img src="{{ asset('ressources/icons/cn.png') }}" alt="" style="height: 100%;">
                </div>
                <div class="col-3">
                    <a href="{{ route('team.show', 'teslol') }}">
                        TES
                    </a>
                </div>
                <div class="col-3">
                    <a href="{{ route('team.show', 'suninglol') }}">
                        Suning
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{ route('team.show', 'fpxlol') }}">
                        FPX
                    </a>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-2" style="height: 30px;">
                    <img src="{{ asset('ressources/icons/kr.png') }}" alt="" style="height: 100%;">
                </div>
                <div class="col-3">
                    <a href="{{ route('team.show', 'genglol') }}">
                        GEN G
                    </a>
                </div>
                <div class="col-3">
                    <a href="{{ route('team.show', 'samsunggalaxylol') }}">
                        Samsung
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{ route('team.show', 't1lol') }}">
                        T1
                    </a>
                </div>
            </div>
        </div>
        <!-- Right Side End -->
    </div>
</div>




@endsection
