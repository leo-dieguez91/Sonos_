@extends('layouts.body')

@section('section')
  <!-- Registro & portada -->

  <div class="portada-inicial justify-content-center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 mt-3">
          <img src="image/logo.png" alt="logo" class="mt-5" style="width: 100%; max-width: 405px;">
          <em class="titulos d-none d-sm-block text-dark mb-5">La música nos une</em>
          <br><br>
          <div class="row justify-content-center">
            <div class="col-8 col-md-6 col-lg-6 row-registro mb-4">

              <form class="mt-3" method="post" enctype="multipart/form-data" action="{{ route('register') }}">
                @csrf
                <div class="col-lg-5 d-inline-block float-left p-0">
                  <input class="form-control" type="text" placeholder="Nombre" name="first_name" value="{{ old('first_name') }}">
                  <label class="errores">
                    @foreach ($errors->get('first_name') as $error)
                      {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="col-lg-6 ml-sm-auto d-inline-block float-right p-0">
                  <input class="form-control" type="text" placeholder="Apellido" name="last_name" value="{{ old('last_name') }}">
                  <label class="errores">
                    @foreach ($errors->get('last_name') as $error)
                      {{ $error }}
                    @endforeach
                  </label>
                </div>


                <input class="form-control" type="text" placeholder="Ingresá tu e-mail" name="email" value="{{ old('email') }}">
                <label for="email" class="errores">
                  @foreach ($errors->get('email') as $error)
                      {{ $error }}
                  @endforeach
                </label>

                <input class="form-control" type="password" placeholder="Creá tu contraseña" name="password">
                <label class="errores">
                  @foreach ($errors->get('password') as $error)
                      {{ $error }}
                  @endforeach
                </label>

                <input id="password-confirm" class="form-control" type="password" placeholder="Confirma tu contraseña" name="password_confirmation">
                <label class="errores">
                  @foreach ($errors->get('password') as $error)
                    {{ $error }}
                  @endforeach
                </label>

                <div class="form-group">
                  <button class="btn my-2" type="submit" name="register">Registrarme</button>
                </div>

              </form>
            </div>
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
        Que esperas! <strong><a href="#">Registrate</a></strong> y deciles a tus amig@s!<br><br>
        La música nos une.
        Somos, <em>Sonos!</em>
      </p>
      <label>
        <button type="" class="btn my-2" name="button"><a href="/faq" >¿Aún tenés dudas?</a></button>
      </label>
    </div>
  </section>
@endsection
