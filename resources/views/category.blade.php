@extends('theme')
@section('title','Category: '.$category->name)
@section('content')
    @include('partials.category.blog')
@endsection