
<div class="tag-widget post-tag-container mb-5 mt-5">
    <div class="tagcloud">
        @foreach ($post->tags as $tag)

            <a href="{{ route('tags.show', [
                'tag'    => $tag->id,
                'slug'  => Str::slug($tag->name),
                ]) }}" class="tag-cloud-link">
                {{$tag->name}}
            </a>
        @endforeach
    </div>
</div>
