<div class="row post-card py-4">
    <div class="col-3">
        <div class="news-img-div">
            <a href="/posts/{{ $post->slug }}">
                <img class="latest-img" src="https://img.kooora.com/?i=corr%2f289%2fkoo_289375.jpg&z=120|90&c=27|18|471|354&h=4874" alt="">
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
