@extends('layout')

@section('content')

    <div class="right_col" role="main">
        <div class="x_panel" >
            <div class="x_title">
                <h2 class="text-2xl font-bold text-center ">citas en el consultorio {{ $data->numero }}</h2>

                <div class="nav navbar-right panel_toolbox">
                    <a href="{{ route('consultorios.index') }}" class="btn btn-success">
                        <i class="fa fa-arrow-left"></i> Regresar
                    </a>
                  </div>

                <div class="clearfix"></div>
            </div>

            <div class="row justify-content-center">
                {{-- Sidebar izquierda --}}
                <div class="col-md-1 col-2">
                    
                </div>
                <br>

                {{-- <div class="col-md-10 col-8 my-3" > --}}
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                          <thead>
                            <tr class="headings">
                              <th class="column-title">id cita </th>
                              <th class="column-title">Paciente</th>
                              <th class="column-title">Doctor</th>
                              <th class="column-title">nivel consultorio</th>
                              <th class="column-title">fecha </th>
                              <th class="column-title">hora </th>
                            </tr>
                          </thead>
                
                          <tbody>
                                  @foreach ($citas as $key)
                                    <tr>
                                      <td style="font-size: 16px;">{{ $key->id }}</td>
                                      <td style="font-size: 16px;">{{ $key->doctor->nombre }}</td>
                                      <td style="font-size: 16px;">{{ $key->doctor->nombre }}</td>
                                      <td style="font-size: 16px;">{{ $key->consultorio->nivel }}</td>
                                      <td style="font-size: 16px;">{{ $key->fecha }}</td>
                                      <td style="font-size: 16px;">{{ $key->hora }}</td>
                                    </tr>
                                @endforeach
                            
                          </tbody>
                        </table> 
                    </div>
                </div>

                {{-- Sidebar derecha --}}
                <div class="col-md-1 col-2" >
                    <p></p>
                </div>
            </div>
        </div>
    </div>

@endsection
