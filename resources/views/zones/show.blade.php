@extends('layout.general')

@section('title', 'Editar Zona')

@section('content')

    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">

            <x-messages />
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Editar Zona-</h5>
                  <a href="{{ route('zones.index') }}" class="btn btn-secondary">Volver</a>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('zones.update', [ 'zone' => $zone->id ]) }}">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                    <input name="id" type="hidden" value="{{ $zone->id }}">

                    <div class="tab-content">
                      <!-- PROFILE -->
                        <div id="navs-pills-top-profile" class="tab-pane fade active show" role="tabpanel">

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="zone">Zona</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                <input type="text" class="form-control" name="zone" id="zone" placeholder="Zona" aria-label="Zona" value="{{ $zone->zone }}" >
                              </div>
                            </div>
                          </div>
      
                          <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="active">Activo</label>
                              <div class="col-sm-10">
                                <div class="input-group">
                                    <label class="input-group-text" for="active"><i class="bx bx-user-check"></i></label>
                                    <select class="form-select" id="active" name="active">
                                      <option @if($zone->active == 1) selected @endif value="1">SI</option>
                                      <option @if($zone->active == 0) selected @endif value="0">NO</option>
                                    </select>
                                  </div>
                              </div>
                            </div>
      
                        </div>

                    </div>

                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>

        </div>

    </div>

@endsection