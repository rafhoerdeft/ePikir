<!-- Start Header -->
<header id="header" class="header">
    <!-- Topbar -->
    {{-- <div class="topbar" style="border-bottom: 4px solid #ff9800;"> --}}
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Contact -->
                    <ul class="contact" style="margin-top: 0px !important; padding-block: 4px;">
                        <li><i class="fa fa-phone"></i> (0293) 45678910</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:litbang@gmail.com">litbang@gmail.com</a>
                        </li>
                        {{-- <li><i class="fa fa-clock-o"></i>Opening: 09am-5pm</li> --}}
                    </ul>
                    <!--/ End Contact -->
                </div>
                <div class="col-lg-6 col-12">
                    <div class="topbar-right">
                        {{-- <!-- Search Form -->
                            <div class="search-form active">
                                <a class="icon" href="#"><i class="fa fa-search"></i></a>
                                <form class="form" action="#">
                                    <input placeholder="Search & Enter" type="search">
                                </form>
                            </div>
                            <!--/ End Search Form --> --}}
                        <!-- Social -->
                        <ul class="social" style="margin-top: 0px !important; padding-block: 4px;">
                            <li style="border-right: 1px solid #cccccc; border-left: 1px solid #cccccc;"><a
                                    href="{{ base_url('Auth') }}" style="padding-inline: 10px"><i
                                        class="fa fa-user"></i> Login</a></li>
                            {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li> --}}
                        </ul>
                        <!--/ End Social -->
                        {{-- <div class="button">
                                <a href="contact.html" class="btn">Login</a>
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Topbar -->
    <!-- Middle Bar -->
    <div class="middle-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="javascript:void(0)">
                            <img src="{{ base_url('assets/img/logo/logo_kab_lg.png') }}" width="75" alt="logo">
                            <span class="d-lg-none d-xl-block">e-Pikir</span>
                        </a>
                    </div>
                    <div class="link"><a href="index.html"><span>e</span>Pikir</a></div>
                    <!--/ End Logo -->
                    <button class="mobile-arrow"><i class="fa fa-bars"></i></button>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-xl-10 col-12">
                    <!-- Main Menu -->
                    <div class="mainmenu">
                        <nav class="navigation">
                            <ul class="nav menu" style="padding-right: 130px !important">
                                @foreach ($menu as $nav)
                                    <li class="{{ $nav['index'] == $active ? 'active' : '' }}"
                                        style="margin-right: 30px;">
                                        <a href="{{ $nav['url'] }}">{{ $nav['title'] }}<i
                                                class="{{ $nav['child'] != null ? 'fa fa-caret-down' : '' }}"></i></a>
                                        @if ($nav['child'] != null)
                                            <ul class="dropdown">
                                                @foreach ($nav['child'] as $sub)
                                                    <li class="{{ $sub['index'] == $active ? 'active' : '' }}">
                                                        <a href="{{ $sub['url'] }}">{{ $sub['title'] }}<i
                                                                class="{{ $sub['child'] != null ? 'fa fa-caret-right' : '' }}"></i></a>
                                                        @if ($sub['child'] != null)
                                                            <ul class="dropdown submenu">
                                                                @foreach ($sub['child'] as $sub2)
                                                                    <li
                                                                        class="{{ $sub2['index'] == $active ? 'active' : '' }}">
                                                                        <a
                                                                            href="{{ $sub2['url'] }}">{{ $sub2['title'] }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach

                            </ul>
                        </nav>
                        <!-- Button -->
                        <div class="button">
                            <a href="https://bappeda.magelangkab.go.id/" class="btn">BAPPEDA</a>
                        </div>
                        <!--/ End Button -->
                    </div>
                    <!--/ End Main Menu -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Middle Bar -->
</header>
<!--/ End Header -->
