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
                <a href="#">
                  <i class="ion-android-image"></i>
                </a>
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
                            <img src="image/avatar_default.png" alt="avatar" class="rounded-circle" width="40" height="40">
                          </div>
                          <h5 class="mt-2 ml-5">
                            {{$post->user->first_name . ' ' . $post->user->last_name}} dice:
                          </h5>
                        </div>
                        <div class="card-body">
                          {{$post->comment}}
                        </div>
                        <div class="card-footer">
                          <h6>{{ $post->created_at->format('d/m/Y') . ' a las ' . $post->created_at->format('H:i')}}
                            <ul class="float-right">
                              @if (Auth::user()->id == $post->user_id)
                                <form action="/home/delete/{{$post->id}}" method="post">
                                  @csrf
                                  <button type="submit" name="delete">
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
