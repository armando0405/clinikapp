@extends('layout')

@section('content')

    <div class="right_col" role="main">
        <div class="x_panel" >
            <div class="x_title">
                <h2 class="text-2xl font-bold text-center ">Agregar doctor</h2>
                <div class="clearfix"></div>
            </div>

            <div class="row justify-content-center">
                {{-- Sidebar izquierda --}}
                <div class="col-md-1 col-2">
                    <p></p>
                </div>

                {{-- Contenido principal --}}
                <div class="col-md-10 col-8 my-3" >
                    <form class="form-label-left input_mask" action="{{ route('doctores.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            {{-- NOMBRE --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Nombre" >
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            {{-- id="nombre" name="nombre" --}}

                            {{-- Especialidad --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <input type="text" class="form-control" id="especialidad" name="especialidad" placeholder="Especialidad">
                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="row">
                            {{-- Email --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="Email">
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            {{-- Telefono --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="row">
                            {{-- foto --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="foto" name="foto" value="https://randomuser.me/api/portraits/men/59.jpg" placeholder="Foto">
                                <span class="fa fa-photo form-control-feedback left" aria-hidden="true"></span>
                            </div>

                        </div>

                        <div class="ln_solid"></div>
                        {{-- Botones --}}
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-8 text-center">
                                <a href="{{ route('doctores.index') }}" class="btn btn-primary" style="color: white;">
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
