@extends('layout')

@section('content')
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">






            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">                  

                  <div class="x_title">
                    <h2 class="text-2xl font-bold text-center ">Consultorios </h2>
                    <div class="nav navbar-right panel_toolbox">
                        <a href="{{ route('consultorios.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Nuevo consultorio
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                
                  


                    <div class="row">

                        @foreach ($data as $key)
                          @if ($key->estado == 1)   
                          <div class="col-md-4 col-sm-4  profile_details mb-4">
                              
                              <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">

                                  <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url('{{ asset('images/c6.jpg') }}')"></div>

                                  <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
                                      <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-black">Consultorio #{{ $key->numero }}</h3>
                              
                                      <div class="flex items-center justify-center px-3 py-2 bg-gray-200 dark:bg-gray-700">
                                        <a href="{{ route('consultorios.show', $key->id) }}"
                                            class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">
                                            citas relacionadas
                                          </a>
                                      </div>
                                  </div>
                              </div>

                          </div>

                          @endif

                         @endforeach







                    </div> 
                  




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