@extends('layout.general')

@section('title', 'Crear Compañía')

@section('content')

    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">

            <x-messages />
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Crear Compañía</h5>
                  <a href="{{ route('companies.index') }}" class="btn btn-secondary">Volver</a>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('companies.store') }}">
                    @csrf

                    <div class="tab-content">
                      <!-- PROFILE -->
                        <div id="navs-pills-top-profile" class="tab-pane fade active show" role="tabpanel">

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="company">Compañía</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                <input type="text" class="form-control" name="company" id="company" placeholder="Compañía" aria-label="Compañía" >
                              </div>
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">Email</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="text" id="email" name="email" class="form-control" placeholder="email" aria-label="email">
                              </div>
                            </div>
                          </div>
      
                          <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="active">Activo</label>
                              <div class="col-sm-10">
                                <div class="input-group">
                                    <label class="input-group-text" for="active"><i class="bx bx-user-check"></i></label>
                                    <select class="form-select" id="active" name="active">
                                      <option value="1">SI</option>
                                      <option value="0">NO</option>
                                    </select>
                                  </div>
                              </div>
                            </div>
      
                          <input type="hidden" name="can_view_progress" value="0">
                          <input type="hidden" name="is_webmaster" value="0">
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