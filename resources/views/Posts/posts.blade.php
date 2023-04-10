<!--POSTS-->
<div class="row">
    @foreach ($posts as $post)
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <a href="{{ route('show-post', $post) }}"><img
                            @if ($post->image) src="{{ Storage::url($post->image->url) }}" @else src="/img/default.png" @endif
                            class="img-fluid" /></a>

                    <div class="mask text-start" style="background-color: rgba(251, 251, 251, 0.15);">
                        @foreach ($post->tags as $tag)
                            <a class="nav-link badge bg-dark mt-2"
                                href="{{ route('tag', $tag) }}">{{ $tag->name }}</a>
                        @endforeach
                    </div>

                </div>
                <div class="">
                    <a class="nav-link" href="{{ route('show-post', $post) }}">
                        <h5 class="text-start">{{ $post->name }}</h5>
                    </a>

                    <p class="text-start"><small class="text-muted">by {{ $post->user->name }} |
                            {{ date('d F Y', strtotime($post->created_at)) }}</small></p>
                </div>

            </div>

        </div>
    @endforeach



</div>
<!--END POST -->
