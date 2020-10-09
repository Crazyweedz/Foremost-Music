@extends('layouts.app')

@section('title', $event->nom)


@section('content')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <style>
        /* padding-bottom and top for image */
        .mfp-no-margins img.mfp-img {
            padding: 0;
        }
        /* position of shadow behind the image */
        .mfp-no-margins .mfp-figure:after {
            top: 0;
            bottom: 0;
        }
        /* padding for main container */
        .mfp-no-margins .mfp-container {
            padding: 0;
        }
    </style>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">
                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-6">
                            <h2>
                                <span>{{ date('j F Y - H:i', strtotime($event->date))}}</span>
                                {{ $event->nom }}
                            </h2>
                            {!! $event->description !!}
                            <div class="fb-share-button" data-href="{{ route('events.show', $event->slug) }}" data-layout="button" data-size="large">
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('events.show', $event->slug) }}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a>
                            </div>
                        </div>
                        <div class="ashade-col col-6">
                            <a class="ashade-lightbox-link" href="{{ Voyager::image($event->img) }}">
                                <img src="{{ Voyager::image($event->img) }}" alt="{{ $event->nom }}">
                            </a>
                        </div>
                    </div><!-- .ashade-row -->
                </section>
                <section class="ashade-section">
                    <iframe width="100%" height="600" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?q={{ $event->google_map_adresse ? $event->adresse : $event->lieu }}&output=embed"></iframe>
                </section>
            </div><!-- .ashade-content -->
            @include('partials.footer')
        </div><!-- .ashade-content-scroll -->
    </main>
@stop

@section('js')
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.ashade-lightbox-link').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300 // don't foget to change the duration also in CSS
                }
            });

        });
    </script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0" nonce="xuKGCKki"></script>
@stop
