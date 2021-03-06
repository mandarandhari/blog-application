@extends('layouts.app')

@section('content')

<header class="masthead" style="background-image: url('/storage/banner_images/{{ $post->id }}/{{ $post->banner_image }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->description }}</h2>
                    <span class="meta">Posted by
                    <a href="#">{{ $post->user->name }}</a> on {{ date('F d, Y', strtotime($post->created_at)) }}</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            {!! $post->content !!}
        </div>
    </div>
</div>
@endsection