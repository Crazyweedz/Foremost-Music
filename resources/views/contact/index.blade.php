@extends('layouts.app')

@section('title', 'Nous Contacter')

@section('content')
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>Si vous avez plus de questions</span>
            Contactez-Nous
        </h1>
    </div>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">
{{--                <section class="ashade-section">--}}
{{--                    <div class="ashade-row">--}}
{{--                        <div class="ashade-col col-12">--}}
{{--                            <p class="ashade-intro">Nice to meet you, friend! My name is Adrew Shade. I’m a professional photographer from Denver, Colorado. If you have any questions, suggestions or you just want to book a photo session feel free to use the contact form below. Lets make something great together!</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}


                <section class="ashade-section">
                    <div class="ashade-row">
                        <div class="ashade-col col-4">
                            <div class="ashade-contact-details">
{{--                                <h4 class="ashade-contact-details__title">--}}
{{--                                    <span>Nos contacts et nos reseaux sociaux</span>--}}
{{--                                    Où nous trouver--}}
{{--                                </h4>--}}
{{--                                <hr>--}}
                                @foreach($contacts as $contact)
                                    <h5 class="ashade-contact-details__title">
                                        <span>{{ $contact->fonction }}</span>
                                        {{ $contact->name }}
                                    </h5>
                                    <ul class="ashade-contact-details__list" style="margin-bottom: 30px">
                                        <li>
                                            <i class="ashade-contact-icon la la-phone"></i>
                                            <a href="tel:+11234567890">{{ $contact->telephone }}</a>
                                        </li>
                                        <li>
                                            <i class="ashade-contact-icon la la-envelope"></i>
                                            <a href="mailto:a.shade@example.com">{{ $contact->email }}</a>
                                        </li>
                                    </ul>
                                @endforeach

                            </div><!-- .ashade-contact-details -->
                        </div><!-- .ashade-col -->
                        <div class="ashade-col col-8">
                            @if (session('success'))
                                <div class="alerte">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alerte">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <section class="ashade-section" style="margin-bottom: 50px">
                                <div class="ashade-row">
                                    <div class="ashade-col col-12">
                                        <p class="ashade-intro">Tous les champs marqués par un astérisque (*) sont requis.</p>
                                    </div>
                                </div>
                            </section>

                            <form action="{{ route('contact.send') }}" method="post">
                                @csrf
                                <div class="ashade-row ashade-small-gap">
                                    <div class="ashade-col col-6">
                                        <label for="nom">(*) Nom :</label>
                                        <input type="text" id="nom" name="nom" placeholder="Nom" required>
                                    </div>
                                    <div class="ashade-col col-6">
                                        <label for="prenom">(*) Prénom :</label>
                                        <input type="text" id="prenom" name="prenom" placeholder="Prenom" required>
                                    </div>
                                </div>
                                <div class="ashade-row ashade-small-gap">
                                    <div class="ashade-col col-6">
                                        <label for="email">(*) Adresse Email :</label>
                                        <input type="email" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="ashade-col col-6">
                                        <label for="telephone">Téléphone :</label>
                                        <input type="tel" id="telephone" name="telephone" placeholder="Téléphone">
                                    </div>
                                </div>
                                <label for="message">(*) Votre message :</label>
                                <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                                <input type="submit" value="Send Message">
                            </form>
                        </div><!-- .ashade-col -->
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
