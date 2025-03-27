@extends('layout')

@section('content')
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            {{-- <div class="page-title">
              <div class="title_left">
                <h3>Perfil de usuario</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> --}}
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="text-2xl font-bold text-center ">Perfil Doctor</h2>

                    <div class="nav navbar-right panel_toolbox">
                      <a href="{{ route('doctores.index') }}" class="btn btn-success">
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
                          <img class="img-responsive avatar-view" src="{{ $data->foto }}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3 class="text-lg font-medium text-gray-700">{{ $data->nombre }}</h3>

                      {{-- <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $data->especialidad }}
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> {{ $data->telefono }}
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">{{ $data->email }}</a>
                        </li>
                      </ul> --}}

                        {{-- BOTONES UNO ABAJO DEL OTRO  --}}
                        {{-- <div class="btn-group" style="display: flex; flex-direction: column; gap: 10px;">
                            <form action="{{ route('doctores.desactivate', $data->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success" style="color: white; width: 100%;" onclick="return confirm('¿Estás seguro de que deseas desactivar este perfil?')">
                                    <i class="fa fa-edit m-right-xs"></i>Eliminar perfil
                                </button>
                            </form>
                        
                            <a href="{{ route('doctores.edit', $data->id) }}" class="btn btn-success" style="color: white; width: 100%;">
                                <i class="fa fa-edit m-right-xs"></i>Editar Perfil
                            </a>
                        </div> --}}
                    
                       
                      <div class="btn-group" style="display: flex; gap: 10px; justify-content: flex-start;">
                        <a href="{{ route('doctores.edit', $data->id) }}" class="btn btn-success" style="color: white;">
                          <i class="fa fa-edit m-right-xs"></i> Editar Perfil
                      </a>

                        <form action="{{ route('doctores.desactivate', $data->id) }}" method="POST" style="margin: 0;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success" style="color: white;" onclick="return confirm('¿Estás seguro de que deseas desactivar este perfil?')">
                                <i class="fa fa-trash m-right-xs"></i> Elimina perfil
                            </button>
                        </form>
                    
                    </div>
                    
                    
                      <br/> <br>

                      <!-- start skills -->
                      {{-- <h4>Skills</h4> --}}
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>calificacion de atencion</p>
                          {{-- <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div> --}}

                          <div class=" col-sm-8 emphasis">
                            <p class="ratings">
                              <a>4.0</a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star"></span></a>
                              <a href="#"><span class="fa fa-star-o"></span></a>
                            </p>
                          </div>
                        </li> <br>

                        <li>
                          <p>horas semana trabajadas</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="75"></div>
                          </div>
                        </li>
                        <li>
                          <p>disponibilidad</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="88"></div>
                          </div>
                        </li>
                        <li>
                          <p>nivel de conocimiento</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                          </div>
                        </li>
                        <li>
                          <p>calificacion de atencion</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>

                        </li>

                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 ">

                      <!-- PERFIL  -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Perfil</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Hisotrial Citas </a>
                          </li>
                        </ul>
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
                                    <p><span class="badge">#</span> {{ $data->id }}</p>
                                  </div>
                                </div>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-edit"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Nombre <small></small></h3>
                                    <p><span class="badge">Nm</span> {{ $data->nombre }}</p>
                                  </div>
                                </div>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-flag"></i>
                                  </div>
                                  <div class="right">
                                    <h3>ESPECIALIDAD </h3>
                                    <p><span class="badge">Es</span> {{ $data->especialidad }}</p>
                                  </div>
                                </div>
                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-phone"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Telefono </h3>
                                    <p><span class="badge">Tel</span> {{ $data->telefono }}</p>
                                  </div>
                                </div>

                                <div class="mail_list">
                                  <div class="left">
                                    <i class="fa fa-star"></i> <i class="fa fa-envelope"></i>
                                  </div>
                                  <div class="right">
                                    <h3>Email </h3>
                                    <p><span class="badge">@</span> {{ $data->email }}</p>
                                  </div>
                                </div>


                            </div>


                          </div>
                          {{-- FINAL PERIL 1 --}}

                          {{-- PERFIL-2 --}}

                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

                            <div class="col-md-1"></div>

                            {{-- <div class="col-md-10"> --}}

                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                  <thead>
                                    <tr class="headings">
                                      <th class="column-title">id </th>
                                      <th class="column-title">nombre paciente  </th>
                                      <th class="column-title">Telefono paciente </th>
                                      <th class="column-title">consultorio  </th>
                                      <th class="column-title">fecha </th>
                                      <th class="column-title">hora </th>
                                      {{-- <th class="column-title">editar </th> --}}
                                    </tr>
                                  </thead>
                        
                                  <tbody>
                                          @foreach ($citas as $key)
                                            <tr>
                                              <td style="font-size: 16px;">{{ $key->id }}</td>
                                              <td style="font-size: 16px;">{{ $key->paciente->nombre }}</td>
                                              <td style="font-size: 16px;">{{ $key->paciente->telefono }}</td>
                                              <td style="font-size: 16px;">{{ $key->consultorio->numero }}</td>
                                              <td style="font-size: 16px;">{{ $key->fecha }}</td>
                                              <td style="font-size: 16px;">{{ $key->hora }}</td>
                                              
                                                {{-- <td>
                                                    <a href="#" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> editar </a>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    
                                  </tbody>
                                </table> 
                            </div>

                            </div>

                            

                          </div> {{-- FINAL PERFIL 22 --}}

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