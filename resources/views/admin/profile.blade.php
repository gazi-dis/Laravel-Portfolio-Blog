@extends('admin.layout.layout')

@section('title', 'Profil')
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
            <h6 class="c-grey-900">Yönetim Bilgileri</h6>
            <div class="mT-30">
                <form method="POST" action="{{ url('admin/profile-update') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">İsim</label>
                        <input type="text" class="form-control" name="isim" id="name" value="{{ $user->name }}"
                            aria-describedby="emailHelp" placeholder="İsim Girin">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E Mail</label>
                        <input type="email" class="form-control" name="eposta" value="{{ $user->email }}"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E Mail Adresi Girin">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1old">Eski Parola</label>
                        <input type="password" class="form-control" name="eskiParola" id="exampleInputPassword1old"
                            placeholder="Eski Parola">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Yeni Parola</label>
                        <input type="password" class="form-control" name="yeniParola" id="exampleInputPassword1"
                            placeholder="Yeni Parola">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="masonry-item col-md-6" style="position: absolute; left: 0%; top: 0px;">
        <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Profil Resmi</h6>
            <div class="mT-30">
                <form method="POST" enctype="multipart/form-data" action="{{ url('admin/avatar-update') }}">
                    @csrf
                    <div class="col-12">
                        <div class="text-center">
                            <label for="resim">
                                <img class="w-7r bdrs-50p" width="128" src="
                                @if (Auth::user()->avatar=='user.png')
                                    {{  asset('storage/avatars/user.png') }}
                                @else
                                    {{  asset('storage/avatars/'.Auth::user()->avatar) }}
                                @endif
                                " alt="">
                            </label>
                        </div>
                    </div>
                    <div class="form-group  mt-4">
                        <div class="d-flex justify-content-center">
                            <label for="resim">
                                <div class="btn btn-primary">
                                    Avatar Yükle
                                </div>
                            </label>
                        </div>
                        <input type="file" style="display: none;" class="form-control" name="avatar" id="resim"
                            aria-describedby="fileHelp" placeholder="Parola">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection