@extends('layout')

@section('content')

{{-- link encarghados de dar funcionalidad a la pagina --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <div class="right_col" role="main">
        <div class="x_panel" >
            <div class="x_title">
                <h2 class="text-2xl font-bold text-center ">Agregar Citas</h2>
                <div class="clearfix"></div>
            </div>

            <div class="row justify-content-center">
                {{-- Sidebar izquierda --}}
                <div class="col-md-1 col-2">
                    <p></p>
                </div>

                {{-- Contenido principal --}}
                <div class="col-md-10 col-8 my-3" >

                    <form class="form-label-left input_mask" action="{{ route('citas.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            {{-- NOMBRE --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Consultorio
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                  <select id="consultorio_id" name="consultorio_id" class="form-control" required>
                                    <option value="" >Seleccione un consultorio</option>
                                    @foreach($consultorios as $consultorio)
                                        <option value="{{ $consultorio->id }}" >
                                            Consultorio {{ $consultorio->numero }}
                                        </option>
                                    @endforeach
                                 </select>

                                </div>
                            </div>
                            {{-- id="nombre" name="nombre" --}}

                            {{-- paciente --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Paciente
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                  <select id="paciente_id" name="paciente_id" class="form-control" required>
                                    <option value="" >Seleccione un paciente</option>
                                    @foreach($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}" >
                                            {{ $paciente->nombre }}
                                        </option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            {{-- doctor --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">doctor
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                  <select id="doctor_id" name="doctor_id" class="form-control" required>
                                    <option value="" >Seleccione un doctor</option>
                                    @foreach($doctores as $doctor)
                                        <option value="{{ $doctor->id }}">
                                            {{ $doctor->nombre }}
                                        </option>
                                    @endforeach
                                  </select>

                                </div>
                            </div>

                            {{-- Diagnostico --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Diagnostico
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" id="diagnostico" name="diagnostico" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            {{-- Email --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Tratamiento
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" class="form-control" id="tratamiento" name="tratamiento" >
                                </div>
                            </div>

                            {{-- Telefono --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"  style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Fecha 
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                  <input type="date" id="fecha" name="fecha" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- foto --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Hora
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                  <input type="time" id="hora" name="hora" class="form-control" >
                                </div>
                            </div>

                        </div>

                        <div class="ln_solid"></div>
                        {{-- Botones --}}
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-8 text-center">
                                <a href="{{ route('pacientes.index') }}" class="btn btn-primary" style="color: white;">
                                    <i class="fa fa-times"></i> Cancelar
                                </a>
                                

                                <!-- Botón de Enviar -->
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-paper-plane"></i> Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Sidebar derecha --}}
                <div class="col-md-1 col-2" >
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    
    {{-- funcionalidad --}}
<script>
    $('select').select2();
</script>

@endsection
