<!doctype html>
<html class="no-js" lang="tr">

<head>
    <base href="{{ Request::root() }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <div class="body-wrapper">
        <header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent--- gradient-color-2---">
            <div class="ltn__header-top-area top-area-color-white plr--9">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li><a href="mailto:{{ $Contact->email }}"><i class="icon-mail"></i>
                                            {{ $Contact->email }}</a></li>
                                    <li><i class="icon-placeholder"></i>{{ $Contact->address }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="top-bar-right text-end">
                                <div class="ltn__top-bar-menu">
                                    <ul>
                                        <li>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    @empty(!$Social->facebook)
                                                        <li><a href="{{ $Social->facebook }}" title="Facebook"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                    @endempty
                                                    @empty(!$Social->twitter)
                                                        <li><a href="{{ $Social->twitter }}" title="twitter"><i
                                                                    class="fab fa-twitter"></i></a></li>
                                                    @endempty
                                                    @empty(!$Social->instagram)
                                                        <li><a href="{{ $Social->instagram }}" title="instagram"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                    @endempty
                                                    @empty(!$Social->linkedin)
                                                        <li><a href="{{ $Social->linkedin }}" title="linkedin"><i
                                                                    class="fab fa-linkedin"></i></a></li>
                                                    @endempty
                                                    @empty(!$Social->youtube)
                                                        <li><a href="{{ $Social->youtube }}" title="youtube"><i
                                                                    class="fab fa-youtube"></i></a></li>
                                                    @endempty
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white ltn__logo-right-menu-option plr--9">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="{{ route('route.home') }}"><img src="{{ asset('assets/img/logo.svg') }}"
                                            alt="Sezgin San Logo"></a>
                                </div>
                                <div class="get-support clearfix">
                                    <div class="get-support-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="get-support-info">
                                        <h6>İletişime Geç</h6>
                                        <h4><a href="tel:{{ $Contact->phone }}">{{ $Contact->phone }}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col header-menu-column">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li><a href="{{ route('route.home') }}">Anasayfa</a></li>
                                            <li><a href="{{ route('route.page', 'hakkimizda') }}">Hakkımızda</a></li>
                                            <li><a href="{{ route('route.page', 'urunler') }}">Ürünler</a></li>
                                            <li><a href="{{ route('route.page', 'referanslar') }}">Referanslar</a></li>
                                            <li class="special-link"><a
                                                    href="{{ route('route.page', 'iletisim') }}">İletişime Geç</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom"
                                        transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="{{ route('route.home') }}"><img src="{{ asset('assets/img/logo.svg') }}"
                                alt="Sezgin San Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="{{ route('route.home') }}">Anasayfa</a></li>
                        <li><a href="{{ route('route.page', 'hakkimizda') }}">Hakkımızda</a></li>
                        <li><a href="{{ route('route.page', 'urunler') }}">Ürünler</a></li>
                        <li><a href="{{ route('route.page', 'referanslar') }}">Referanslar</a></li>
                        <li><a href="{{ route('route.page', 'iletisim') }}">İletişim</a></li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        @empty(!$Social->facebook)
                            <li><a href="{{ $Social->facebook }}" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                        @endempty
                        @empty(!$Social->twitter)
                            <li><a href="{{ $Social->twitter }}" title="twitter"><i class="fab fa-twitter"></i></a></li>
                        @endempty
                        @empty(!$Social->instagram)
                            <li><a href="{{ $Social->instagram }}" title="instagram"><i
                                        class="fab fa-instagram"></i></a></li>
                        @endempty
                        @empty(!$Social->linkedin)
                            <li><a href="{{ $Social->linkedin }}" title="linkedin"><i class="fab fa-linkedin"></i></a>
                            </li>
                        @endempty
                        @empty(!$Social->youtube)
                            <li><a href="{{ $Social->youtube }}" title="youtube"><i class="fab fa-youtube"></i></a></li>
                        @endempty
                    </ul>
                </div>
            </div>
        </div>
        @yield('content')
        <footer class="ltn__footer-area  ">
            <div class="footer-top-area  section-bg-1 plr--5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-about-widget">
                                <div class="footer-logo mb-10">
                                    <div class="site-logo">
                                        <img src="{{ asset('assets/img/logo.svg') }}" alt="Sezgin San Logo">
                                    </div>
                                </div>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-placeholder"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p>{{ $Contact->address }}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-call"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="tel:{{ $Contact->phone }}">{{ $Contact->phone }}</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-mail"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p>
                                                    <a href="mailto:{{ $Contact->email }}">{{ $Contact->email }}</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__social-media mt-20">
                                    <ul>
                                        @empty(!$Social->facebook)
                                            <li><a href="{{ $Social->facebook }}" title="Facebook"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                        @endempty
                                        @empty(!$Social->twitter)
                                            <li><a href="{{ $Social->twitter }}" title="twitter"><i
                                                        class="fab fa-twitter"></i></a></li>
                                        @endempty
                                        @empty(!$Social->instagram)
                                            <li><a href="{{ $Social->instagram }}" title="instagram"><i
                                                        class="fab fa-instagram"></i></a></li>
                                        @endempty
                                        @empty(!$Social->linkedin)
                                            <li><a href="{{ $Social->linkedin }}" title="linkedin"><i
                                                        class="fab fa-linkedin"></i></a>
                                            </li>
                                        @endempty
                                        @empty(!$Social->youtube)
                                            <li><a href="{{ $Social->youtube }}" title="youtube"><i
                                                        class="fab fa-youtube"></i></a></li>
                                        @endempty
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Hızlı erişim</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="{{ route('route.home') }}">Anasayfa</a></li>
                                        <li><a href="{{ route('route.page', 'hakkimizda') }}">Hakkımızda</a></li>
                                        <li><a href="{{ route('route.page', 'urunler') }}">Ürünler</a></li>
                                        <li><a href="{{ route('route.page', 'referanslar') }}">Referanslar</a></li>
                                        <li><a href="{{ route('route.page', 'iletisim') }}">İletişim</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Ürünler</h4>
                                <div class="footer-menu">
                                    <ul>
                                        @foreach ($FooterProducts as $product)
                                            <li><a
                                                    href="{{ route('route.product', $product->slug) }}">{{ $product->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ltn__copyright-area ltn__copyright-2 section-bg-2 plr--5">
                <div class="container-fluid ltn__border-top-2">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="ltn__copyright-design clearfix">
                                <p>Tüm hakları saklıdır @ Company <span class="current-year"></span></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 align-self-center">
                            <div class="ltn__copyright-menu text-end">
                                <ul>
                                    @foreach ($Policy as $policy)
                                        <li><a href="{{route('route.policy',$policy->slug)}}">{{$policy->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
