@extends('theme')
@section('title',$post->title)
@section('content')
    @include('partials.single.entry')
    @include('partials.single.blog')
@endsection    
