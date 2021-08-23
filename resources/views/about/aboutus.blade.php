@extends('layout/primary')

@section('content')

<div class="container my-5">
    <div class="row">
        <h1 class="text-center mb-5">About Us</h1>
        <p>GoPora.com was launched by Amine Saissi Hassani to the esports industry to finally give esports what worth. Competitive gaming and streaming the dedicated home it deserves. With contributions from the professional athletes and teams, singular esports analysts and the daily news you need, gopora.com will quickly become your favorite bookmark for keeping up with the games you love, including League of Legends, CS:GO, Valorant, Dota 2, Rocket League, mobile esports & gaming, Battle Royales, Autochess, the FGC, Super Smash Bros., Call of Duty, and far too many others to list!</p>
        <p>And you too! Yes you can contribute in this mission by writing articles about your favorites teams and esports.</p>
        <p>Esports has been catapulted into the mainstream as the industry continues to grow at breakneck speeds each year. Between 2018 and 2019, the global esports industry boasted a 23% year-on-year growth rate. Esports now has a global audience of 495 million fans, a remarkable increase of 100 million from 2018, and is projected to reach 646 million by 2023, according to industry analysts Newzoo. Global revenues recently surpassed the annual billion-dollar mark and are slated to continue growing rapidly in the coming years. Newzoo estimates that in three years, esports revenues will reach just shy of $1.6bn.</p>
        <p>How? Just <a href="{{ route('login') }}">Login</a>, you do not have an account? How dare you? from <a href="{{ route('register') }}">here</a></p>
        <p>And Welcome to the community</p>
    </div>
</div>

@endsection
