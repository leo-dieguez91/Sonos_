@extends('layouts.body')

@section('section')
  <!-- Timeline content -->
  <br><br><br>
  <div class="container">
    <div class="row col-12 mt-3 d-block">



      {{-- Formulario de posteo --}}
      <div class="col-8 col-md-6 row-registro mb-4 mx-auto">
        <form class="mt-3" method="post" enctype="multipart/form-data">
          @csrf
          <textarea class="form-control" name="message" rows="2" cols="80" data-info='mensaje' placeholder="En que estas pensando?"></textarea>
          <div class="form-group">
            <button class="btn my-2" type="submit" name="newPost">Post</button>
          </div>
        </form>
      </div>

      {{-- Panel de Posteos --}}

      <div class="col-8 col-md-6 row-registro mb-4 mx-auto">
        <h2>Posteos</h2>
        <p>Panel de posteos</p>
        @foreach ($posts as $post)
          <div class="card">
            <div class="card-header">
              <div class="pull-left image">
                <img src="image/avatar_default.png" alt="avatar" class="rounded-circle" width="40" height="40">
              </div>
              <h5 class="mt-2 ml-5">                        {{$post->user->first_name . ' ' . $post->user->last_name}}
                dice:</h5>
              </div>
              <div class="card-body">
                {{$post->comment}}
              </div>
              <div class="card-footer">
                {{-- <h6>{{$post->created_at}}</h6> --}}
                <h6>{{ $post->created_at->format('d/m/Y') . ' a las ' . $post->created_at->format('H:i')}}</h6>
              </div>
            </div>
            <br>
          @endforeach
        </div>
      </div>
      <br>
    </div>
  </div>
</div>
@endsection
