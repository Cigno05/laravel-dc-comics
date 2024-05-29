<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        // $comics = Comic::all();
        // return view('comics.index', compact('comics'));
        return view('comics.index');

    }

    public function show(Comic $comic)
    {
        
        return view('comics.show');

    }

    public function create() {

        return view('comics.create');
    }

    public function store()
    {

        dump('Metodo store');
    }
}
