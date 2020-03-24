@extends('admin.layout.layout')

@section('title', 'Ayarlar')
@section('mainContent')
@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<div class="row gap-20 masonry pos-r" style="position: relative; height: 1094.64px;">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-6" style="position: absolute; left: 0%; top: 0px;">
        <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Bölümler</h6>
            <div class="mT-30">
                <form method="POST" action="{{ url('admin/setting-update') }}">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>Giriş</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input @if (config('settings.entry'))
                                    checked
                                @endif type="checkbox" name="entry" value="entry" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>Menüde Yönetim Linki</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input @if (config('settings.admin-link'))
                                    checked
                                @endif type="checkbox" name="admin-link" value="admin-link" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>Hakkımda</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input @if (config('settings.about'))
                                checked
                            @endif type="checkbox" name="about" value="about" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>CV Dosyası</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input @if (config('settings.cv-bool'))
                                checked
                            @endif type="checkbox" name="cv-bool" value="cv-bool" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>Servisler</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input  @if (config('settings.services'))
                                checked
                            @endif type="checkbox" name="services" value="services" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>Projeler</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input  @if (config('settings.projects'))
                                checked
                            @endif type="checkbox" name="projects" value="projects" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>Blog</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input  @if (config('settings.blog'))
                                checked
                            @endif type="checkbox" name="blog" value="blog" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>Blog Yorumları</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input  @if (config('settings.bool-comment'))
                                checked
                            @endif type="checkbox" name="bool-comment" value="bool-comment" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>Blog Yazarı</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input  @if (config('settings.blog-author'))
                                checked
                            @endif type="checkbox" name="blog-author" value="blog-author" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>Teklif</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input  @if (config('settings.hire'))
                                checked
                            @endif type="checkbox"  name="hire" value="hire" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-8">
                                <div class="alert alert-warning py-2 text-center"><b>İletişim</b></div>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <input  @if (config('settings.contact'))
                                checked
                            @endif type="checkbox" name="contact" value="contact" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="masonry-item col-md-6" style="position: absolute; left: 0%; top: 0px;">
        <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">Bilgiler</h6>
            <div class="mT-30">
                <form method="POST" enctype="multipart/form-data" action="{{ url('admin/information-update') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Site Başlığı</label>
                        <input type="text" class="form-control" value="{{ config('settings.title') }}" name="title" id="name"  placeholder="Başlık Girin">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="k3">Admin Mail Adresi</label>
                            <input type="text" class="form-control" value="{{ config('settings.admin-mail') }}" name="admin-mail" id="k3"  placeholder="Admin Mail Adresi">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="k5">Yönetim Paneli Başlığı</label>
                            <input type="text" class="form-control" value="{{ config('settings.dashboard-title') }}" name="dashboard-title" id="k5"  placeholder="Yönetim Paneli Başlığı">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Favicon Dosyası</label><br>
                        <label for="k4"><div class="btn btn-info">Favicon Dosyası Yükle</div></label>
                        <input type="file" style="display: none;" class="form-control"  name="favicon" id="k4">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="c1">Yetenek 1</label>
                            <input type="text" class="form-control" value="{{ config('settings.hobby-1') }}" name="hobby-1" id="c1"  placeholder="Yetenek girin">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="c2">Yetenek 2</label>
                            <input type="text" class="form-control" value="{{ config('settings.hobby-2') }}" name="hobby-2" id="c2"  placeholder="Yetenek girin">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="c3">Yetenek 3</label>
                        <input type="text" class="form-control" value="{{ config('settings.hobby-3') }}" name="hobby-3" id="c3"  placeholder="Yetenek girin">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="a3">Teklif Linki</label>
                            <input type="text" class="form-control" value="{{ config('settings.hire-link') }}" name="hire-link" id="a3"  placeholder="Teklif linki girin">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="a4">Kişisel Site</label>
                            <input type="text" class="form-control" value="{{ config('settings.personal-link') }}" name="personal-link" id="a4"  placeholder="Kişisel site linki girin">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="a5">Facebook Linki</label>
                            <input type="text" class="form-control" value="{{ config('settings.face-link') }}" name="face-link" id="a5"  placeholder="Facebook linki girin">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="a6">İnstagram Linki</label>
                            <input type="text" class="form-control" value="{{ config('settings.ig-link') }}" name="ig-link" id="a6"  placeholder="İnstagram linki girin">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="a7">Twitter Linki</label>
                        <input type="text" class="form-control" value="{{ config('settings.twitter-link') }}" name="twitter-link" id="a7"  placeholder="Twitter linki girin">
                    </div>
                    <div class="form-group">
                        <label>CV Dosyası</label><br>
                        <label for="k1"><div class="btn btn-info">CV Dosyası Yükle</div></label>
                        <input type="file" style="display: none;" class="form-control"  name="cv-document" id="k1">
                    </div>
                    <div class="form-group">
                        <label for="a8">Teklif Açıklaması</label>
                        <textarea name="hire-info" class="form-control" id="a8" cols="30" rows="4">{{ config('settings.hire-info') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="a9">Hizmetler Açıklaması</label>
                        <textarea name="services-info" class="form-control" id="a9" cols="30" rows="4">{{ config('settings.services-info') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="b1">Projeler Açıklaması</label>
                        <textarea name="projects-info" class="form-control" id="b1" cols="30" rows="4">{{ config('settings.projects-info') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="z1">Blog Açıklaması</label>
                        <textarea name="blog-info" class="form-control" id="z1" cols="30" rows="4">{{ config('settings.blog-info') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="b2">İletişim Açıklaması</label>
                        <textarea name="contact-info" class="form-control" id="b2" cols="30" rows="4">{{ config('settings.contact-info') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="b3">Footer Açıklaması</label>
                        <textarea name="footer-info" class="form-control" id="b3" cols="30" rows="4">{{ config('settings.footer-info') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="k2">Disqus Ön Eki</label>
                        <textarea name="comment-script" class="form-control" placeholder=".disqus.com kısmından önce gelen subdomain adını giriniz" id="k2" cols="30" rows="5">{{ config('settings.comment-script') }}</textarea>
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
