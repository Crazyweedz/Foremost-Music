@extends('layouts.app')

@section('title', 'Évènements')

@section('content')
    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>foremost music</span>
            Évènements
        </h1>
    </div>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">
                <!-- <section class="ashade-section">
                  <div class="ashade-row">
                    <div class="ashade-col col-12">
                      <p class="ashade-intro">Photography is my passion. Through the lens the world looks different and i would like to show you this difference. You can see it in my albums that are presented here.</p>
                    </div>
                  </div>
                </section> -->



                @if($events->isEmpty())

                    <section class="ashade-section">
                        <div class="ashade-row">
                            <div class="ashade-col col-12">
                                <p class="ashade-intro">Aucun évènement disponible pour le moment.</p>
                            </div>
                        </div>
                    </section>

                @endif

                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-12">
                            <div class="ashade-albums-grid ashade-grid ashade-grid-2cols">
                                @foreach( $events as $event )
                                    <div class="ashade-album-item ashade-grid-item">
                                        <div class="ashade-album-item__image">
                                            <img src="{{ Voyager::image($event->thumbnail('medium', 'img')) }}" alt="My Special Day">
                                        </div>
                                        <h5>
                                            <span>{{ date('j F Y - H:i', strtotime($event->date))}}</span>
                                            {{ $event->nom  }}
                                        </h5>
                                        <a href="{{ route('events.show', $event->slug) }}" class="ashade-album-item__link"></a>
                                    </div><!-- .ashade-album-item -->
                                @endforeach
                            </div><!-- .ashade-albums-grid -->
                        </div>
                    </div><!-- .ashade-row -->
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
