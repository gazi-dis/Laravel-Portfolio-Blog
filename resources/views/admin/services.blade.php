@extends('admin.layout.layout')

@section('title', 'Hizmetler')
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
            <h6 class="c-grey-900">Hizmet Ekle</h6>
            <div class="mT-30">
                <form method="POST" action="{{ url('admin/add-service') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Başlık</label>
                        <input type="text" class="form-control" name="baslik" id="name" placeholder="Başlık Girin">
                    </div>
                    <div class="form-group">
                        <label for="name1">Açıklama</label>
                        <textarea name="aciklama" class="form-control" id="name1" cols="30" placeholder="Açıklama Girin"
                            rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name3">İkon Kodu</label>
                        <input type="text" class="form-control" name="ikon" id="name3"
                            placeholder="İkon Kodunu Yazınız">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Ekle</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center mt-2 text-black">
            <a href="../src/admin/flaticon/font/flaticon.html" target="_blank">İkonlar sayfasına erişmek için
                tıklayınız...</a>
        </div>
    </div>
    <div class="masonry-item col-md-6" style="position: absolute; left: 0%; top: 0px;">
        <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Oluşturulan Hizmetler</h6>
            <div class="mT-30">
                @foreach ($contents as $content)
                <!-- Modal -->
                <div class="modal fade" id="updateModal{{  $content->id  }}" tabindex="-1" role="dialog"
                    aria-labelledby="updateModal{{  $content->id  }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModal{{  $content->id  }}">Hizmet Güncelle</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('admin/update-service/'.$content->id) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Başlık</label>
                                        <input type="text" class="form-control" value="{{ $content->title }}"
                                            name="baslik" id="name" placeholder="Başlık Girin">
                                    </div>
                                    <div class="form-group">
                                        <label for="name1">Açıklama</label>
                                        <textarea name="aciklama" class="form-control" id="name1" cols="30"
                                            placeholder="Açıklama Girin" rows="10">{{ $content->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name3">İkon Kodu</label>
                                        <input type="text" class="form-control" value="{{ $content->media }}"
                                            name="ikon" id="name3" placeholder="İkon Kodunu Yazınız">
                                    </div>
                                    <div class="text-center mt-2 text-black">
                                        <a href="../src/admin/flaticon/font/flaticon.html" target="_blank">İkonlar
                                            sayfasına erişmek için tıklayınız...</a>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Güncelle</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card col-md-12 mt-3">
                    <span class="icon d-flex justify-content-center">
                        <i style="color: purple;" class="{{ $content->media }}"></i>
                    </span>
                    <div class="card-body">
                        <h5 class="card-title text-center"><b>{{ $content->title }}</b></h5>
                        <p class="card-text text-center">{{ $content->content }}</p>
                        <p>
                            <div class="d-flex justify-content-center">
                                <a href="#updateModal{{  $content->id  }}"
                                    data-target="#updateModal{{  $content->id  }}" data-toggle="modal"><button
                                        class="btn btn-secondary px-2 mr-1"
                                        style="border-radius: 50px;">Güncelle</button></a>
                                <a href="{{ url('admin/delete-service/'.$content->id) }}"><button
                                        class="btn btn-danger px-4 ml-1" style="border-radius: 50px;">Sil</button></a>
                            </div>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection