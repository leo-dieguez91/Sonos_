@extends('layouts.body')

@section('section')
  <div class="container margin-nav">
    <div class="row justify-content-center">
      <div>
        <img src="<?= Auth::user()->picture == '../image/avatar_default.png' ? Auth::user()->picture : 'storage/avatar/' . Auth::user()->picture ?>" alt="avatar" class="rounded-circle" width="200" height="200">
        <br><br>
        <strong>{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</strong>
      </div>
    </div>
    <hr>

    <div class="row d-block">
      <div class="data-form">
        <form  method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row justify-content-center">
            <div class="col-sm-4 d-inline">
              <div class="form-group">
                <label class="control-label">Nombre: {{ Auth::user()->first_name}} </label>
                <input type="text" class="form-control" name="first_name" value="" placeholder="Nombre">
              </div>
            </div>
            <div class="col-sm-4 d-inline">
              <div class="form-group">
                <label class="control-label">Apellido: {{ Auth::user()->last_name}}</label>
                <input type="text" class="form-control" name="last_name" value="" placeholder="Apellido">
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-sm-4">
              <div class="form-group d-inline">
                <label class="control-label">Email: {{ Auth::user()->email}}</label>
                <input class="form-control" type="text" name="email" value="" placeholder="Email">
                <label>
                </label>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group d-inline">
                <label for="name" class="control-label">Cambiar imagen:</label>
                <input class="form-control" type="file" name="avatar" value="">
                <label>
                </label>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label">Cambiar contraseña:</label>
                <input class="form-control" type="password" name="password" value="">
                <label>

                </label>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label">Confirmar cambios:</label>
                <input class="form-control" type="password" name="confirmPassword" placeholder="Contraseña">
                <label>
                </label>
              </div>
            </div>
          </div>
          <button class="btn" type="submit" name="perfil">Cambiar</button>
        </form>

      </div>

    </div>
  </div>
@endsection
