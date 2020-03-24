@extends('admin.layout.layout')

@section('title', 'Yazılar')
@section('mainContent')
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="row gap-20 masonry pos-r" style="position: relative; height: 1094.64px;">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-12" style="position: absolute; left: 0%; top: 0px;">
        <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Yazılar</h6>
            <div class="mT-30">
                <div class="row">
                    @if($posts->count()>0)
                        @foreach($posts as $post)
                        <div class="col-md-4  d-flex justify-content-center mt-4">
                            <div class="card border-secondary">
                                <img class="card-img-top" style="width: 100%;height: 400px;"  src="{{ $post->featured}}" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{!! substr($post->body, 0, 300); !!} ...</p>
                                <div class="row d-flex justify-content-end">
                                    <a href="{{ route('post.single', ['slug' => $post->slug ]) }}" target="_blank"><div style="border-radius: 5px;" class="btn btn-secondary mr-3">Görüntüle</div></a>
                                    <a href="{{ route('posts.edit', ['id'=>$post->id]) }}"><div style="border-radius: 5px;" class="btn btn-success mr-3">Güncelle</div></a>
                                    <a href="{{ route('posts.delete', ['id'=>$post->id]) }}" ><div style="border-radius: 5px;" class="btn btn-danger px-4 mr-3">Sil</div></a>
                                </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="alert alert-primary">Görüntülenecek yazı yok</div>
                    @endif
                </div>

            </div>
        </div>
    </div>

</div>
@endsection