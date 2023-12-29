@extends('layout.general')

@section('title', 'Zonas')

@section('content')

    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <x-messages />
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Turnos /</span> Lista de Turnos</h4>

            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 style="padding: 10px 0; margin-bottom: 0 !important;">Turnos</h5>
                        <a class="btn btn-success" href="{{ route('turns.create') }}">Crear</a>
                    </div>
                </div>
                
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Turno</th>
                        <th>Activo</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($turns as $turn)
                        <tr class="clickable-row" data-link="{{ $turn->link }}">
                            <td><strong>{{ $turn->id }}</td>
                            <td>{{ $turn->turn }}</td>
                            <td>
                                @if($turn->active == 1)
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