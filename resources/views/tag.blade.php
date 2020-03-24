@extends('theme')
@section('title','Tag: '.$tag->tag)
@section('content')
    @include('partials.tag.blog')
@endsection