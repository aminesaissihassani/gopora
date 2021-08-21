<div class="row post-card py-4">
    <div class="col-3">
        <div class="news-img-div">
            <a href="/posts/{{ $post->slug }}">
                <img class="latest-img" src="{{ asset('storage/images/'. $post->image) }}" alt="{{ $post->title }}">
            </a>
        </div>
    </div>
    <div class="col-9">
        <a href="/posts/{{ $post->slug }}">
        <strong class="article-title">{{ $post->title }}</strong>
        </a>
        <p>{{ Str::of($post->body)->words(30, '...') }}</p>
    </div>
</div>
