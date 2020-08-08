<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $posts = DB::table('pertanyaan')->get();
        // dd($posts);
        return view('pertanyaan.index', compact('posts'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')->insert(
            [
                'judul' => $request['judul'],
                'isi' => $request['isi']
            ]
        );

        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Disimpan!');
    }

    public function show($id)
    {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($post);
        return view('pertanyaan.show', compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        return view('pertanyaan.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi']
            ]);

        return redirect('/pertanyaan')->with('success', 'Berhasil ubah pertanyaan!');
    }

    public function destroy($id)
    {
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'pertanyaan berhasil dihapus!');
    }
}
