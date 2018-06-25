@extends('layouts.body')


@section('section')
  <!-- Logueo -->

  <div class="portada-inicial justify-content-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 mt-3">
          <img src="image/logo.png" alt="logo" class="mt-5" style="width: 100%; max-width: 405px;">
          <em class="titulos d-none d-sm-block text-dark mb-5">La música nos une</em>
          <br><br>
          <div class="row justify-content-center">
            <div class="col-8 col-md-6 col-lg-4 row-registro mb-4">

              <form class="my-5" method="POST" enctype="multipart/form-data" action="{{ route('login') }}">
                @csrf
                <input class="form-control" id="email" type="email" placeholder="Ingresá tu e-mail" name="email" value="{{ old('email') }}" required autofocus>
                <label for="email" class="errores">
                  @foreach ($errors->get('email') as $error)
                    {{ $error }}
                  @endforeach
                </label>

                <input id="password" class="form-control" type="password" placeholder="Ingresá tu contraseña" name="password" required>
                <label class="errores">
                  @foreach ($errors->get('password') as $error)
                    {{ $error }}
                  @endforeach
                </label>

                <label style = "color: white">
                  <input type="checkbox" class="mt-5" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                </label>

                <div class="form-group">
                  <button class="btn my-3" type="submit" name="login">Ingresar</button>
                  <button class="btn" type="submit" name="passwordReset">
                    <a href="{{ route('password.request') }}">
                      Olvidaste tu contraseña?
                    </a>
                  </button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
