@extends('layout.general')

@section('title', 'Contratistas')

@section('content')

    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <x-messages />
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Contratistas /</span> Lista de Contratistas</h4>

            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 style="padding: 10px 0; margin-bottom: 0 !important;">Contratistas</h5>
                    </div>
                </div>
                
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>email</th>
                        <th>Compañía</th>
                        <th>Activo</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($users as $user)
                        <tr class="clickable-row" data-link="{{ route('contractors.show', [ 'contractor' => $user->id ]) }}">
                            <td><strong>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ optional($user->company)->company }}</td>
                            <td>
                                @if($user->active == 1)
                                    <span class="badge bg-label-success me-1">Activo</span>
                                @else
                                    <span class="badge bg-label-danger me-1">Inactivo</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

        </div>

    </div>

@endsection