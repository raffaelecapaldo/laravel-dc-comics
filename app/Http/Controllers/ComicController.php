<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
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
        $data = [
            'dcItems' => config('extradb.dcitems'),
            'footerLinks' => config('extradb.footerlinks'),
            'comicCards' => Comic::all(),
        ];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'dcItems' => config('extradb.dcitems'),
            'footerLinks' => config('extradb.footerlinks'),
        ];

        return view('comics.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $comic = $request->all();
        $newComic = new Comic();
        $newComic->fill($comic);
        $newComic->save();

        return redirect()->route('admin.panel');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $data = [
            'dcItems' => config('extradb.dcitems'),
            'footerLinks' => config('extradb.footerlinks'),
            'comic' => $comic,
        ];

        return view('comics.show', $data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $data = [
            'dcItems' => config('extradb.dcitems'),
            'footerLinks' => config('extradb.footerlinks'),
            'comic' => $comic];

        return view('comics.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $formData = $request->all();
        $comic->update($formData);

        return redirect()->route('admin.panel')->with('message', "Comics with id: {$comic->id} has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('admin.panel')->with('message', "Comics with id: {$comic->id} has been deleted");
    }
}
