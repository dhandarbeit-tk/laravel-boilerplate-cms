@extends('layouts.global', ['layout_title' => $page->title])

@section('layout.navigation')
    @include('partials.navigation')
@endsection

@section('layout.content')
    {!! $page->body !!}
@endsection