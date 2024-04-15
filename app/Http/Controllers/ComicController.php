<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        // dd($comics);
        return view("comic/index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comic.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validation($request->all());


        // dd($request);

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);
        // dd($comic);
        return view("comic.show", compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {


        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request->all());

        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }


    public function validation($data)
    {
        $validator = Validator::make($data, [

            'title' => 'required|max:255',
            'description' => 'required|max:5000',
            'thumb' => 'nullable|max:1000',
            'price' => 'required|max:255',
            'series' => 'required|max:255',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:255',
            'artists' => 'required|max:700',
            'writers' => 'required|max:700'

        ], [
            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => 'Puoi inserire massimo :max caratteri',
            'thumb.max' => "L'src può avere massimo :max caratteri",
            'description.required' => 'La descrizione deve essere inserita',
            'description.max' => 'Puoi inserire massimo :max caratteri',
            'price.required' => 'Il prezzo deve essere inserito',
            'price.max' => 'Puoi inserire massimo :max caratteri',
            'series.required' => 'La serie deve essere inserito',
            'series.max' => 'Puoi inserire massimo :max caratteri',
            'sale_date.required' => 'La data di pubblicazione deve essere inserita',
            'sale_date.max' => 'Puoi inserire massimo :max caratteri',
            'type.required' => 'La tipologia del fumetto deve essere inserita',
            'type.max' => 'Puoi inserire massimo :max caratteri',
            'artists.required' => "L'artista deve essere inserita",
            'artists.max' => 'Puoi inserire massimo :max caratteri',
            'writers.required' => 'Lo scrittore deve essere inserito',
            'writers.max' => 'Puoi inserire massimo :max caratteri'
        ])->validate();
    }
}
