<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Blog::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titulo' => 'required|max:50',
            'cuerpo' => 'required|string|max:50',
            'categoria' => 'required | string | max:15',
            'imagen' => 'required | max:2000 ',
        ]);
        return Blog::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Blog::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'titulo' => 'required|max:50',
            'cuerpo' => 'required|string|max:50',
            'categoria' => 'required | string | max:15',
            'imagen' => 'required | max:2000 ',
        ]);

        $Blog = Blog::find($id);
        $Blog->update([
            'titulo' => request('titulo'),
            'cuerpo' => request('cuerpo'),
            'categoria' => request('categoria'),
            'imagen' => request('imagen'),
        ]);
        return $Blog;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Blog = Blog::find($id);
        $Blog->delete();
        return response()->json([
            'response' => 'El Blog fue eliminado',
        ]);
    }
}
