<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
  public function getPost(){
    $posts = Post::latest('created_at')->get();
    return view('home', compact('posts'));
  }

  // public function getPostByUser($user_id){
  //   $user_post = Post::all()->where('user_id' == $user_id)->get();
  //   return view('perfil', compact('user_post'));
  // }

  public function savePost(){
    $request = request();
    $request->validate([
      'message' => 'required',
    ]);

    Post::create([
      'comment' => $request->message,
      'user_id' => auth()->user()->id,
    ]);

    $posts = Post::latest('created_at')->get();
    return view('home', compact('posts'));
  }
}
