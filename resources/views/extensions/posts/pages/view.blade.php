@extends('layouts.global', ['layout_title' => $post->title])

@section('layout.navigation')
    @include('partials.navigation')
@endsection

@section('layout.content')
    <h1 class="post-title">{!! $post->title !!}</h1>

    {!! $post->body !!}
@endsection