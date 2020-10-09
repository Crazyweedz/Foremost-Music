@extends('layouts.app')

@section('title', $artist->name)

@section('content')

    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Our Artist</span>
            {{ $artist->name }}
        </h1>
    </div>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">

                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-12">
                            <div class="ashade-service-card">
                                <div class="ashade-service-card__head">
                                    <div class="ashade-service-card__image">
                                        <img src="{{Voyager::image($artist->thumbnail('cropped', 'img'))}}" alt="{{ $artist->name }}">
                                    </div>
                                    <div class="ashade-service-card__label">
                                        <h4>
                                            <span>{{str_ireplace([',', ' ,', ', ', ' , '], ' ·', $artist->countries)}}</span>
                                            {{ $artist->name }}
                                        </h4>
                                    </div>
                                </div><!-- .ashade-service-card__head -->
                                <div class="ashade-service-card__content">
                                    {!! $artist->bio !!}
                                </div>
                            </div><!-- .ashade-service-card -->
                        </div><!-- .ashade-col -->
                    </div><!-- .ashade-row -->
                </section>

                <section class="ashade-section">
                    <div class="ashade-row">
{{--                        <div class="ashade-col align-center col-6">--}}
{{--                            <a href="#" class="button-link">Voir les prochains événements</a>--}}
{{--                        </div><!-- .ashade-col -->--}}
                        <div class="ashade-col align-center col-12">
                            <a href="{{ route('booking.index', ['b' => $artist->name]) }}" class="button-link">Réservation · {{ $artist->name }}</a>
                        </div><!-- .ashade-col -->
                    </div>
                </section>

                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col align-center col-6">
                            {!! $artist->sample_1 !!}
                        </div><!-- .ashade-col -->
                        <div class="ashade-col align-center col-6">
                            {!! $artist->sample_2 !!}

                        </div><!-- .ashade-col -->
                    </div>
                </section>

                <section class="ashade-section">
                    <div class="ashade-row row__social">
                        <ul class="flex-socials">
                            @foreach($socials as $social)
                                <li><a href="{{ $social['value'] }}" target="_blank">{{ trim(ucfirst($social['key'])) }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div><!-- .ashade-content -->
            @include('partials.footer')
        </div><!-- .ashade-content-scroll -->
    </main>


    <div class="ashade-to-top-wrap ashade-back-wrap">
        <div class="ashade-back is-to-top">
            <span>Back to</span>
            <span>Top</span>
        </div>
    </div>
@stop

@section('js')
    <script>
        let iframes = document.querySelectorAll('iframe')

        iframes[0].setAttribute('width', '100%')
        iframes[0].setAttribute('height', '350')
        iframes[1].setAttribute('width', '100%')
        iframes[1].setAttribute('height', '350')

        let dropcap = document.getElementsByClassName('ashade-service-card__content')

        dropcap[0].querySelector('p').setAttribute('class', 'is-dropcap')
    </script>
@stop
