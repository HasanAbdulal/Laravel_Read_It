<div class="tagcloud">
    @foreach($tags as $tag)
    <a href="{{ route('tags.show', [
                'tag'    => $tag->id,
                'slug'  => Str::slug($tag->name),
                ]) }}" class="tag-cloud-link">
                {{$tag->name}}
            </a>
    @endforeach
</div>