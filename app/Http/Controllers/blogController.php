<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('guest.blog' , compact('posts') );
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
    function dashboard() {
        $posts = Post::where('user_id' , auth()->id())->get();

        return view('users.home' , compact('posts'));
    }




}
