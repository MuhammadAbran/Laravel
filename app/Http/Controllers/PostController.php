<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = [
            ['id' => 1, 'title' => 'Post 1', 'body' => 'Body Post 1'],
            ['id' => 2, 'title' => 'Post 2', 'body' => 'Body Post 2'],
            ['id' => 3, 'title' => 'Post 3', 'body' => 'Body Post 3'],
            ['id' => 4, 'title' => 'Post 4', 'body' => 'Body Post 4'],
            ['id' => 5, 'title' => 'Post 5', 'body' => 'Body Post 5'],
            ['id' => 6, 'title' => 'Post 6', 'body' => 'Body Post 6'],
            ['id' => 7, 'title' => 'Post 7', 'body' => 'Body Post 7'],
            ['id' => 8, 'title' => 'Post 8', 'body' => 'Body Post 8'],
            ['id' => 9, 'title' => 'Post 9', 'body' => 'Body Post 9']
        ];

        return view('welcome', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "ini halaman show dengan ID : " . $id;
        echo "<h2>Kembali Ke Halaman Create <a href=" . route('post.create') . ">Disini</a></h2>";
        echo "<h2>Ke Halaman Edit <a href=" . route('post.edit', 10) .">Disini</a></h2>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "ini halaman Edit dengan ID : " . $id;

        echo "<h2>Kembali Ke Halaman Create <a href=" . route('post.create') . ">Disini</a></h2>";
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
    }
}
