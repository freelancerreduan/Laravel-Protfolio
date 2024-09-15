<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(){
        return view("create");
    }

    public function ourStoreMethod(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'img' => 'mimes:png,jpg,jpeg' ,
        ]);


        $post = new Post();

        $post->name = $request->name;
        $post->description = $request->description;
        $post->img = time().'.'.$request->img->extension();
        $post->save();

        return redirect()->route('home')->with('success', 'Your post has beed created successfully');        

    }
}
