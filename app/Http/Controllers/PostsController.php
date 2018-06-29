<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
  public function getPost(){
    $posts = Post::latest('created_at')->paginate(5);
    return view('home', compact('posts'));
  }

  // public function getPostByUser($user_id){
  //   $user_post = Post::all()->where('user_id' == $user_id)->get();
  //   return view('perfil', compact('user_post'));
  // }

  public function getPostID(){
    $postID = Post::lastest()->first();
    if (!$postID) {
      return false;
    }
    return $postID;
  }

  public function savePost(){
    $request = request();
    $postID = Post::latest()->first();
    $postID = $postID->id;
    if (!$postID) {
      $postID = 1;
    } else {
      $postID += 1;
    }

    $request->validate([
      'message' => 'sometimes|nullable|string|max:255',
      'picture' => 'sometimes|nullable|image|mimes:jpeg,bmp,png,jpg'
    ]);

    if ($request->picture) {
      $file = $request->file('picture');
      $folder = "postImages";
      $name = $postID . '.' . $file->extension();
      $path = $file->storePubliclyAs($folder, $name, 'public');
    } else {
      $name = NULL;
    }

    if (!$request->message) {
      $request->message = ' ';
    }

    Post::create([
      'comment' => $request->message,
      'user_id' => auth()->user()->id,
      'picture' => $name
    ]);

    $posts = Post::latest('created_at')->paginate(5);
    return view('home', compact('posts'));
  }

  public function deletePost($id){
    $delete = Post::find($id);
    $delete->delete();
    return redirect('home');
  }
}
