@extends('layout')

@section('content')

    <div class="right_col" role="main">
        <div class="x_panel" >
            <div class="x_title">
                <h2 class="text-2xl font-bold text-center ">Editar Doctor</h2>
                <div class="clearfix"></div>
            </div>

            <div class="row justify-content-center">
                {{-- Sidebar izquierda --}}
                <div class="col-md-1 col-2">
                    
                </div>

                <div class="col-md-10 col-8 my-3" >
                    <form action="{{ route('doctores.update', $data->id ) }}" method="POST" class="form-label-left input_mask" >
                        @csrf
                        @method('PUT') 

                        <div class="row" >
                            {{-- NOMBRE --}}
                            <div class="col-md-6 col-6 form-group has-feedback" >
                                <label class="col-form-label col-md-3 col-sm-3 label-align"  style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Nombre 
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" id="nombre" name="nombre" value="{{ $data->nombre }}" required="required" class="form-control ">
                                </div>
                            </div>
                            {{-- id="nombre" name="nombre" value="{{ $data->nombre }}" --}}

                            {{-- Especialidad --}}
                            <div class="col-md-6 col-6 form-group has-feedback" >
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Especialidad
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" id="especialidad" name="especialidad" value="{{ $data->especialidad }}" required="required" class="form-control ">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            {{-- Email --}}
                            <div class="col-md-6 col-6 form-group has-feedback" >
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Telefono
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" id="telefono" name="telefono" value="{{ $data->telefono }}" required="required" class="form-control ">
                                </div>
                            </div>

                            {{-- Telefono --}}
                            <div class="col-md-6 col-6 form-group has-feedback" >
                                <label class="col-form-label col-md-3 col-sm-3 label-align" style="font-weight: bold; color: #000; font-size: 16px;" for="first-name">Email
                                </label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input type="text" id="email" name="email" value="{{ $data->email }}" required="required" class="form-control ">
                                </div>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        {{-- Botones --}}
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-8 text-center">
                                <a href="{{ route('doctores.show', $data->id) }}" class="btn btn-primary" style="color: white;">
                                    <i class="fa fa-times"></i> Cancelar
                                </a>
                                
                                <!-- Botón de Restablecer -->
                                <button class="btn btn-primary" type="reset">
                                    <i class="fa fa-undo"></i> Restablecer
                                </button>

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

@endsection
