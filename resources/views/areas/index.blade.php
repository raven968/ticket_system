@extends('layout.general')

@section('title', 'Areas')

@section('content')

    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <x-messages />
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Areas /</span> Lista de Areas</h4>

            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 style="padding: 10px 0; margin-bottom: 0 !important;">Areas</h5>
                        <a class="btn btn-success" href="{{ route('areas.create') }}">Crear</a>
                    </div>
                </div>
                
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Area</th>
                        <th>Activo</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($areas as $area)
                        <tr class="clickable-row" data-link="{{ $area->link }}">
                            <td><strong>{{ $area->id }}</td>
                            <td>{{ $area->area }}</td>
                            <td>
                                @if($area->active == 1)
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