@extends('layouts.app-pages')

@section('title', 'Servicios')


@section('content')
<div class="container mt-100" >
    <div class="row mb-4 d-flex justify-content-center">
  
        {{-- Servicio 3 --}}
        <div class="col-12 col-lg-4 ">
            <div class="box-part text-center">   
                <img width="50%" class="p-2" src="{{asset('img/icono_05.png')}}" alt="">  
                <div class="title">
                    <h4>Management.</h4>
                </div>    
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#management">
                    Ver más
                  </button>
             </div>
        </div>
        {{-- Fin servicio 3 --}}
        {{-- Servicio 4 --}}
        <div class="col-12 col-lg-4 ">
            <div class="box-part text-center">   
                <img width="50%" class="p-2" src="{{asset('img/icono_04.png')}}" alt="">  
                <div class="title">
                    <h4>Booking.</h4>
                </div>    
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking">
                    Ver más
                  </button>
             </div>
        </div>
        {{-- Fin servicio 4 --}}
        {{-- Servicio 5 --}}
        <div class="col-12 col-lg-4 ">
            <div class="box-part text-center">   
                <img width="50%" class="p-2" src="{{asset('img/icono_01.png')}}" alt="">  
                <div class="title">
                    <h4>Capacitaciones.</h4>
                </div>    
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#capacitaciones">
                    Ver más
                  </button>
             </div>
        </div>
        {{-- Fin servicio 5 --}}
              {{-- Servicio 1 --}}
              <div class="col-12 col-lg-4 ">
                    <div class="box-part text-center">   
                        <img width="50%" class="p-2" src="{{asset('img/icono_03.png')}}" alt="">  
                        <div class="title">
                            <h4>Acompañamiento legal especializado en Derecho de Autor y Derechos Conexos.</h4>
                        </div>    
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#acompanamiento">
                            Ver más
                          </button>
                     </div>
                </div>
                {{-- Fin servicio 1 --}}
                {{-- Servicio 2 --}}
                <div class="col-12 col-lg-4 ">
                    <div class="box-part text-center">   
                        <img width="50%" class="p-2" src="{{asset('img/icono_02.png')}}" alt="">  
                        <div class="title">
                            <h4>Acompañamiento contable y tributario especializado para empresas del sector del Entretenimiento.</h4>
                        </div>    
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#acompanamiento2">
                            Ver más
                          </button>
                     </div>
                </div>
                {{-- Fin servicio 2 --}}
    </div>
</div>

@include('pages.modals')

@endsection