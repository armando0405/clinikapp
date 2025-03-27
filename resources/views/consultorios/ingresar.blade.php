@extends('layout')

@section('content')

    <div class="right_col" role="main">
        <div class="x_panel" >
            <div class="x_title">
                <h2 class="text-2xl font-bold text-center ">Agregar consultorio</h2>
                <div class="clearfix"></div>
            </div>

            <div class="row justify-content-center">
                {{-- Sidebar izquierda --}}
                <div class="col-md-1 col-2">
                    <p></p>
                </div>

                {{-- Contenido principal --}}
                <div class="col-md-10 col-8 my-3" >
                    <form class="form-label-left input_mask" action="{{ route('consultorios.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            {{-- NOMBRE --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="numero" name="numero" placeholder="Numero" required>
                                <span class="fa fa-circle form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            {{-- id="nombre" name="nombre" --}}

                            {{-- Especialidad --}}
                            <div class="col-md-6 col-12 form-group has-feedback">
                                <input type="number" class="form-control" id="nivel" name="nivel" placeholder="nivel"  max="5" required>
                                <span class="fa fa-area-chart form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        {{-- Botones --}}
                        <div class="row justify-content-center mb-4">
                            <div class="col-md-8 text-center">
                                <a href="{{ route('consultorios.index') }}" class="btn btn-primary" style="color: white;">
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
