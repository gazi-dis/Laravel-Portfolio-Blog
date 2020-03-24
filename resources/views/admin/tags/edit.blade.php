@extends('admin.layout.layout')

@section('title', 'Etiket Düzenle')
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
    <div class="masonry-item col-md-6" style="position: absolute; left: 0%; top: 0px;">
        <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Etiket Düzenle</h6>
            <div class="mT-30">
                <form action="{{ route('tag.update',['id'=>$tag->id]) }}" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="tag">Etiket Adı</label>
                        <input type="text" name="tag" value="{{ $tag->tag }}"
                            placeholder="Bir etiket giriniz" class="form-control">
                    </div>

                    <div class="from-group">
                        <div class="text-right">
                            <button class="btn btn-success" type="submit">Güncelle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection