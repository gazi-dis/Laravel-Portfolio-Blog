@extends('admin.layout.layout')

@section('title', 'Hakkımda Ayarları')
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
    <form method="POST" enctype="multipart/form-data" action="{{ url('admin/about-update') }}">
        @csrf
        <div class="masonry-item col-md-6 mt-3" style="position: absolute; left: 0%; top: 0px;">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Hakkımda Ayarları</h6>
                <div class="mT-30">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">İsim</label>
                            <input type="text" name="isim" value="{{ config('settings.name') }}" class="form-control"
                                id="inputEmail4" placeholder="İsim">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail5">Soyisim</label>
                            <input type="text" name="soyisim" value="{{ config('settings.surname') }}"
                                class="form-control" id="inputEmail5" placeholder="Soy İsim">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="a3">E Mail</label>
                            <input type="text" class="form-control" value="{{ config('settings.email') }}" name="eposta"
                                id="a3" placeholder="E Mail">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="a4">Telefon</label>
                            <input type="text" class="form-control" value="{{ config('settings.phone') }}"
                                name="telefon" id="a4" placeholder="Telefon">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="a1">Doğum Tarihi</label>
                            <input type="text" class="form-control" value="{{ config('settings.birthday') }}"
                                name="dogum" id="a1" placeholder="Doğum Tarihi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="a2">Adres</label>
                            <input type="text" class="form-control" value="{{ config('settings.adress') }}" name="adres"
                                id="a2" placeholder="Adres">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="a5">Proje Sayısı</label>
                        <input type="text" class="form-control" value="{{ config('settings.total-projects') }}"
                            name="proje" id="a5" placeholder="Tamamlanan Proje Sayısı">
                    </div>
                </div>
            </div>
        </div>
        <div class="masonry-item col-md-6 mt-3" style="position: absolute; left: 0%; top: 0px;">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Açıklama</h6>
                <div class="mT-30">
                    <div class="form-group">
                        <label for="name">Hakkımda Açıklaması</label>
                        <textarea name="aciklama" class="form-control" id="" cols="30"
                            rows="10">{{ config('settings.bio-info') }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="masonry-item col-md-12 mt-3" style="position: absolute; left: 0%; top: 0px;">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Görsel</h6>
                <div class="mT-30">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="d-flex justify-content-center">
                                <img width="300" src="{{ asset('storage/images/about/'.config('settings.bio-image')) }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="text-center mt-5">
                                <label for="resim">
                                    <div class="btn btn-primary px-3 py-2">Resim Seç</div>
                                </label>
                            </div>
                            <input style="display: none;" type="file" id="resim" name="resim">
                        </div>
                        <div class="form-group col-md-3">
                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-success px-3 py-2">Bilgileri Güncelle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection