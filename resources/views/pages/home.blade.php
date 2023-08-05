@extends('layout.master')
@section('content')
    <div class="ltn__utilize-overlay"></div>
    <div class="ltn__slider-area ltn__slider-6 mb-120---">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            @forelse ($Sliders as $slider)
                <div class="ltn__slide-item--- ltn__slide-item-9 section-bg-1 bg-image"
                    data-bs-bg="{{ str_replace('\\', '/', asset($slider->image)) }}">
                    <div class="ltn__slide-item-inner">
                        <div class="slide-item-info bg-overlay-white-90 text-center">
                            <div class="slide-item-info-inner  ltn__slide-animation">
                                <h1 class="slide-title animated text-uppercase">{{ $slider->title }}</h1>
                                <h4 class="slide-sub-title text-uppercase animated">{{ $slider->text }}</h4>
                                @if (!empty($slider->button) && !empty($slider->link))
                                    <div class="btn-wrapper animated">
                                        <a href="{{ $slider->link }}"
                                            class="theme-btn-1 btn btn-effect-1 text-uppercase">{{ $slider->button }}</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <div class="ltn__about-us-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{ asset($Corporate->image) }}" alt="About Us Image">
                        <div class="wave ltn__animation-wave-5s ltn__effect-img-top-center ">
                            <div class="about-us-img-info">
                                <div class="about-us-img-info-inner">
                                    <h1><span class="counter">{{ $Counter->counter1 }}</span><span>+</span></h1>
                                    <h6><span>{{ $Counter->title1 }}</span></h6>
                                    <span class="dots-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Hakkımızda</h6>
                            <h3 class="section-title">{{ $Corporate->title }}<span>.</span></h3>
                        </div>
                        <p>{{ $Corporate->about_short }}</p>
                        <div class="btn-wrapper">
                            <a href="{{ route('route.page', 'hakkimizda') }}"
                                class="theme-btn-3 btn btn-effect-4">Hakkımızda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@empty(!$Products)
    <div class="ltn__service-area ltn__primary-bg before-bg-1 pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">Sezgin San.</h6>
                        <h3 class="section-title white-color">Ürünlerimiz<span>.</span></h3>
                    </div>
                </div>
            </div>
            <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                @forelse ($Products as $product)
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="{{ route('route.product', ['slug' => $product->slug]) }}"><img
                                        src="{{ asset($product->image) }}" alt="{{ $product->title }}"></a>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <h6 class="product-title"><a
                                        href="{{ route('route.product', ['slug' => $product->slug]) }}">{{ $product->title }}</a>
                                </h6>

                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endempty
{{-- @empty(!$Clients)
    <div class="ltn__brand-logo-area ltn__brand-logo-1 pt-80 pb-110 plr--9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">Sezgin San.</h6>
                        <h4 class="section-title ltn__primary-color">Referanslar<span>.</span></h4>
                    </div>
                </div>
            </div>
            <div class="row ltn__brand-logo-active">
                @forelse ($Clients as $client)
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="{{ asset($client->image) }}" alt="Sezgin San Referansları">
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endempty --}}

<div class="ltn__call-to-action-area call-to-action-2 pt-20 pb-20" data-bs-bg="img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-2 text-center">
                    <h4>Bilgi almak için hemen iletişime geç</h4>
                    <div class="btn-wrapper">
                        <a class="btn btn-effect-4 btn-white" href="tel:90 532 337 66 08"><i
                                class="icon-call"></i>İletişime Geç</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
