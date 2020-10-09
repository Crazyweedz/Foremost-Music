@extends('layouts.app')

@section('title', 'Réservation')

@section('css')
    <link href="{{ asset('js/select2/css/select2.css') }}" rel="stylesheet" />
@stop

@section('content')
    <!-- Content -->
    <div class="ashade-page-title-wrap">
        <h1 class="ashade-page-title">
            <span>foremost music</span>
            Réservation
        </h1>
    </div>

    <main class="ashade-content-wrap">
        <div class="ashade-content-scroll">
            <div class="ashade-content">

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

                <form action="{{ route('booking.send') }}" method="post">
                    @csrf
                    <section class="ashade-section" style="margin-bottom: 50px">
                        <h3>Information de contact</h3>
                        <div class="ashade-row">
                            <div class="ashade-col col-6">
                                <label for="nom">(*) Nom :</label>
                                <input type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}" required>
                            </div>
                            <div class="ashade-col col-6">
                                <label for="prenom">Prénom :</label>
                                <input type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}">
                            </div>
                        </div>
                        <div class="ashade-row">
                            <div class="ashade-col col-6">
                                <label for="telephone">(*) Téléphone :</label>
                                <input type="text" name="telephone" placeholder="Téléphone" value="{{ old('telephone') }}" required>
                            </div>
                            <div class="ashade-col col-6">
                                <label for="email">(*) Adresse Email :</label>
                                <input type="text" name="email" placeholder="Adresse Email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="ashade-row">
                            <div class="ashade-col col-6">
                                <label for="compagnie">Nom de vote société ou association :</label>
                                <input type="text" name="compagnie" placeholder="Nom de vote société ou association"  value="{{ old('compagnie') }}">
                            </div>
                        </div>


                    </section>
                    <section class="ashade-section" style="margin-bottom: 50px">
                        <h3>Information sur l'évènement</h3>
                        <div class="ashade-row">
                            <div class="ashade-col col-6">
                                <label for="artiste">(*) Artiste :</label>
                                <select class="artiste" name="artiste" style="width: 100%" required>
                                    <option></option>
                                    @foreach($artistes as $artiste)
                                        <option value="{{ $artiste->name }}"
                                            {{ old("artiste") === $artiste->name ? "selected" : ''}}
                                            {{ app('request')->input('b') === $artiste->name ? "selected" : ''}}
                                        >{{ $artiste->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="ashade-col col-6">
                                <label for="budget">(*) Budget approximatif :</label>
                                <input type="text" name="budget" id="budget" placeholder="Budget approximatif" value="{{ old('budget') }}" required>
                            </div>
                        </div>
                        <div class="ashade-row">
                            <div class="ashade-col col-6">
                                <label for="date">(*) Date de l'évènement :</label>
                                <input type="date" name="date" placeholder="Date de l'évènement" value="{{ old('date') }}" required>
                            </div>
                            <div class="ashade-col col-6">
                                <label for="type">Type d'évènement :</label>
                                <select class="type" name="type" style="width: 100%">
                                    <option></option>
                                    <option value="Boîte de nuit" {{ old("type") === "Boîte de nuit" ? "selected" : '' }}>Boîte de nuit</option>
                                    <option value="Concert" {{ old("type") === "Concert" ? "selected" : '' }}>Concert Public</option>
                                    <option value="Convention" {{ old("type") === "Convention" ? "selected" : '' }}>Convention</option>
                                    <option value="Évènement sponsorisé" {{ old("type") === "Évènement sponsorisé" ? "selected" : '' }}>Évènement sponsorisé</option>
                                    <option value="Foire/Festival" {{ old("type") === "Foire/Festival" ? "selected" : '' }}>Foire ou Festival</option>
                                    <option value="Levée de fonds" {{ old("type") === "Levée de fonds" ? "selected" : '' }}>Levée de fonds</option>
                                    <option value="Mariage" {{ old("type") === "Mariage" ? "selected" : '' }}>Mariage</option>
                                    <option value="Soirée privée" {{ old("type") === "Soirée privée" ? "selected" : '' }}>Soirée privée</option>
                                    <option value="TV/Radio/LiveStream" {{ old("type") === "TV/Radio/LiveStream" ? "selected" : '' }}>TV/Radio/LiveStream</option>
                                    <option value="Autre" {{ old("type") === "Autre" ? "selected" : '' }}>Autre</option>
                                </select>
                            </div>
                        </div>
                        <div class="ashade-row">
                            <div class="ashade-col col-6">
                                <label for="nombre">Nombre de personnes attendues :</label>
                                <input type="text" name="nombre" placeholder="Nombre de personnes attendues" value="{{ old('nombre') }}">
                            </div>
                            <div class="ashade-col col-6">
                                <label for="lieu">(*) Lieu de l'évènement :</label>
                                <input type="text" name="lieu" placeholder="Lieu de l'évènement" value="{{ old('lieu') }}" required>
                            </div>
                        </div>
                        <div class="ashade-row">
                            <div class="ashade-col col-6">
                                <label for="ville">(*) Ville :</label>
                                <input type="text" name="ville" placeholder="Ville" value="{{ old('ville') }}" required>
                            </div>
                        </div>
                        <div class="ashade-row">
                            <div class="ashade-col col-12">
                                <label for="commentaire">Commentaire :</label>
                                <textarea name="commentaire" id="commentaire" placeholder="Dites nous en plus sur votre évènement...">{{ old('commentaire') }}</textarea>
                            </div>
                        </div>

                        <input type="submit" value="Envoyer" id="submit">
                    </section>
                </form>
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
    <script src="{{ asset('js/select2/js/select2.min.js') }}"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(function () {
            $('.artiste').select2({
                placeholder: "Artiste"
            });
            $('.type').select2({
                placeholder: "Type d'évènement"
            });
            $('.pays').select2({
                placeholder: "Pays"
            });
        });
    </script>
@stop
