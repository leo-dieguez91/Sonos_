<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
  public function show()
  {
    return view('perfil');
  }

  public function replaceUserData(Request $request){
    $request = request();
    $user = $request->user();
    $file = $request->file('avatar');
    $folder = "avatar";
    $name = $user->email . '.' . $file->extension();
    $path = $file->storePubliclyAs($folder, $name, 'public');

    $user->picture = $name;
    $user->save();

    return redirect('perfil');

  }
}
