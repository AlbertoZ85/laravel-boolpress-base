<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $users = User::all();
        return view('posts.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = $request->all();

        $request->validate([
            'title' => 'required|min:5|max:100',
            'body' => 'required|min:5|max:500',
            'user_id' => 'required|numeric|exists:users,id',
        ],
            // se voglio impostare gli errori che desidero (altrimenti devo caricare un file nella cartella degli errori...)
            // [
            //     'title.required' => 'Titolo non può essere vuoto',
            //     'title.max' => 'Titolo non può essere più lungo di :max caratteri',
            //     'title.min' => 'Titolo non può essere più corto di :min caratteri',
            //     'body.required' => 'Il corpo del post non può essere vuoto',
            //     'body.max' => 'Il corpo del post non può essere più lungo di :max caratteri',
            //     'body.min' => 'Il corpo del post non può essere più corto di :min caratteri',
            // ]
        );

        $newPost = new Post;
        $newPost->fill($data);
        $result = $newPost->save();
        // oppure il codice qui sopra si compatta in $result = Post::create();

        if ($result) {
            return redirect()->route('posts.index')->with('status', $newPost->user->name);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post) {
        //
    }
}
