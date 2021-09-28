@extends('template.index')

@section('title')
    {{$post->title}}
@endsection

@section('content')
<div class="container">
    <div class="row d-flex">
        <div class="col-md-6 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
                <a href="article.html" class="block-20" style="background-image: url('{{asset('assets/images/image_1.jpg')}}');">
                </a>
                <div class="text p-4 float-right d-block">
                    <div class="topper d-flex align-items-center">
                        <div class="one py-2 pl-3 pr-1 align-self-stretch">
                            <span class="day">18</span>
                        </div>
                        <div class="two pl-0 pr-3 py-2 align-self-stretch">
                            <span class="yr">2019</span>
                            <span class="mos">October</span>
                        </div>
                    </div>
                    <h3 class="heading mb-3"><a href="#"> {{$post->title}} </a></h3>
                    <p>{{$post->resume}}</p>
                    <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    <li><a href="#">+</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
