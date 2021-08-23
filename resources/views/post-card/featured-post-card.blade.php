<div class="col-lg-4 mb-lg-0 mb-4">
    <div class="latest-img-div mb-1">
        <a href="/posts/{{ $post->slug }}">
            <img class="latest-img" src="{{ asset('storage/images/'. $post->image) }}" alt="{{ $post->title }}">
        </a>
    </div>
    <a href="/posts/{{ $post->slug }}">
        <strong class="article-title">{{ $post->title }}</strong>
    </a>
</div>
