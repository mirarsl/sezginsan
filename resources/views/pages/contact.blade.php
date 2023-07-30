@extends('layout.page')
@section('page')
    <div class="ltn__contact-address-area mb-90 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('assets/img/icons/10.png') }}" alt="Icon Image">
                        </div>
                        <h3>E Posta</h3>
                        <p>
                            {{ $Contact->email }}
                            @if (!empty($Contact->email2))
                                <br>
                                {{ $Contact->email2 }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('assets/img/icons/11.png') }}" alt="Icon Image">
                        </div>
                        <h3>Telefon</h3>
                        <p>
                            {{ $Contact->phone }}
                            @if (!empty($Contact->phone2))
                                <br>
                                {{ $Contact->phone2 }}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('assets/img/icons/12.png') }}" alt="Icon Image">
                        </div>
                        <h3>Adres</h3>
                        <p>{{ $Contact->address }}</p>
                        @if (!empty($Contact->address2))
                            <br>
                            <p>{{ $Contact->address2 }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__contact-message-area mb-120 mb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">İletişime Geç</h4>
                        @if (session('status'))
                            <div class="alert mt-3 alert-{{ session('status') }} alert-dismissible fade show"
                                role="alert">
                                <strong> {{ session('message') }}</strong>
                            </div>
                            @push('scripts')
                                <script type="text/javascript">
                                    setTimeout(function() {
                                        $('.alert').alert('close');
                                    }, 5000);
                                </script>
                            @endpush
                        @endif
                        <form action="{{ route('route.contact') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="name" placeholder="İsim & Soyisim" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email" placeholder="E-Posta" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="phone" placeholder="Telefon" required>
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" placeholder="Mesajınız" required></textarea>
                            </div>
                            <p><input id="agree" type="checkbox" required> <label for="agree"
                                    class="input-info-save mb-0"> Bilgilerimin kayıt altında tutulmasını kabul
                                    ediyorum.</label></p>
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Gönder</button>
                            </div>
                            <p class="form-messege mb-0 mt-20"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="google-map">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d753.8489504919706!2d29.25187216965937!3d40.907066711780814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDU0JzI1LjQiTiAyOcKwMTUnMDkuMSJF!5e0!3m2!1str!2str!4v1690726726892!5m2!1str!2str"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
@endsection
