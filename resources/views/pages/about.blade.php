@extends('layout.page')
@section('page')
    <div class="ltn__about-us-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{ asset($PageData['Corporate']->image) }}" alt="About Us Image">
                        <div class="wave ltn__animation-wave-5s ltn__effect-img-top-center ">
                            <div class="about-us-img-info">
                                <div class="about-us-img-info-inner">
                                    <h1><span class="counter">{{ $PageData['Counter']->counter1 }}</span><span>+</span></h1>
                                    <h6><span>{{ $PageData['Counter']->getTranslatedAttribute('title1') }}</span></h6>
                                    <span class="dots-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">{{__('about1')}}</h6>
                            <h3 class="section-title">{{ $PageData['Corporate']->getTranslatedAttribute('title') }}<span>.</span></h3>
                        </div>
                        <p>{!! $PageData['Corporate']->getTranslatedAttribute('about') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call-to-action-area call-to-action-5  bg-overlay-theme-90 pt-40 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-5 text-center">
                        <h2 class="white-color text-decoration"><i class="icon-call"></i>{!! str_replace('%',$Contact->phone,__('about2'))!!}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__progress-bar-area before-bg-right pt-115 pb-95">
        <div class="container">
            <div class="row">
                <div
                    class="{{ !empty($PageData['Corporate']->getTranslatedAttribute('video')) && !empty($PageData['Corporate']->video_thumb) ? 'col-lg-6' : 'col-lg-10' }}">
                    <div class="ltn__progress-bar-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h4 class="section-subtitle">{{__('about3')}}<span>.</span></h4>
                            {!! $PageData['Corporate']->getTranslatedAttribute('mission') !!}
                        </div>
                        <div class="section-title-area ltn__section-title-2">
                            <h4 class="section-subtitle">{{__('about4')}}<span>.</span></h4>
                            {!! $PageData['Corporate']->getTranslatedAttribute('vision') !!}
                        </div>
                        <div class="section-title-area ltn__section-title-2">
                            <h4 class="section-subtitle">{{__('about5')}}<span>.</span></h4>
                            {!! $PageData['Corporate']->getTranslatedAttribute('values') !!}
                        </div>
                    </div>
                </div>
                @if (!empty($PageData['Corporate']->video) && !empty($PageData['Corporate']->video_thumb))
                    <div class="col-lg-6 align-self-center">
                        <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50-- bg-image ml-30"
                            data-bs-bg="{{ asset($PageData['Corporate']->video_thumb) }}">
                            <a class="ltn__video-icon-2 ltn__video-icon-2-border---"
                                href="{{ $PageData['Corporate']->getTranslatedAttribute('video') }}" data-rel="lightcase:myCollection">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <div class="ltn__our-history-area  pt-115 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__our-history-inner">
                        <div class="section-title-area ltn__section-title-2">
                            <h4 class="section-title">{{__('about6')}}<span>.</span></h4>
                            {!! $PageData['Corporate']->getTranslatedAttribute('history') !!}
                        </div>
                        <div class="ltn__tab-menu text-uppercase">
                            <div class="nav">
                                @foreach ($PageData['History'] as $k => $history)
                                    <a {!! $k == 0 ? 'class="active show"' : '' !!} data-bs-toggle="tab"
                                        href="#tab{{ $k }}">{{ $history->year }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-content">
                            @foreach ($PageData['History'] as $k => $history)
                                <div class="tab-pane fade {{ $k == 0 ? 'active show' : '' }}" id="tab{{ $k }}">
                                    <div class="ltn__product-tab-content-inner">
                                        <div class="row">
                                            @if (!empty($history->image))
                                                <div class="col-lg-6 align-self-center">
                                                    <div class="about-us-img-wrap about-img-left">
                                                        <img src="{{asset($history->image)}}" alt="{{$history->getTranslatedAttribute('title')}}">
                                                        <div class="ltn__history-icon">
                                                            <i class="fas fa-award"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="col-lg-6 align-self-center">
                                                <div class="about-us-info-wrap">
                                                    <div class="section-title-area ltn__section-title-2">
                                                        <h6 class="section-subtitle ltn__secondary-color">Sezgin San
                                                        </h6>
                                                        <h4 class="section-title">{{$history->getTranslatedAttribute('title')}}<span>.</span></h4>
                                                        <p>{{$history->getTranslatedAttribute('text')}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
