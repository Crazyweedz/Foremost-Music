<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use JsonException;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('artists.index', ['artists' => Artist::orderBy('name', 'asc')->get() ]);
    }

    /**
     * Show the profile for the given user.
     * @param $slug
     * @return Application|Factory|View
     * @throws JsonException
     */
    public function show($slug)
    {

        //Récupère l'artiste à partir du slug
        $artist = Artist::where('slug', $slug)->firstOrFail();
        $socials = json_decode($artist->socials, true, 512, JSON_THROW_ON_ERROR);

        return view('artists.show', compact('artist', 'socials'));
    }
}
