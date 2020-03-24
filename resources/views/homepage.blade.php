@extends('theme')
@section('title',config('settings.title'))
@section('content')
    @if (config('settings.entry'))
        @include('partials.entry')
    @endif
    @if (config('settings.about'))
        @include('partials.about')
    @endif
    @if (config('settings.services'))
        @include('partials.services')
    @endif
    @if (config('settings.projects'))
        @include('partials.projects')
    @endif
    @if (config('settings.blog'))
        @include('partials.blog')
    @endif
    @if (config('settings.hire'))
        @include('partials.hire')
    @endif
    @if (config('settings.contact'))
        @include('partials.contact')
    @endif
@endsection    
