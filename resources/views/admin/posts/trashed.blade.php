@extends('admin.layout.layout')

@section('title', 'Silinen Yazılar')
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
            <h6 class="c-grey-900">Yazılar</h6>
            <div class="mT-30">
                <table class="table table-hover">
                    <thead>
                        <th>İçerik Görseli</th>
                        <th>İçerik Başlığı</th>
                        <th>Düzenle</th>
                        <th>Tekrar Yayınla</th>
                        <th>Tamamen Sil</th>

                    <tbody>

                        @if($posts->count()>0)
                        @foreach($posts as $post)

                        <tr>
                            <td>
                                <img style="width: 90px;height: 50px;" src="{{ $post->featured}}"
                                    alt="{{$post->title}}">
                            </td>

                            <td>
                                {{ $post->title }}
                            </td>
                            <td>Düzenle</td>
                            <td><a class="btn btn-xs btn-success"
                                    href="{{ route('posts.restore', ['id'=>$post->id]) }}">Tekrar Yayınla</a>
                            </td>
                            <td><a class="btn btn-xs btn-danger"
                                    href="{{ route('post.kill', ['id'=>$post->id]) }}">Tamamen Sil</a>
                            </td>

                        </tr>


                        @endforeach

                        @else

                        <tr>
                            <th colspan="5" style="background-color: rgb(23,45,67);color: white;" class="text-center">No
                                Trashed Post Here</th>
                        </tr>

                        @endif



                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection