<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

use Auth;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $album =Album::all();
      return view('albums.index', ['albums'=>$album]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      request()->validate([
      'name'=> 'required',
      'trackCount'=> 'required',
      'artistName'=> 'required',
      ]);

      $post = new post();
      $post->title = request('name');
      $post->number = request('trackCount');
      $post->content = request('description');
      $post->title = request('artistName');
      $post->user_id = Auth::user()->id;
      $post->save();

      return redirect('albums');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('albums.show', ['album'=>$album]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('albums.edit', ['album'=>$album]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
      request()->validate([
        'name'=> 'required',
        'trackCount'=> 'required',
        'artistName'=> 'required',
      ]);

      // $post->title = request('title');
      // $post->colour = request('colour');
      // $post->content = request('content');
      // $post->user_id = Auth::user()->id;
      // $post->save();

      $album->update($request->all());

      return redirect('albums');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
      $album->delete();
      return redirect('albums');
    }
}
