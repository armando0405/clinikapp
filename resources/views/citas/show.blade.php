@extends('layout')

@section('content')
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="text-2xl font-bold text-center ">Informacion de citas</h2>

                    <div class="nav navbar-right panel_toolbox">
                      <a href="{{ route('citas.index') }}" class="btn btn-success">
                          <i class="fa fa-arrow-left"></i> Regresar
                      </a>
                    </div>
                    <div class="clearfix"></div>

                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{ asset('images/cita.jpeg')  }}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3 class="text-2xl font-bold text-center ">Cita # {{ $data->id }}</h3>

                    
                      <div class="btn-group" style="display: flex; flex-direction: column; gap: 10px;">
                        <form action="{{ route('citas.desactivacion', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success" style="color: white; width: 100%;" onclick="return confirm('¿Estás seguro de que deseas desactivar esta cita?')">
                                <i class="fa fa-edit m-right-xs"></i>Eliminar cita
                            </button>
                        </form>
                    
                        <a href="{{ route('citas.edit', $data->id)}}" class="btn btn-success" style="color: white; width: 100%;">
                            <i class="fa fa-edit m-right-xs"></i>Editar cita
                        </a>
                    </div>
                
              
                  <br/> <br>

                  <!-- start skills -->
                  <ul class="list-unstyled user_data">
                    {{-- CONTENIDO QUE BA ABAJO DE LA FTO DE PERILL --}}

                  </ul>
                  <!-- end of skills -->

                    
                      <br/> <br>



                    </div>
                    <div class="col-md-9 col-sm-9 ">

                      <!-- PERFIL  -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">

                        <div id="myTabContent" class="tab-content">


                          <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">
                            <!-- start recent activity -->
                            <div class="col-sm-12 ">
                              <button id="compose" class="btn btn-sm btn-success btn-block" type="button">INFORMACION</button>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>ID <small></small></h3>
                                    <p style="font-size: 16px;"><span class="badge">#</span> {{ $data->id }}</p>
                                  </div>
                                </div>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Diagnostico <small></small></h3>
                                    <p style="font-size: 16px;"><span class="badge">D</span> {{ $data->diagnostico }}</p>
                                  </div>
                                </div>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Tratamiento  <small></small></h3>
                                    <p style="font-size: 16px;"><span class="badge">Tr</span> {{ $data->tratamiento }}</p>
                                  </div>
                                </div>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Fecha de la cita  <small></small></h3>
                                    <p style="font-size: 16px;"><span class="badge">#</span> {{ $data->fecha }}</p>
                                  </div>
                                </div>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Hora de la cita <small></small></h3>
                                    <p style="font-size: 16px;"><span class="badge">#</span> {{ $data->hora }}</p>
                                  </div>
                                </div>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Consultorio asignado <small></small></h3>
                                    <p style="font-size: 16px;"><span class="badge">Nm</span> {{ $data->consultorio->numero }}</p>
                                  </div>
                                </div>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>doctor <small></small></h3>
                                    <p style="font-size: 16px;"><span class="badge">Nm</span> {{ $data->doctor->nombre }}</p>
                                  </div>
                                </div>
                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Especialidad <small></small></h3>
                                    <p style="font-size: 16px;"><span class="badge">Nm</span> {{ $data->doctor->especialidad }}</p>
                                  </div>
                                </div>

                                
                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>paciente <small></small></h3>
                                    <p style="font-size: 16px;"><span class="badge">Nm</span> {{ $data->paciente->nombre }}</p>
                                  </div>
                                </div>


                                </div>
                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Telefono del pacinete  </h3>
                                    <p style="font-size: 16px;"><span class="badge">Tel</span> {{ $data->paciente->telefono }}</p>
                                  </div>
                                </div>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Email del paciente </h3>
                                    <p style="font-size: 16px;"><span class="badge">@</span> {{ $data->paciente->email }}</p>
                                  </div>
                                </div>


                            </div>


                          </div>
                          {{-- FINAL PERIL 1 --}}

                          {{-- PERFIL-2 --}}

                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

                            <div class="col-md-1"></div>


                            </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection