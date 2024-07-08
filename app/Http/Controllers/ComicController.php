<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicList = Comic::all();

        $data = [
            "catalog" => $comicList,
        ];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            "title" => "required|min:3|max:255",
            "description" => "required",
            "thumb" => "required",
            "price" => "required",
            "series" => "required",
            "sale_date" => "required",
            "type" => "required",
        ]);

        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();


        return redirect()->route('comics.show', $newComic);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        $data = [
            "comic" => $comic
        ];

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::find($id);

        $data = [
            "comic" => $comic
        ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validate([
            "title" => "required|min:3|max:255",
            "description" => "required",
            "thumb" => "required",
            "price" => "required",
            "series" => "required",
            "sale_date" => "required",
            "type" => "required",
        ]);

        
        $comic->update($data);

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
}
