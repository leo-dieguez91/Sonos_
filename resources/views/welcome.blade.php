@extends('layouts.body')

@section('section')
  <!-- Registro & portada -->

  <div class="portada-inicial justify-content-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 mt-3">
          <img src="image/logo.png" alt="logo" class="mt-5" style="width: 100%; max-width: 405px;">

          <div class="espacio-text">
            <em class="titulos d-none d-sm-block text-dark mb-5">La música nos une</em>
          </div>

          <br><br>
          <div class="row justify-content-center">
            @guest
            <div class="col-8 col-md-6 col-lg-6 row-registro mb-4">

              @if (!auth()->user())
              <form id=registerForm class="mt-3" method="post" enctype="multipart/form-data" action="{{ route('register') }}">
                @csrf
                <div class="col-lg-5 d-inline-block float-left p-0">
                  <input class="form-control{{ $errors->has('first_name') ? ' invalid-input' : '' }}" type="text" placeholder="Nombre" name="first_name" value="{{ old('first_name') }}" data-info="'nombre'">
                  <label class="errores" required>
                    @foreach ($errors->get('first_name') as $error)
                      {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="col-lg-6 ml-sm-auto d-inline-block float-right p-0">
                  <input class="form-control{{ $errors->has('last_name') ? ' invalid-input' : '' }}" type="text" placeholder="Apellido" name="last_name" value="{{ old('last_name') }}" data-info="'apellido'">
                  <label class="errores">
                    @foreach ($errors->get('last_name') as $error)
                      {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="">
                    <input class="form-control{{ $errors->has('email') ? ' invalid-input' : '' }}" type="text" placeholder="Ingresá tu e-mail" name="email" value="{{ old('email') }}" data-info="'e-mail'">
                  <label for="email" class="errores">
                    @foreach ($errors->get('email') as $error)
                        {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="col-lg-5 ml-sm-auto d-inline-block float-left p-0">
                  <input class="form-control{{ $errors->has('password') ? ' invalid-input' : '' }}" type="password" placeholder="Creá tu contraseña" name="password" data-info="'contraseña'">
                  <label class="errores">
                    @foreach ($errors->get('password') as $error)
                        {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="col-lg-6 ml-sm-auto d-inline-block float-right p-0">
                  <input id="password-confirm" class="form-control{{ $errors->has('password') ? ' invalid-input' : '' }}" type="password" placeholder="Confirmá tu contraseña" name="password_confirmation" data-info="'confirmá tu contraseña'">
                  <label class="errores">
                    @foreach ($errors->get('password') as $error)
                      {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="col-lg-5 ml-sm-auto d-inline-block float-left p-0">
                  <label for="">
                    <select class="form-control" id="paises" name='country' data-info="'país'">
                      <option value="">País:</option>
                    </select>
                  </label>
                </div>

                <div class="col-lg-6 ml-sm-auto d-inline-block float-right p-0">
                  <label for="">
                    <select class="form-control" id="provincias" name='state' data-info="'provincia'">
                      <option value="">Provincias:</option>
                    </select>
                  </label>
                </div>

                <div class="form-group">
                  <button class="btn my-2 mx-auto" type="submit" name="register">Registrarme</button>
                </div>

              </form>
            @endif

          </div>
          @else
            <br><br><br><br><br><br><br><br><br><br>

          @endguest
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('section2')

  <!--  Quienes Somos -->
  <section class="container-fluid border fondoNeutro justify-content-center align-items-center" id="QuienesSomos">

    <h1 class="my-5 text-center display-3">Quienes somos</h1>
    <div class="col text-center border py-3 mb-5">
      <p>En <em>Sonos!</em> buscamos reunir personas con la misma pasión por la música. <br>
        Queremos que te encuentres con tus amigos, que hagas nuevos amigos y que puedas organizar tu próximo encuentro. <br>
        Qué mejor que disfrutar del próximo recital de tu banda favorita con ellos! <br> <br>
        Para hacerlo posible, nosotros te damos las herramientas: <br>
        Podrás consultar nuestro Calendario con la información de los próximos eventos en tu ciudad. <br>
        Podrás seguir a artistas y a otros usuarios. <br>
        Recibirás notificaciones por email de los shows programados y alertas cuando salen las entradas a la venta, así no te perdés de nada. <br><br>
        Lo mejor de esto, es que es 100% gratis. <br><br>
        @guest
          Que esperas! <strong><a href="#">Registrate</a></strong> y deciles a tus amig@s!<br><br>
          La música nos une.
          Somos, <em>Sonos!</em>

      </p>
      <label>
        <button type="" class="btn my-2" name="button"><a href="/faq" >¿Aún tenés dudas?</a></button>
      </label>
        @else
          <br><br><br>
        @endguest
    </div>
  </section>
@endsection

@section('section3')
  <script src="js/welcome.js"></script>
  <script src="js/formValidate.js"></script>
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
