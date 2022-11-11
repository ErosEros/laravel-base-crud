<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|string|min:3|max:75',
            'description' => 'string',
            'thumb' => 'required|url',
            'price' => 'required',
            'series' =>  'required|string|min:3|max:30',
            'sale_date' => 'required' ,
            'type'=> 'string',

        ],

        // ['title.required' => 'MINIMO METTERE 3 CARATTERI ALTRIMENTI NON CI STA BENE']
        );

        //
        $data = $request->all();
        $newComic = new Comic();
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        //
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //



         $data = $request->all();
         $comic->update($data);
        return redirect()->route('comics.show', $comic->id);


        // dump($request);
        // dd($comic);
    }

    public function confirmDelete(Comic $comic){
        return view('comics.confirm-delete', compact('comic'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //

        $comic->delete();
        return redirect()->route('comics.index');
    }

}

