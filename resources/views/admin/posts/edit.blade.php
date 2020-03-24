@extends('admin.layout.layout')

@section('title', 'Yazıyı Düzenle')
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
                <form action="{{ route('posts.update',['id'=>$posts->id]) }}" method="POST"
                    enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Başlık</label>
                                <input type="text" name="title" value="{{ $posts->title }}" placeholder="Başlık Giriniz"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="category">Kategori Seç</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach($categories as $category)

                                    <option value="{{$category->id}}" @if ($posts->category->id == $category->id)
                                        selected
                                        @endif

                                        >{{$category->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tags">Etiket Seç</label>
                                <div class="row d-flex justify-content-center text-center">
                                    @foreach($tags as $tag)
                                    <label style="border-style: inset;" class="col-md-3" for="{{$tag->id}}">
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" @foreach ($posts->tags
                                                as $t)
                                                @if ($tag->id == $t->id)
                                                checked
                                                @endif
                                                @endforeach name="tags[]"
                                                id="{{$tag->id}}" value="{{$tag->id}}">
                                                <label class="form-check-label"
                                                    for="{{$tag->id}}"><b>{{ $tag->tag }}</b></label>
                                            </div>
                                        </div>
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="featured">
                                    <div class="btn btn-info">Görsel Seç</div>
                                </label>
                                <input type="file" style="display: none;" name="featured" id="featured"
                                    class="form-control">
                            </div>
                            <label for="hi">Şuanki Görsel</label>
                            <div class="form-group row d-flex justify-content-center">
                                <img class="" style="width: 45%" src="{{ $posts->featured }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" style="height: 700px;">
                                <label for="content-editor">içerik</label>
                                <textarea name="body" id="content-editor" cols="50" rows="20"
                                    placeholder="Enter your blog content"
                                    class="form-control">{{ $posts->body }}</textarea>
                            </div>
                        </div>
                    </div>




                    <div class="from-group">
                        <div class="text-right">
                            <button class="btn btn-success" type="submit">İçeriği Güncelle</button>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>

</div>
@endsection