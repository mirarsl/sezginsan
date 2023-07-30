@extends('layout.page')
@section('page')
    <div class="ltn__team-area pt-110--- pb-90 pt-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($PageData['Clients'] as $client)
                    <div class="col-xl-3 col-lg-4 col-sm-6 mt-3">
                        <div class="ltn__brand-logo ltn__team-item-3 p-5">
                            <div class="ltn__brand-logo-item">
                                <img src="{{ asset($client->image) }}" alt="Sezgin San Referansları">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
