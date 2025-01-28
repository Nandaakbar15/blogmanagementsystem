<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  get or view the data in datapost/index.blade.php
    public function index()
    {
        $post = Post::all();
        return view('dashboardpost.datapost.index', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    //  view form tambah post
    public function create()
    {
        return view('dashboardpost.datapost.tambahPost');
    }

 
    // logic tambah post
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);

        Post::create($validateData);

        return redirect('/post/datapost')->with('success', 'Data Post berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */

    //  form ubah post
    public function edit(Post $post)
    {
        return view('dashboardpost.datapost.ubahPost', [
            'post' => $post
        ]);
    }

  
    // logic ubah post 
    public function update(Request $request, Post $post)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);

        $post->update($validateData);

        return redirect('/post/datapost')->with('success', 'Data Post berhasil diupdate!');
    }

    // delete post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/post/datapost')->with('success', 'Data post berhasil di hapus!');
    }

    // searching post based on title or author
    public function searchPost(Request $request)
    {
        $cariPost = $request->input('cariPost');
        $post = Post::query()
                ->where('title', 'like', '%' . $cariPost . '%')
                ->orWhere('author', 'like', '%' . $cariPost . '%')
                ->get();
        return view('dashboardpost.datapost.index', [
            'post' => $post
        ]);
    }
}
