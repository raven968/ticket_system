@extends('layout.general')

@section('title', 'Crear Especialidad')

@section('content')

    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">

            <x-messages />
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Crear Especialidad</h5>
                  <a href="{{ route('specialties.index') }}" class="btn btn-secondary">Volver</a>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('specialties.store') }}">
                    @csrf

                    <div class="tab-content">
                      <!-- PROFILE -->
                        <div id="navs-pills-top-profile" class="tab-pane fade active show" role="tabpanel">

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="specialty">Especialidad</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="specialty2" class="input-group-text"><i class="bx bx-briefcase"></i></span>
                                <input type="text" class="form-control" name="specialty" id="specialty" placeholder="Especialidad" aria-label="Especialidad" >
                              </div>
                            </div>
                          </div>
      
                          <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="active">Activo</label>
                              <div class="col-sm-10">
                                <div class="input-group">
                                    <label class="input-group-text" for="active"><i class="bx bx-check"></i></label>
                                    <select class="form-select" id="active" name="active">
                                      <option value="1">SI</option>
                                      <option value="0">NO</option>
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