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
                  <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" type="text" placeholder="Nombre" name="first_name" value="{{ old('first_name') }}" data-info="'nombre'">
                  <label class="errores" required>
                    @foreach ($errors->get('first_name') as $error)
                      {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="col-lg-6 ml-sm-auto d-inline-block float-right p-0">
                  <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" type="text" placeholder="Apellido" name="last_name" value="{{ old('last_name') }}" data-info="'apellido'">
                  <label class="errores">
                    @foreach ($errors->get('last_name') as $error)
                      {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="">
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="Ingresá tu e-mail" name="email" value="{{ old('email') }}" data-info="'e-mail'">
                  <label for="email" class="errores">
                    @foreach ($errors->get('email') as $error)
                        {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="col-lg-5 ml-sm-auto d-inline-block float-left p-0">
                  <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Creá tu contraseña" name="password" data-info="'contraseña'">
                  <label class="errores">
                    @foreach ($errors->get('password') as $error)
                        {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="col-lg-6 ml-sm-auto d-inline-block float-right p-0">
                  <input id="password-confirm" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Confirmá tu contraseña" name="password_confirmation" data-info="'confirmá tu contraseña'">
                  <label class="errores">
                    @foreach ($errors->get('password') as $error)
                      {{ $error }}
                    @endforeach
                  </label>
                </div>

                <div class="col-lg-5 ml-sm-auto d-inline-block float-left p-0">
                  <label for="">
                    <select id="paises" name='country' data-info="'país'">
                      <option value="">País:</option>
                    </select>
                  </label>
                </div>

                <div class="col-lg-6 ml-sm-auto d-inline-block float-right p-0">
                  <label for="">
                    <select id="provincias" name='state' data-info="'provincia'">
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



  <div class="container">
      <div class="row justify-content-center" style="padding-bottom: 40px; padding-top: 40px;">

          <div class="col-lg-1"></div>
          <div class="col-lg-12 col-xs-12 col-sm-12">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <div class="row">
                              <div class="col-lg-4 col-xs-4 col-sm-4">
                                  <img class="d-block w-100" src="image/fondo-recital3.jpg"alt="First slide" >
                              </div>
                              <div class="col-lg-4 col-xs-4 col-sm-4">
                                  <img class="d-block w-100" src="image/logo.png" alt="First slide">
                              </div>
                              <div class="col-lg-4 col-xs-4 col-sm-4">
                                  <img class="d-block w-100" src="image/logo.png" alt="First slide">
                              </div>

                            </div>
                      </div>

                      <div class="carousel-item">
                          <div class="row">
                              <div class="col-lg-4 col-xs-4 col-sm-4">
                                  <img class="d-block w-100" src="http://www.hotel-erfoud-riad.com/images/resized/images/hrm/activites/desert-erfoud_1400_600.jpg" alt="Two slide">
                              </div>
                              <div class="col-lg-4 col-xs-4 col-sm-4">
                                  <img class="d-block w-100" src="image/fondo-recital2.jpg" alt="Two slide">
                              </div>
                              <div class="col-lg-4 col-xs-4 col-sm-4">
                                  <img class="d-block w-100" src="http://www.hotel-erfoud-riad.com/images/resized/images/hrm/activites/desert-erfoud_1400_600.jpg" alt="Two slide">
                              </div>

                          </div>
                      </div>

                      <div class="carousel-item">
                          <div class="row">
                              <div class="col-lg-4 col-xs-4 col-sm-4">
                                  <img class="d-block w-100" src="https://www.themepunch.com/home/wp-content/uploads/2014/07/unlimited_height_5.jpg" alt="Three slide">
                              </div>
                              <div class="col-lg-4 col-xs-4 col-sm-4">
                                  <img class="d-block w-100" src="image/fondo-recital.png" alt="Three slide">
                              </div>
                              <div class="col-lg-4 col-xs-4 col-sm-4">
                                  <img class="d-block w-100" src="https://www.themepunch.com/home/wp-content/uploads/2014/07/unlimited_height_5.jpg" alt="Three slide">
                              </div>

                          </div>
                      </div>

                  </div>
                  <div>
                    <a class="carousel-control-prev mr-5" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                </div>
                  <div>
                  <a class="carousel-control-next ml-5" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
                  </div>
              </div>
          </div>
      </div>
  </div>

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
@endsection
