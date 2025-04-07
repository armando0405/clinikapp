@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{  url('css/lightbox.min.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{  url('js/lightbox.min.js') }}"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="text-2xl font-bold text-center " >Pacientes</h2>
                            <div class="nav navbar-right panel_toolbox">
                                <a href="{{ route('pacientes.create') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Ingresar Paciente
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            {{-- <p>Listado de pacientes activos</p> --}}

                            <!-- start project list -->
                            <table id="myTable" class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>historial de citas</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $paciente)
                                      @if ($paciente->estado == 1)
                                        <tr>
                                            <td>
                                                {{-- <img src="{{ $paciente->foto }}" class="avatar" alt="Foto de {{ $paciente->nombre }}"> --}}
                                                <a href="{{ $paciente->foto }}" data-lightbox="Foto" data-title="{{ $paciente->nombre }}">
                                                    <img src="{{ $paciente->foto }}" class="avatar img-circle" alt="Foto de {{ $paciente->nombre }}" style="width: 60px; height: 60px; object-fit: cover;">
                                                </a>


                                            </td>
                                            <td style="font-size: 16px;" >{{ $paciente->id }}</td>
                                            <td style="font-size: 16px;" >{{ $paciente->nombre }}</td>
                                            <td style="font-size: 16px;" >{{ $paciente->telefono }}</td>
                                            <td>
                                                <a href="{{ route('pacientes.historialpaciente', $paciente->id) }}" class="btn btn-info btn-xs">
                                                    Consultar
                                                </a>
                                            </td>
                                            <td>
                                              <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> ver perfil  </a>
                                              <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                                            </td>
                                        </tr>
                                      @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- end project list -->
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    
    <script>
        let table = new DataTable('#myTable');
    </script>
    
@endsection
