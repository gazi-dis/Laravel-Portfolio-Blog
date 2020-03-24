<div class="sidebar">
    <div class="sidebar-inner">
        <!-- ### $Sidebar Header ### -->
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="/admin/dashboard">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo">
                                    <img width="60" src="{{ asset('src/'.config('settings.favicon')) }}" alt="">
                                </div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text ml-3">{{ config('settings.dashboard-title') }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="" class="td-n">
                            <i class="ti-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ### $Sidebar Menu ### -->
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 active">
                <a class="sidebar-link" href="/admin/dashboard">
                    <span class="icon-holder">
                        <i class="c-blue-500 ti-home"></i>
                    </span>
                    <span class="title">Yönetim</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="/admin/settings">
                    <span class="icon-holder">
                        <i class="c-red-500 ti-settings"></i>
                    </span>
                    <span class="title">Ayarlar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="/admin/profile">
                    <span class="icon-holder">
                        <i class="c-blue-500 ti-user"></i>
                    </span>
                    <span class="title">Profil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="/admin/about">
                    <span class="icon-holder">
                        <i class="c-black-500 ti-id-badge"></i>
                    </span>
                    <span class="title">Hakkımda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="/admin/services">
                    <span class="icon-holder">
                        <i class="c-purple-500 ti-briefcase"></i>
                    </span>
                    <span class="title">Hizmetler</span>
                </a>
            </li>
            <li class="nav-item">
                <a class='sidebar-link' href="/admin/projects">
                    <span class="icon-holder">
                        <i class="c-orange-500 ti-layers-alt"></i>
                    </span>
                    <span class="title">Projeler</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-blue-500 ti-receipt"></i>
                    </span>
                    <span class="title">Yazılar</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class='sidebar-link' href="{{ url('admin/posts') }}">
                            <span class="icon-holder">
                                <i class="c-blue-500 ti-receipt"></i>
                            </span>
                            <span class="title">Tüm Yazılar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="{{ url('admin/post/create') }}">
                            <span class="icon-holder">
                                <i class="c-green-500 ti-plus"></i>
                            </span>
                            <span class="title">Yazı Ekle</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="{{ url('admin/posts/trashed') }}">
                            <span class="icon-holder">
                                <i class="c-red-500 ti-trash"></i>
                            </span>
                            <span class="title">Çöp Kutusu</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-teal-500 ti-menu-alt"></i>
                    </span>
                    <span class="title">Kategoriler</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class='sidebar-link' href="{{ url('admin/categories') }}">
                            <span class="icon-holder">
                                <i class="c-blue-500 ti-menu-alt"></i>
                            </span>
                            <span class="title">Tüm Kategoriler</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="{{ url('admin/category/create') }}">
                            <span class="icon-holder">
                                <i class="c-green-500 ti-plus"></i>
                            </span>
                            <span class="title">Kategori Ekle</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-red-500 ti-flag-alt"></i>
                    </span>
                    <span class="title">Etiketler</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class='sidebar-link' href="{{ url('admin/tags') }}">
                            <span class="icon-holder">
                                <i class="c-blue-500 ti-flag-alt"></i>
                            </span>
                            <span class="title">Tüm Etiketler</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="{{ url('admin/tags/create') }}">
                            <span class="icon-holder">
                                <i class="c-green-500 ti-plus"></i>
                            </span>
                            <span class="title">Etiket Ekle</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-teal-500 ti-view-list-alt"></i>
                    </span>
                    <span class="title">Multiple Levels</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Menu Item</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Menu Item</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0);">Menu Item</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Menu Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="c-teal-500 ti-view-list-alt"></i>
                    </span>
                    <span class="title">All Components</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class='sidebar-link' href="/admin/compose">
                            <span class="icon-holder">
                                <i class="c-blue-500 ti-share"></i>
                            </span>
                            <span class="title">Compose</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/admin/calendar">
                            <span class="icon-holder">
                                <i class="c-deep-orange-500 ti-calendar"></i>
                            </span>
                            <span class="title">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/admin/chat">
                            <span class="icon-holder">
                                <i class="c-deep-purple-500 ti-comment-alt"></i>
                            </span>
                            <span class="title">Chat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/admin/charts">
                            <span class="icon-holder">
                                <i class="c-indigo-500 ti-bar-chart"></i>
                            </span>
                            <span class="title">Charts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="/admin/forms">
                            <span class="icon-holder">
                                <i class="c-light-blue-500 ti-pencil"></i>
                            </span>
                            <span class="title">Forms</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="sidebar-link" href="/admin/ui">
                            <span class="icon-holder">
                                <i class="c-pink-500 ti-palette"></i>
                            </span>
                            <span class="title">UI Elements</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-orange-500 ti-layout-list-thumb"></i>
                            </span>
                            <span class="title">Tables</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class='sidebar-link' href="/admin/basic-table">Basic Table</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="/admin/datatable">Data Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-purple-500 ti-map"></i>
                            </span>
                            <span class="title">Maps</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/admin/google-maps">Google Map</a>
                            </li>
                            <li>
                                <a href="/admin/vector-maps">Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-red-500 ti-files"></i>
                            </span>
                            <span class="title">Pages</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class='sidebar-link' href="/admin/blank">Blank</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="/admin/404">404</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="/admin/500">500</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="/admin/signin">Sign In</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="/admin/signup">Sign Up</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> 
        </ul>
    </div>
</div>