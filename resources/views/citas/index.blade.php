@extends('layout')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="text-2xl font-bold text-center ">Citas</h2>
                            <div class="nav navbar-right panel_toolbox">
                                <a href="{{ route('citas.create') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Ingresar Cita
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            {{-- Listado de citas --}}
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">ID cita</th>
                                            <th class="column-title">Paciente</th>
                                            <th class="column-title">Doctor</th>
                                            <th class="column-title"># Consultorio</th>
                                            <th class="column-title">Fecha</th>
                                            <th class="column-title">Hora</th>
                                            <th class="column-title">mas info</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($data as $key)
                                            @if ($key->estado == 1)
                                                <tr>
                                                <td style="font-size: 16px;">{{ $key->id }}</td>
                                                <td style="font-size: 16px;">{{ $key->paciente->nombre }}</td>
                                                <td style="font-size: 16px;">{{ $key->doctor->nombre }}</td>
                                                <td style="font-size: 16px;">{{ $key->consultorio->numero }}</td>
                                                <td style="font-size: 16px;">{{ $key->fecha }}</td>
                                                <td style="font-size: 16px;">{{ $key->hora }}</td>
                                                
                                                    <td>
                                                        <a href="{{ route('citas.show', $key->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> ver </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection
