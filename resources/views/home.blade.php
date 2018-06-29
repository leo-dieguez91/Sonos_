@extends('layouts.body')

@section('section')
  <!-- Timeline content -->
  <br><br><br>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 mt-3">
        <div class="row justify-content-center">

          {{-- Formulario de posteo --}}
          <div class="col-8 col-md-6 col-lg-6 row-registro mb-4">
            <form class="mt-3" method="post" enctype="multipart/form-data">
              @csrf
              <textarea class="form-control" name="message" rows="3" cols="80" data-info='mensaje' placeholder="¿En qué estás pensando?"></textarea>
              <button class="btn my-2 pull-right" type="submit" name="newPost">Post</button>
              <ul class="float-left mt-3 mx-2">




                <label class="btn-btn-default">
                  <i id='1' class="ion-android-image"></i>
                    <input id='2' onclick="do2()" class="form-control{{ $errors->has('picture') ? ' invalid-input' : '' }}" type="file" style="display:none;" name="picture" aria-hidden="true">
              </label>
{{--
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <label class="btn-btn-default">
                            <i id="1" onclick="do2()" class="fa fa-upload fa-2x" aria-hidden="true"></i>Upload Document
                            <input id="2" style="display:none;"type="file" class="form-control col-lg-2 col-md-2 col-sm-2 ">
                        </label>
                    </div> --}}




              </ul>
              <ul class="float-left mt-3 mx-2">
                <a href="#">
                  <i class="ion-android-film"></i>
                </a>
              </ul>
              <ul class="float-left mt-3 mx-2">
                <a href="#">
                  <i class="ion-link"></i>
                </a>
              </ul>
            </form>
          </div>

          {{-- Panel de Posteos --}}
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 mt-3">
                <div class="row justify-content-center">
                  <div class="col-8 col-md-6 col-lg-6 row-registro mb-4 pt-4">
                    @foreach ($posts as $post)
                      <div class="card">
                        <div class="card-header">
                          <div class="pull-left image">
                            <img src="<?= $post->user->picture == '../image/avatar_default.png' ? $post->user->picture : 'storage/avatar/' . $post->user->picture ?>" alt="avatar" class="rounded-circle" width="40" height="40">
                          </div>
                          <h5 class="mt-2 ml-5">
                            {{$post->user->first_name . ' ' . $post->user->last_name}} dice:
                          </h5>
                        </div>
                        <div class="card-body">
                          <img src="storage/postImages/{{$post->picture}}" width="100%" height="100%" style="@if ($post->picture == NULL)
                            display:none;
                          @endif""><br>
                          {{$post->comment}}
                        </div>
                        <div class="card-footer">
                          <h6>{{ $post->created_at->format('d/m/Y') . ' a las ' . $post->created_at->format('H:i')}}
                            <ul class="float-right">
                              @if (Auth::user()->id == $post->user_id)
                                <form action="/home/delete/{{$post->id}}" method="post" id="delete" onsubmit="return confirm('Seguro deseas continuar?');">
                                  @csrf
                                  <button class="btn" type="submit" name="delete">
                                    <i class="ion-trash-b"></i>
                                  </button>
                                </form>
                              @endif
                            </ul>
                          </h6>
                        </div>
                      </div>
                      <br>
                    @endforeach
                    {{ $posts->links() }}
                    <br>
                  </div>
                </div>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
@section('section3')
  <script src="js/confirmDelete.js"></script>
  <script>
  public function do2(){
    document.getElementById("2").click;
  }
  </script>
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
