<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('navigateur.blog' , compact('posts') );
    }

    public function create(){
        return view('users.post');
    }

    public function store(Request $request){
        $posts = $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
        ]);

        $posts['user_id'] = auth()->id() ;

        Post::create($posts);

        return redirect('/');
    }
    public function show($id){
        $post = Post::find($id);

        return view('navigateur.show', compact('post'));
    }

    public function edit($id)
{
    $post = Post::find($id);

    return view('users.edit', compact('post'));
}

public function update(Request $request, $id)
{
    $post = Post::find($id);

    $updatedpost = $request->validate([
        'titre' => 'required',
        'contenu' => 'required',
    ]);

    $post->fill($updatedpost);

    $post->update();

    return redirect('/dashboard')->with('success', 'Post updated successfully');
}
public function destroy($id)
{
    $post = Post::find($id);

    $post->delete();

    return redirect('/dashboard')->with('success', 'Post deleted successfully');
}


    function dashboard() {
        $posts = Post::where('user_id' , auth()->id())->get();

        return view('users.home' , compact('posts'));
    }




}
