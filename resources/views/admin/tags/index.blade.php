@extends('admin.layout.layout')

@section('title', 'Etiketler')
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
            <h6 class="c-grey-900">Etiketler</h6>
            <div class="mT-30">
                <table class="table table-hover">
                    <thead>
                        <th>Etiket Adı</th>

                        <th>Düzenle</th>
                        <th>Sil</th>

                    <tbody>

                        @if($tags->count())
                        @foreach($tags as $tag)

                        <tr>
                            <td>
                                {{ $tag->tag }}
                            </td>

                            <td>
                                <a class="btn btn-info" href="{{ route('tag.edit',['id'=>$tag->id]) }}">

                                    Düzenle
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger px-4" href="{{ route('tag.delete',['id'=>$tag->id]) }}">

                                    Sil
                                </a>
                            </td>

                        </tr>


                        @endforeach

                        @else
                        <tr>
                            <th colspan="5" style="background-color: rgb(23,45,67);color: white;" class="text-center">
                                Etiket Yok
                            </th>
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