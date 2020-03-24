@extends('admin.layout.layout')

@section('title', 'Yönetim')
@section('mainContent')
<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item  w-100">
        <div class="row gap-20">
            <!-- #Toatl Visits ==================== -->
            <div class='col-md-3'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Toplam Yazı</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash"></span>
                            </div>
                            <div class="peer">
                                <span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $posts_count }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #Total Page Views ==================== -->
            <div class='col-md-3'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Silinen Yazılar</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash2"></span>
                            </div>
                            <div class="peer">
                                <span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">{{ $trashed_count }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #Unique Visitors ==================== -->
            <div class='col-md-3'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Toplam Kategori</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash3"></span>
                            </div>
                            <div class="peer">
                                <span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">{{ $categories_count }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #Bounce Rate ==================== -->
            <div class='col-md-3'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Toplam Kullanıcı</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash4"></span>
                            </div>
                            <div class="peer">
                                <span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $users_count }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     
</div>
@endsection