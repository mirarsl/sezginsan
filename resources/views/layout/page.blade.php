@extends('layout.master')
@section('content')
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image"
        data-bs-bg="{{ !empty($Page->banner) ? asset(str_replace('\\', '/', $Page->banner)) : asset('assets/img/bg/9.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Sezgin San</h6>
                            <h1 class="section-title white-color">{{ $Page->getTranslatedAttribute('title') }}</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('route.home') }}">{{ __('menu1') }}</a></li>
                                <li>{{ $Page->getTranslatedAttribute('title') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('page')
@endsection
@section('lang')
    <li>
        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
            <ul>
                <li><a href="javascript:void(0)" class="dropdown-toggle">
                        <img width="25"
                            src="{{ asset('/assets/img/' . LaravelLocalization::getCurrentLocaleName() . '.png') }}"
                            alt="{{ LaravelLocalization::getCurrentLocaleNative() }}">
                        <span class="active-currency">{{ LaravelLocalization::getCurrentLocaleNative() }}</span></a>
                    <ul>
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getURLFromRouteNameTranslated($localeCode, 'routes.page', ['slug' => $Page->getTranslatedAttribute('slug',$localeCode)]) }}">
                                    <img width="25" src="{{ asset('/assets/img/' . $properties['name'] . '.png') }}"
                                        alt="{{ $localeCode }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </li>
@endsection
