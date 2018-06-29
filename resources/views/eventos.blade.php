@extends('layouts.body')

@section('section')
  <div class="container margin-nav">
    <div class="row justify-content-center" style="padding-bottom: 40px; padding-top: 40px;">
      <div class="col-lg-1"></div>
      <div class="col-lg-12 col-xs-12 col-sm-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" id="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg-6 col-12 col-sm-6 bord-carousel contenedor-img">
                  <a href="#">
                    <img class="d-block" src="https://www.bhi.com.ar/imagenes/2018/06/lollapalooza-2019-argentina.jpg"alt="First slide" style="width:100%; height:100%;" >
                  </a>
                </div>
                <div class="col-lg-6 col-12 col-sm-6 bord-carousel contenedor-img">
                  <a href="#" >
                    <img class="d-block" src="http://www.politicargentina.com/advf/imagenes/2016/11/58333a012dab4_750x517.jpg" alt="First slide" style="width:100%; height:100%;">
                  </a>
                </div>
                {{-- <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
                <a href="#">
                <img class="d-block" src="image/logo.png" alt="First slide" style="width:100%; height:100%;">
              </a>
            </div> --}}
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-6 col-12 col-sm-6 bord-carousel contenedor-img">
              <img class="d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4EK_GCCDgMwDfRd_UJ9o526oc0sFSb08dSZJfrJ15g3Gkmp0H" alt="Two slide" style="width:100%; height:100%;">
            </div>
            <div class="col-lg-6 col-12 col-sm-6 bord-carousel contenedor-img">
              <img class="d-block" src="https://2.bp.blogspot.com/-yhNDLz6SaRc/Wq3yV1xmAII/AAAAAAAAYD4/6LbLVAZnZm0Pi3gHuyGdnCbbeVxsJr4SACLcBGAs/s1600/DAMAS%2BGRATIS%2B-%2BEN%2BEL%2BLOLLAPALOOZA%2BARGENTINA%2B2018%2B%25281%2529.jpg" alt="Two slide" style="width:100%; height:100%; ">
            </div>
            {{-- <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
            <img class="d-block" src="http://i1.wp.com/www.compromisodiario.com.ar/wp-content/uploads/2015/07/put9RQ0T.jpeg" alt="Two slide" style="width:100%; height:100%;">
          </div> --}}
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-6 col-12 col-sm-6 bord-carousel contenedor-img">
            <img class="d-block" src="http://www.indiehoy.com/wp-content/uploads/2013/07/recitales-argentina.jpg" alt="Three slide" style="width:100%; height:100%;">
          </div>
          <div class="col-lg-6 col-12 col-sm-6 bord-carousel contenedor-img">
            <img class="d-block" src="https://www.bhi.com.ar/imagenes/2018/06/lollapalooza-2019-argentina.jpg" alt="Three slide" style="width:100%; height:100%;">
          </div>
          {{-- <div class="col-lg-4 col-xs-4 col-sm-4 bord-carousel contenedor-img">
          <img class="d-block" src="https://www.themepunch.com/home/wp-content/uploads/2014/07/unlimited_height_5.jpg" alt="Three slide" style="width:100%; height:100%;">
        </div> --}}
      </div>
    </div>
  </div>
  <div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="width:20px;">
      <span class="carousel-control-prev-icon carousel-style" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
  </div>
  <div>
    <a class="carousel-control-next " href="#carouselExampleControls" role="button" data-slide="next" style="width:20px;">
      <span class="carousel-control-next-icon carousel-style" aria-hidden="true"></span>
      <span class="sr-only ">Next</span>
    </a>
  </div>
</div>
</div>
</div>
</div>
@endsection

@section('section2')

  <div class="container ">
    <div class="espacio-text text-center" style="font-family: 'Caveat Brush', cursive; font-size: 2.0em; margin-bottom: 10px;">
      <em class="text-dark ">Galeria</em>
    </div>
    <div class="row justify-content-center row-registro mb-5">

      <div class="row col-md-5 cont-img d-inline-block mt-5">
        <img class="d-block borde-img" src="http://elplanetaurbano.com/wp-content/uploads/2018/03/LOLLA_AR2017_0331_181202_4062_ALIVECOVERAGE-759x500.jpg" style="width:100%; height:100%;cursor:zoom-in" onclick="document.getElementById('modal01').style.display='block'">

        <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
          <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
          <div class="w3-modal-content w3-animate-zoom">
            <img src="http://elplanetaurbano.com/wp-content/uploads/2018/03/LOLLA_AR2017_0331_181202_4062_ALIVECOVERAGE-759x500.jpg" style="width:100%">
          </div>
        </div>
      </div>



      <div class="row col-md-5 cont-img d-inline-block mt-5">
        <img class="d-block borde-img" src="https://assets.diarioregistrado.com/e7/media-photo_59835cd5a9b2d972884042e7_640w.jpeg" style="width: 100%; height:100%;cursor:zoom-in" onclick="document.getElementById('modal02').style.display='block'">

        <div id="modal02" class="w3-modal" onclick="this.style.display='none'">
          <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
          <div class="w3-modal-content w3-animate-zoom">
            <img src="https://assets.diarioregistrado.com/e7/media-photo_59835cd5a9b2d972884042e7_640w.jpeg" style="width:100%">
          </div>
        </div>
      </div>

      <div class="row col-md-5 cont-img d-inline-block">
        <img class="d-block borde-img" src="https://static.lacapital.com.ar/adjuntos/203/imagenes/022/536/0022536216.jpg" style="width:100%; height:100%;cursor:zoom-in" onclick="document.getElementById('modal03').style.display='block'">

        <div id="modal03" class="w3-modal" onclick="this.style.display='none'">
          <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
          <div class="w3-modal-content w3-animate-zoom">
            <img src="https://static.lacapital.com.ar/adjuntos/203/imagenes/022/536/0022536216.jpg" style="width:100%">
          </div>
        </div>
      </div>

      <div class="row col-md-5 cont-img d-inline-block">
        <img class="d-block borde-img" src="https://www.veintitres.com.ar/__export/1511140186020/sites/cronica/img/2017/11/19/19112017_recital_smartconcert.jpeg_541755376.jpeg" style="width:100%; height:100%;cursor:zoom-in" onclick="document.getElementById('modal04').style.display='block'">

        <div id="modal04" class="w3-modal" onclick="this.style.display='none'">
          <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
          <div class="w3-modal-content w3-animate-zoom">
            <img src="https://www.veintitres.com.ar/__export/1511140186020/sites/cronica/img/2017/11/19/19112017_recital_smartconcert.jpeg_541755376.jpeg" style="width:100%">
          </div>
        </div>
      </div>

      <div class="row col-md-5 cont-img d-inline-block my-5">
        <img class="d-block borde-img" src="https://www.locosxlosjuegos.com/wp-content/uploads/2017/11/392214-1021x578.jpg" style="width:100%; height:100%;cursor:zoom-in" onclick="document.getElementById('modal05').style.display='block'">

        <div id="modal05" class="w3-modal " onclick="this.style.display='none'">
          <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
          <div class="w3-modal-content w3-animate-zoom ">
            <img src="https://www.locosxlosjuegos.com/wp-content/uploads/2017/11/392214-1021x578.jpg" style="width:100%">
          </div>
        </div>
      </div>

      <div class="row col-md-5 cont-img d-inline-block my-5">
        <img class="d-block borde-img" src="https://i.ytimg.com/vi/6iajXJIp_eU/maxresdefault.jpg" style="width:100%; height:100%;cursor:zoom-in" onclick="document.getElementById('modal06').style.display='block'">

        <div id="modal06" class="w3-modal " onclick="this.style.display='none'">
          <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
          <div class="w3-modal-content w3-animate-zoom ">
            <img src="https://i.ytimg.com/vi/6iajXJIp_eU/maxresdefault.jpg" style="width:100%">
          </div>
        </div>
      </div>


    </div>
    <br><br>
  </div>


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
