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
            <form class="mt-3" method="post" enctype="multipart/form-data" action="{{ route('register') }}">
              @csrf
              <textarea class="form-control" name="message" rows="2" cols="80" data-info='mensaje' placeholder="En que estas pensando?"></textarea>
              <div class="form-group">
                <button class="btn my-2" type="submit" name="newPost">Post</button>
              </div>
            </form>
          </div>

          {{-- Panel de Posteos --}}
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 mt-3">
                <div class="row justify-content-center">
                  <div class="col-8 col-md-6 col-lg-6 row-registro mb-4">
                    <h2>Posteos</h2>
                    <p>Panel de posteos</p>
                    <div class="card">
                      <div class="card-header">
                        <h5>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} dice:</h5>
                      </div>
                      <div class="card-body">Kame Hame Ha!!</div>
                      <div class="card-footer">
                        <h6>Hace 5 segundos</h6>
                      </div>
                    </div>
                    <br>
                    <div class="card">
                      <div class="card-header">
                        <h5>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} dice:</h5>
                      </div>
                      <div class="card-body">Kame Hame Ha!!</div>
                      <div class="card-footer">
                        <h6>Hace 5 segundos</h6>
                      </div>
                    </div>
                    <br>
                    <div class="card">
                      <div class="card-header">
                        <h5>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} dice:</h5>
                      </div>
                      <div class="card-body">Kame Hame Ha!!</div>
                      <div class="card-footer">
                        <h6>Hace 5 segundos</h6>
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
    </div>
  </div>
@endsection
