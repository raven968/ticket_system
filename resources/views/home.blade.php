@extends('layout.general')

@section('title', 'Dashboard')

@section('content')
    
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-3">

                <div class="card mb-4 sticky-top" style="top: 15px !important">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Filtros</h5>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('home') }}" method="GET">

                        <!-- STATE FILTER -->
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Estado:</label>
                          <select name="state" class="form-select" id="state">
                            <option value="0">- Seleccione -</option>
                            @foreach ($states as $state)
                                <option @if($state->state == Request::get('state')) selected @endif value="{{ $state->state }}">{{ $state->state }}</option>    
                            @endforeach
                          </select>
                        </div>

                        <!-- CITY FILTER -->
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Ciudad:</label>
                            <select name="city" class="form-select" id="city">
                              <option value="0">- Seleccione -</option>
                              @foreach ($cities as $city)
                                  <option @if($city->city == Request::get('city')) selected @endif value="{{ $city->city }}">{{ $city->city }}</option>    
                              @endforeach
                            </select>
                        </div>

                        <!-- AREA FILTER -->
                        <div class="mb-3">
                            <label class="form-label" for="area">Areas de Experiencia:</label>
                            <select name="area" class="form-select" id="area">
                              <option value="0">- Seleccione -</option>
                              @foreach ($areas as $area)
                                  <option @if($area->area == Request::get('area')) selected @endif value="{{ $area->area }}">{{ $area->area }}</option>    
                              @endforeach
                            </select>
                        </div>

                        <!-- EDUCATION LEVEL FILTER -->
                        <div class="mb-3">
                            <label class="form-label" for="area">Nivel Académico:</label>
                            <select name="education_level_id" class="form-select" id="education_level_id">
                              <option value="0">- Seleccione -</option>
                              @foreach ($education_levels as $education_level)
                                  <option @if($education_level->id == Request::get('education_level_id')) selected @endif value="{{ $education_level->id }}">{{ $education_level->education_level }}</option>    
                              @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Send</button>
                      </form>
                      <small>{{ $postulants->total() }} Candidatos</small>
                    </div>
                  </div>
            </div>
            <div class="col-9">

                @foreach($postulants as $postulant)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img class="card-img card-img-left" src="@if(!is_null($postulant->image)) {{ $postulant->image }} @else ../assets/img/avatars/8.jpg @endif" alt="Card image">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                            <h5 class="card-title">{{ $postulant->position1 }}</h5>
                            <p class="card-text"><small class="text-muted">{{ $postulant->city }}, {{ $postulant->state }}</small></p>
                            <p class="card-text">
                                {{ $postulant->position1 }} - {{ $postulant->company1 }}<br>
                                <small class="text-muted">@if(!is_null($postulant->finish_date1)){{ $postulant->antiquity1 }}@else Actualidad @endif</small>
                            </p>
                            <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>        
                @endforeach
                {{ $postulants->links('vendor.pagination.bootstrap-4') }}

            </div>
        </div>

    </div>

@endsection
@section('scripts')
    <script>
        $("#state").change(function(e) {
            axios
                .get(`{{ route('cities_by_state') }}?state=${$(this).val()}`)
                .then( res => {
                    
                    let html = '<option value="0">- Seleccione -</option>'

                    res.data.map(city => {
                        html += `<option value"${city.city}">${city.city}</option>`
                    })

                    $("#city").html(html)
                })
        })
    </script>
@endsection