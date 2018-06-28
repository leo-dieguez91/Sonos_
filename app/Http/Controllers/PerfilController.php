<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
  public function show()
  {
    return view('perfil');
  }

  public function replaceUserData(Request $request){

    $request = request();

    $user = $request->user();

    $validateUserData = $request->validate([
      'first_name' => 'sometimes|nullable|string|max:100',
      'last_name' => 'sometimes|nullable|string|max:100',
      'email' => 'sometimes|nullable|string|email|max:150|unique:users',
      'avatar' => 'sometimes|nullable|image|mimes:jpeg,bmp,png,jpg',
      'password' => 'sometimes|nullable|string|min:6|confirmed',
      // 'confirmPassword' => 'strin|min:6'
    ]);

    if ($request->avatar) {
      $file = $request->file('avatar');
      $folder = "avatar";
      $name = $user->email . '.' . $file->extension();
      $path = $file->storePubliclyAs($folder, $name, 'public');
      $user->picture = $name;
    }
    if ($request->first_name) {
      $user->first_name = $request->first_name;
    }
    if ($request->last_name) {
      $user->last_name = $request->last_name;
    }
    if ($request->email) {
      $user->email = $request->email;
    }
    if ($request->password) {
      $user->password = Hash::make($request->password);
    }

    $user->save();

    return redirect('perfil');


  }



  // validar imagen a subir, fijarme porque no carga bien las imagenes
}
