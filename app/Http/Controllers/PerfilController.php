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
    if ($request->avatar) {
      $file = $request->file('avatar');
      $folder = "avatar";
      $name = $user->email . '.' . $file->extension();
      $path = $file->storePubliclyAs($folder, $name, 'public');

      $user->picture = $name;
    }
    if (trim($request->first_name)) {
      $user->first_name = $request->first_name;
    }
    if (trim($request->last_name)) {
      $user->last_name = $request->last_name;
    }
    if (trim($request->email)) {
      $user->email = $request->email;
    }


    $user->save();
    return redirect('perfil');

  }

  // validar imagen a subir, fijarme porque no carga bien las imagenes
}
