@php
    use Illuminate\Support\Str;
@endphp

<ul class="navbar-nav ml-auto">
    @foreach ($posts as $post)
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('posts.show', [
                    'post' => $post->id,
                    'slug' => Str::slug($post->title)
                ]) }}">
                {{ $post->titleMenu }}
        </a>
    </li>
    @endforeach
</ul>