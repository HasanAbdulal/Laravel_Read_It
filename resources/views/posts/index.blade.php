@php
    use \Illuminate\Support\Str;
@endphp

@extends('template.index')

@section('title')
    Free Bootstrap 4 Template by Colorlib
@endsection

@section('content')
<div class="container">
    <div class="row d-flex" id="list">

        @include('posts._list', ['posts' =>$posts])

    </div> 

    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <li>
                        <a href="#" id="more-posts" data-url="{{route('ajax.posts.more')}}">+</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        let offset = 10;
        $('#more-posts').click(function(e){
            e.preventDefault();
            $.get($(this).data('url'), {offset: offset})
            .done(function(rep){
                $('#list').append(rep)
                            .find('.col-md-6:nth-last-of-type(-n+10)')
                            .addClass('fadeInUp')
                            .addClass('ftco-animated');
                offset += 10;
            });
        });
    </script>
@endsection