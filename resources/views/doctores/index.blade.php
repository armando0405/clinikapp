@extends('layout')

@section('content')
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            {{-- <div class="page-title">
              <div class="title_left">
                <h3>Doctores</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search text-right">
                    <a href="{{ route('doctores.index') }}" class="btn btn-primary ">
                        <i class="fa fa-plus"></i> Ingresar Doctor
                    </a>
                </div>
              </div>
            </div> --}}

            </div>



            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">                  

                  <div class="x_title">
                    <h2 class="text-3xl font-bold text-center " >Doctores </h2>
                    <div class="nav navbar-right panel_toolbox">
                        <a href="{{ route('doctores.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Ingresar Doctor
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                
                  


                    <div class="row">
                      @foreach ($data as $key)
                         @if ($key->estado == 1)
                             
                        <div class="col-md-4 col-sm-4  profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"  ><i class="text-2xl font-bold text-center ">{{ $key->nombre }}</i></h4>
                              <div class="left col-md-7 col-sm-7">
                                {{-- <h2>Nicole Pearson</h2> --}}
                                <p><strong><i class="fa fa-flag"></i> Especialidad: </strong> {{ $key->especialidad }} </p>
                                <ul class="list-unstyled">
                                  <li><i class="fa fa-envelope"></i> Email: {{ $key->email }}</li>
                                  <li><i class="fa fa-phone"></i> telefono #: {{ $key->telefono }} </li>
                                </ul>
                              </div>
                              
                              <div class="right col-md-5 col-sm-5 text-center">
                                <img src=" {{ $key->foto }} "alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                            <div class=" bottom text-center">
                              <div class=" col-sm-6 emphasis">
                                <p class="ratings">
                                  <a>4.0</a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star"></span></a>
                                  <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                              </div>

                              <div class="col-sm-6 emphasis">
                                <button type="button" class="btn btn-success btn-sm"> 
                                    <i class="fa fa-user"></i> 
                                    <i class="fa fa-comments-o"></i> 
                                </button>
                                <a href="{{ route('doctores.show', $key->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-user"></i> Ver perfil
                                </a>
                            </div>
                            
                            </div>
                          </div>
                        </div>

                        @endif

                      @endforeach

                    </div> 
                     



                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      Add content to the page ...
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection