<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Әкімшілік панелі</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2')}}" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/api" class="nav-link {{ request()->is('api') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-house"></i>
                        <p>
                            Басты бет
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.news')}}" class="nav-link {{ request()->is('api/zhanalyqtar') || request()->is('api/zhanalyqtar/*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Жаналықтар
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('forum.index')}}" class="nav-link {{ request()->is('api/forum') || request()->is('api/forum/*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-rectangle-list"></i>
                        <p>
                            Форум
                        </p>
                    </a>
                </li>
<!--                menu-is-opening menu-open-->
                <li class="nav-item {{ request()->is('api/kenes/*') ? 'menu-is-opening menu-open' : ''}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Ауыл жайлы
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('akimshilik.index')}}" class="nav-link {{ request()->is('api/kenes/akimshilik')||request()->is('api/kenes/akimshilik/*') ? 'active' : ''}}">
                                <p>Әкімшілік</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('ardagerler.index')}}" class="nav-link {{ request()->is('api/kenes/ardagerler')||request()->is('api/kenes/ardagerler/*') ? 'active' : ''}}">
                                <p>Ардагерлер кеңесі</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('qogamdar.index')}}" class="nav-link {{ request()->is('api/kenes/qogamdar')||request()->is('api/kenes/qogamdar/*') ? 'active' : ''}}">
                                <p>Қоғамдық мүшелері</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('analar.index')}}" class="nav-link {{ request()->is('api/kenes/analar')||request()->is('api/kenes/analar/*') ? 'active' : ''}}">
                                <p>Аналар кеңесі</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mediator.index')}}" class="nav-link {{ request()->is('api/kenes/mediator')||request()->is('api/kenes/mediator/*') ? 'active' : ''}}">
                                <p>Медиатор</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('qogamhor.index')}}" class="nav-link {{ request()->is('api/kenes/qogamhor')||request()->is('api/kenes/qogamhor/*') ? 'active' : ''}}">
                                <p>Қоғамдық қор мүшелері</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('videos.index')}}" class="nav-link {{ request()->is('api/videos')||request()->is('api/videos/*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-video"></i>
                        <p>
                            Бейнероликтер
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('gallery.index')}}" class="nav-link {{ request()->is('api/gallery')||request()->is('api/gallery/*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Галерея
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('qoldanushylar.index')}}" class="nav-link {{ request()->is('api/qoldanushylar') || request()->is('api/qoldanushylar/*') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-user-group"></i>
                        <p>
                            Қолданушылар
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
