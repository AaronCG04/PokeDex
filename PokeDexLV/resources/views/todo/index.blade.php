@extends('app')
@section('content')
<div class="container text-center" style="padding: 1em">
      <div class="row">
        <div class="col-lg-5 col-sm-12">
          <div class="row justify-content-center">
            <div class="col-8 bg-dark text-white">
              <h3 id="nombre"></h3>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-8 border border-top-0 border-primary">
              <img src="" id="pok_foto">
              <div class="row" style="margin-top: 5em;">
                <div class="col rounded-top rounded-bottom " style="margin-left: 0.5em;margin-right: 0.5em; border: 2px solid rgb(0, 89, 255); background-color: rgba(0, 89, 255, 0.3);">
                  <div class="row" id="exp"></div>
                  <div class="row"><p class="fw-bold">EXP</p></div>
                </div>
                <div class="col rounded-top rounded-bottom" style="margin-left: 0.5em;margin-right: 0.5em; border: 2px solid rgb(255, 166, 0); background-color: rgba(255, 166, 0, 0.3);">
                  <div class="row" id="hp"></div>
                  <div class="row"><p class="fw-bold">HP</p></div>
                </div>
                <div class="col rounded-top rounded-bottom" style="margin-left: 0.5em;margin-right: 0.5em; border: 2px solid rgb(255, 0, 0); background-color: rgba(255, 0, 0, 0.3);">
                  <div class="row" id="atk"></div>
                  <div class="row"><p class="fw-bold">ATK</p></div>
                </div>
                <div class="col rounded-top rounded-bottom" style="margin-left: 0.5em;margin-right: 0.5em; border: 2px solid rgb(21, 255, 0); background-color: rgba(21, 255, 0, 0.3);">
                  <div class="row" id="def"></div>
                  <div class="row"><p class="fw-bold">DEF</p></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6  col-sm-12 shadow p-3 mb-5 bg-body rounded" style="margin-left: 1em; margin-right: 1em;">
          <div class="row" id="ca_p">
          </div>
          <div class="row">
            <div class="col-4 rounded-pill" style="background-color: #42baff; margin-top: 2em;">
              <h4>HABILIDADES</h4>
            </div>
          </div>
          <div class="row" style="margin-top: 1em;">
            <div class="col-5">
              <ul class="list-group text-start" id="habilidades">
              </ul>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-3">
              <h4 class="rounded-pill" style="background-color: rgb(238, 255, 0); margin-top: 1.5em;">TIPO</h4>
            </div>
          </div>
          <div class="row justify-content-center" id="tipos"></div>
          <div class="row justify-content-end">
            <div class="col-4">
              <button type="button" class="btn btn-primary" style="margin-top: 1.3em;" id="boton">Mostrar Pokemón</button>
            </div>
            <div class="col-5">
              <a href="{{route('optener')}}"><button type="button" class="btn btn-primary" style="margin-top: 1.3em;" id="guardar_p">Mostrar Pokemón Guardados</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('js/consult_pokemon.js')}}"></script>
@endsection