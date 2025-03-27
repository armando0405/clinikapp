@extends('layout')

@section('content')

    <div class="right_col" role="main">
        <div class="x_panel" >
            <div class="x_title">
                <h2 class="text-2xl font-bold text-center ">Editar cita</h2>
                <div class="clearfix"></div>
            </div>

            <div class="row justify-content-center">
                {{-- Sidebar izquierda --}}
                <div class="col-md-1 col-2">
                    
                </div>

                <div class="col-md-10 col-8 my-3" >
                    <form action="{{ route('citas.update', $cita->id ) }}" method="POST" class="form-label-left input_mask" >
                        @csrf
                        @method('PUT') 

                        <div class="row" >
                            {{-- NOMBRE --}}
                            <div class="col-md-6 col-6 form-group has-feedback" >
                                <label class="col-form-label col-md-3 col-sm-3 label-align"  style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Fecha 
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                  <input type="date" id="fecha" name="fecha" class="form-control" value="{{ $cita->fecha }}" required>
                                </div>
                            </div>
                            {{-- id="nombre" name="nombre" value="{{ $data->nombre }}" --}}

                            {{-- Especialidad --}}
                            <div class="col-md-6 col-6 form-group has-feedback" >
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Hora
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                  <input type="time" id="hora" name="hora" class="form-control" value="{{ $cita->hora }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            {{-- Email --}}
                            <div class="col-md-6 col-6 form-group has-feedback" >
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">doctor
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                  <select id="doctor_id" name="doctor_id" class="form-control" required>
                                    <option value="" disabled>Seleccione un doctor</option>
                                    @foreach($doctores as $doctor)
                                        <option value="{{ $doctor->id }}" {{ $doctor->id == $cita->doctor_id ? 'selected' : '' }}>
                                            {{ $doctor->nombre }}
                                        </option>
                                    @endforeach
                                  </select>

                                </div>
                            </div>

                            {{-- Telefono --}
                            <div class="col-md-6 col-6 form-group has-feedback" >
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Paciente
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                  <select id="paciente_id" name="paciente_id" class="form-control" required>
                                    <option value="" disabled>Seleccione un paciente</option>
                                    @foreach($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}" {{ $paciente->id == $cita->paciente_id ? 'selected' : '' }}>
                                            {{ $paciente->nombre }}
                                        </option>
                                    @endforeach
                                  </select> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            {{-- Email --}}
                            <div class="col-md-6 col-6 form-group has-feedback" >
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Consultorio
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                  <select id="consultorio_id" name="consultorio_id" class="form-control" required>
                                    <option value="" disabled>Seleccione un consultorio</option>
                                    @foreach($consultorios as $consultorio)
                                        <option value="{{ $consultorio->id }}" {{ $consultorio->id == $cita->consultorio_id ? 'selected' : '' }}>
                                            Consultorio {{ $consultorio->numero }}
                                        </option>
                                    @endforeach
                                 </select>

                                </div>
                            </div>

                        </div>

                        <div class="ln_solid"></div>
                        {{-- Botones --}}
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-8 text-center">
                                <a href="{{ url()->previous() }}" class="btn btn-primary" style="color: white;">
                                {{-- <a href="{{ route('pacientes.show', $data->id) }}" class="btn btn-primary" style="color: white;"> --}}
                                    <i class="fa fa-times"></i> Cancelar
                                </a>
                                
                                <!-- Botón de Restablecer -->
                                <button class="btn btn-primary" type="reset">
                                    <i class="fa fa-undo"></i> Restablecer
                                </button>

                                <!-- Botón de Enviar -->
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-paper-plane"></i> Guardar Cambios
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

@endsection
