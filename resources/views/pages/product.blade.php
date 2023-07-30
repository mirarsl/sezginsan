@extends('layout.master')
@section('content')
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9"
        data-bs-bg="{{asset('assets/img/bg/9.jpg')}}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Sezgin San</h6>
                            <h1 class="section-title white-color">{{ $Product->title }}</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('route.home') }}">Anasayfa</a></li>
                                <li><a href="{{ route('route.page', 'urunler') }}">Ürünler</a></li>
                                <li>{{ $Product->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__page-details-area ltn__service-details-area mb-105 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__page-details-inner ltn__service-details-inner">
                        <div class="ltn__shop-details-img-gallery">
                            <div class="ltn__shop-details-large-img">
                                <div class="single-large-img">
                                    <a href="{{ asset($Product->image) }}" data-rel="lightcase:myCollection">
                                        <img src="{{ asset($Product->image) }}" alt="{{ $Product->title }}">
                                    </a>
                                </div>
                                @if (!empty($Product->gallery))
                                    @php
                                        $gallery = json_decode($Product->gallery);
                                    @endphp
                                    @foreach ($gallery as $item)
                                        <div class="single-large-img">
                                            <a href="{{ asset($item) }}" data-rel="lightcase:myCollection">
                                                <img src="{{ asset($item) }}" alt="{{ $Product->title }}">
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            @if (!empty($Product->gallery))
                                <div class="ltn__shop-details-small-img slick-arrow-2">
                                    <div class="single-small-img">
                                        <img src="{{ asset($Product->image) }}" alt="Image">
                                    </div>
                                    @foreach ($gallery as $item)
                                        <div class="single-large-img">
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset($item) }}" alt="{{ $Product->title }}">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                        <div class="content mt-50">
                            <h2 class="section-title">{{ $Product->title }} <span>.</span></h2>
                            {!! $Product->text !!}
                        </div>


                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area ltn__right-sidebar">
                        <div class="widget ltn__banner-widget">
                            <img height="120" width="100%" src="{{ asset('assets/img/logo.svg') }}" alt="Banner Image">
                        </div>
                        <div class="widget ltn__search-widget ltn__newsletter-widget">
                            <h6 class="ltn__widget-sub-title">Sezgin san</h6>
                            <a href="tel:">
                                <h4 class="ltn__widget-title">İletişime Geç</h4>
                            </a>
                            <div class="ltn__newsletter-bg-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        @empty(!$Others)
                            <div class="widget-2 ltn__menu-widget ltn__menu-widget-2 text-uppercase">
                                <h4 class="section-subtitle">Diğer Ürünler</h4>
                                <ul>
                                    @foreach ($Others as $pro)
                                        <li><a href="{{ route('route.product', $pro->slug) }}">{{ $pro->title }} <span><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endempty

                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
