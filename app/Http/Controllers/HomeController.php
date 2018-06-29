<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
      return view('welcome');
    }

    public function index()
    {
        return view('home');
    }

    public function faq()
    {
      return view('faq');
    }

    public function replaceUserData(Request $request){

      $request = request();

      $post = $request->post();

      $validateUserData = $request->validate([
        'picture' => 'sometimes|nullable|image|mimes:jpeg,bmp,png,jpg'
      ]);

      if ($request->avatar) {
        $file = $request->file('avatar');
        $folder = "avatar";
        $name = $user->email . '.' . $file->extension();
        $path = $file->storePubliclyAs($folder, $name, 'public');
        $user->picture = $name;
      }

      $post->save();

      return redirect('perfil');
    }
}
