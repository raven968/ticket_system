@extends('layout.general')

@section('title', 'Crear Usuario')

@section('content')

    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <x-messages />
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Crear Usuario</h5>
                  <a href="{{ route('users.index') }}" class="btn btn-secondary">Volver</a>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('users.store') }}">
                    @csrf

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="name2" class="input-group-text"><i class="bx bx-user"></i></span>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" aria-label="Nombre" >
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="last_name">Apellido</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="last_name2" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellido" aria-label="Apellido">
                          </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="company_id">Compañía</label>
                      <div class="col-sm-10">
                        <div class="input-group">
                            <label class="input-group-text" for="company_id"><i class="bx bx-buildings"></i></label>
                            <select class="form-select" id="company_id" name="company_id">
                              <option value="0">- Seleccione -</option>
                              @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->company }}</option>    
                              @endforeach
                            </select>
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
                        <label class="col-sm-2 col-form-label" for="username">Nombre de Usuario</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Nombre de Usuario" aria-label="Nombre de Usuario">
                          </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 form-label" for="phone">Numero de Telefono(opcional)</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                          <input type="text" id="phone" name="phone" class="form-control phone-mask" placeholder="6141182833" aria-label="6141182833">
                        </div>
                        <div class="form-text">Incluye el Lada, formato siguiente: 6141182833, sin espacios</div>
                      </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="password">Contraseña</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="password2" class="input-group-text"><i class="bx bx-lock-alt"></i></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña">
                          </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="password_confirmation">Confirmar Contraseña</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="password_confirmation2" class="input-group-text"><i class="bx bx-lock-alt"></i></span>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Contraseña" aria-label="Contraseña">
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

                    <input type="hidden" name="is_admin" value="1">
                    <input type="hidden" name="is_webmaster" value="0">

                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Crear</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

        </div>

    </div>

@endsection