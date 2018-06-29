<header class="header-main fixed-top"> <!-- fixed-top -->
  <div class="header-sup ">

    <div class="row justify-content-between mb-2">
      <div class="align-items-start col-6 col-lg-6">
        <div class="col-6">
          <nav class="navbar navbar-expand-lg p-0">
            <div class="collapse navbar-collapse">

              <a href="/"><img src="image/logosm.png" alt="logosm" >  </a>

              <ul class="navbar-nav mt-2">
                <li class="nav-item active">
                  <a class="nav-link decoracion-borde" href="/home">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link decoracion-borde" href="/faq">Acerca de Sonos!</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link decoracion-borde" href="/#QuienesSomos">Quienes Somos</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/eventos">Eventos</a>
                </li>
              </ul>

            </div>
          </nav>

        </div>


        <div class="nav-mobie">
          <div id="mySidenav" class="sidenav">
            <a href="index.php"><img src="image/logosm.png" alt="logosm"></a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="nav-link" href="/">Home</a>
            <a href="/faq">Acerca de Sonos!</a>
            <a href="/#QuienesSomos">Quienes Somos</a>
            <a href="#">Grupos</a>
            <a href="#">Calendario</a>
            <a href="#">Ciudades</a>
          </div>
          <span class="ion-navicon-round"style="font-size:1.8em;cursor:pointer;line-height:55px;color:black " onclick="openNav()"></span>
        </div>
      </div>

        <div class="col-6 col-lg-5 p-1">
          @guest

          {{-- <form method="POST" action="{{ route('login') }}">
              @csrf
            <div class="form-inline ">
              <div class="col-10 col-sm-9 col-md-8 col-lg-8 p-0 ml-lg-auto">
                <div class="input-group mr-2 ">

                    <input type="text" name="4" class="form-control mr-2 col-7" id="inlineFormInputName2" placeholder="Email" value="" data-toggle="tooltip" title="" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <!-- <span class="errores2">?></span> -->

                    <input type="password" name="pass" class="form-control col-5" id="inlineFormInputName2" placeholder="Contraseña" value="" data-toggle="tooltip" title="">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <!-- <span class="errores2">?></span> -->

                </div>
              </div>

              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

              <button type="submit" class="btn btn-sm ml-1 pl-2 pr-2 hidden-xs" style="font-size: 0.6em;font-weight:bold;" name="login"> <span class="ion-log-in"></span> Ingresar </button>
              <button type="submit" class="btn btn-sm button-small ml-2 p-0 px-2"style="font-size: 0.7em;font-weight:bold;" name="login"> <span class="ion-log-in"></span></button>
            </div>
            <div class="form-check ajusteleft">
              <label class="form-check-label" style="font-size: 0.7em; color:black;"><input class="form-check-input" type="checkbox" name="recordar">Recordarme</label>
              <a href="#" class="ml-1 ml-sm-5">¿Olvidaste tu contraseña?</a>
            </div>
          </form> --}}
            {{-- col-10 col-sm-9 col-md-8 col-lg-8 --}}

            <div class="p-0 mt-2 mx-5">
              <button type="button" class="btn btn-sm ml-1 pl-2 pr-2 float-right" name="button"><a href="/"><span class="ion-log-in"></span> Registrate!</a></button>
            </div>

          <div class="p-0 mt-2 mx-5">
            <button type="button" class="btn btn-sm ml-1 pl-2 pr-2 float-right" name="button"><a href="{{ route('login') }}"><span class="ion-log-in"></span> Ingresar</a></button>
          </div>

        @else
          <div class="btn-group mb-1 mt-1 pull-right pr-3">
            <button type="button" class="btn dropdown-nav mr-2" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"style="width: 100%; height:55px;">
              <div class="col-md-6 d-inline text-left"> Hola
                  {{ Auth::user()->first_name}} !
                  {{-- {{Auth::user()->last_name }} --}}
              </div>



              <div class="col-md-4 d-inline">
                <img src="<?= Auth::user()->picture == '../image/avatar_default.png' ? Auth::user()->picture : 'storage/avatar/' . Auth::user()->picture ?>" alt="avatar" class="rounded-circle" width="40" height="40">
              </div>
            </button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
              <a class="dropdown-item" href="/perfil">Perfil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/home">Home</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Cerrar Sesión') }}
              </a>
              <div class="dropdown-divider"></div>
              <button class="dropdown-item" style='cursor:pointer' type="button" name="button" id="sonosA">Purple theme</button>
              <div class="dropdown-divider"></div>
              <button class="dropdown-item" style='cursor:pointer' type="button" name="button" id="sonosB">Light theme</button>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </div>


        @endguest
        </div>
    </div>
  </div>
</header>

<!-- boton top -->
<button onclick="topFunction()" id="top-button" title="Go to top" class="fa fa-arrow-up"></button>


<script>
// cuando scrolea para abajo aparece el boton
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("top-button").style.display = "block";
  } else {
    document.getElementById("top-button").style.display = "none";
  }
}

// cuando se hace click al boton sube para arriba
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "270px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}



$('[data-toggle="tooltip"]').tooltip('show');
</script>
