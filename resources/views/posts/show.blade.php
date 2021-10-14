@php
    use \Illuminate\Support\Str;
@endphp

@extends('template.index')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    {{---------------- Détail d'un post ----------------}}
    <p class="mb-5">
        <img src="{{asset('assets/images/' . $post->image) }}" alt="" class="img-fluid">
    </p>
    <h1 class="mb-3 h1">{{$post->title}}</h1>
        <p> {{$post->content}} </p>

    {{---------------- Tags du post ----------------}}
        @include('tags._index', [
            'tags'=> $post->tags
        ])
    
    {{---------------- Author du post ----------------}}
        @include('authors._show', [
                'authors'=> $post->author
            ])

    {{---------------- Commantaires du post ----------------}}
    @include('comments._index', [
        'comments'=> $post->comments
    ])

    {{---------------- Formulaire d'ajout d'un comment  ----------------}}
    @include('comments._add-form')
@endsection
@section('scripts')
    <script>
        $('#addComment').submit(function(e){
            e.preventDefault();
            $.get($(this).attr('action'). {
                pseudo: $('#addComment #pseudo').val(),
                content: $(this).find('#content').val(),
                postID: $(this).find('#postID').val()
            })
            .done(function(rep){
                $('.comment-list').appende(rep).find('li:last-of-type').hide().slideDown();
            });
        });
    </script>

@endsection