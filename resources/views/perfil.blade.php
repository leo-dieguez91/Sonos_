@extends('layouts.body')

@section('section')
  <div class="container margin-nav" style="padding-bottom: 40px; padding-top: 40px;">
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
                <input class="form-control{{ $errors->has('email') ? ' invalid-input' : '' }}" type="text" name="email" value="" placeholder="Email">
                <label class="errores" required>
                  @foreach ($errors->get('email') as $error)
                    {{ $error }}
                  @endforeach
                </label>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group d-inline">
                <label for="name" class="control-label">Cambiar imagen:</label>
                <input class="form-control{{ $errors->has('avatar') ? ' invalid-input' : '' }}" type="file" name="avatar" value="">
                <label class="errores" required>
                  @foreach ($errors->get('avatar') as $error)
                    {{ $error }}
                  @endforeach
                </label>
              </div>
            </div>
          </div>
          {{-- <hr class="linea-hr"> --}}
          <div class="row justify-content-center">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label">Nueva contraseña:</label>
                <input class="form-control{{ $errors->has('password') ? ' invalid-input' : '' }}" type="password" name="password" value="">
                <label class="errores">
                  @foreach ($errors->get('password') as $error)
                      {{ $error }}
                  @endforeach
                </label>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label">Confirmar contraseña:</label>
                <input class="form-control{{ $errors->has('password') ? ' invalid-input' : '' }}" type="password" name="password_confirmation" placeholder="Contraseña">
                <label class="errores">
                  @foreach ($errors->get('password') as $error)
                    {{ $error }}
                  @endforeach
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

@section('section2')
  {{-- <button class="btn1" type="button" name="button" id="sonosA">Tema 1</button>
   <button class="btn2" type="button" name="button" id="sonosB">Tema 2</button> --}}
@endsection

@section('section3')

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script>
   $('#sonosA').click(function() {
     var linkCSS = document.querySelector('#theme');
     linkCSS.setAttribute('href', '/css/style.css');
     $.ajax({
         type: 'POST',
         url: 'setCookie.php',
         data: { cookie: '/css/style.css' },
     });
   });

   $('#sonosB').click(function() {
     var linkCSS = document.querySelector('#theme');
     linkCSS.setAttribute('href', '/css/style2.css');
     $.ajax({
         type: 'POST',
         url: 'setCookie.php',
         data: { cookie: '/css/style2.css' },
     });
   });
 </script>
@endsection
