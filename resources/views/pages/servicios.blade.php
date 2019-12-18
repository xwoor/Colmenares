@extends('layouts.app-pages')

@section('title', 'Servicios')


@section('content')
<div class="container mt-100 ">
    <div class="row">
        <div class="col-12 col-lg-6 wow fadeInLeft">
                <img class="w-100" src="{{asset('img/bg_01.jpg')}}" alt="Acompañamiento legal">
        </div>
        <div class="col-12 col-lg-6 wow fadeInRight  ">
                <h3>Acompañamiento legal especializado en 
                    Derecho de Autor y Derechos Conexos.</h3>
                <p class="text-justify">El Derecho de Autor cumple un papel fundamental en el desarrollo de los 
                    proyectos creativos. Por eso, en Colmenares Group ofrecemos asesorías, 
                    revisión y redacción de contratos, entre otros servicios jurídicos 
                    enfocados a garantizar la gestión adecuada de la propiedad intelectual 
                    de los proyectos o empresas que confían en nosotros.
                </p>
        </div>
    </div> 
    <hr>
    <div class="row">
        <div class="col-12 col-lg-6 wow fadeInLeft">
                <img class="w-100" src="{{asset('img/bg_01.jpg')}}" alt="Acompanamiento contable">
        </div>
        <div class="col-12 col-lg-6 wow fadeInRight  ">
                <h3>compañamiento contable y tributario especializado 
                    para empresas del sector del Entretenimiento</h3>
                <p class="text-justify">
                        El tema tributario es de los más complejos de manejar 
                        en un emprendimiento o empresa creativa. Por esa razón, 
                        ofrecemos nuestros servicios contables y tributarios para 
                        ayudar a poner en orden todo lo que se refiere al movimiento 
                        contable de un proyecto o compañía.
                </p>
        </div>
    </div> 
    <hr>
    <div class="row">
        <div class="col-12 col-lg-6 wow fadeInLeft">
                <img class="w-100" src="{{asset('img/bg_01.jpg')}}" alt="Asesorias">
        </div>
        <div class="col-12 col-lg-6 wow fadeInRight  ">
                <h3>Asesorias</h3>
                <p class="text-justify">
                        Participamos en actividades de fomento del conocimiento en 
                        nuestras áreas de interés, por medio de talleres, cursos, 
                        conferencias, conversatorios y demás eventos de corte académico 
                        y empresarial.
                </p>
        </div>
    </div> 
    <hr>
    <div class="row">
        <div class="col-12 col-lg-6 wow fadeInLeft">
                <img class="w-100" src="{{asset('img/bg_01.jpg')}}" alt="Management">
        </div>
        <div class="col-12 col-lg-6 wow fadeInRight  ">
                <h3>Management</h3>
                <p class="text-justify">
                        Ofrecemos el servicio de management a artistas de Música. 
                        Diseñamos una propuesta que cubra las necesidades propias 
                        de cada uno para garantizar una relación de provecho entre 
                        manager y artista.
                </p>
        </div>
    </div> 
    <hr>
    <div class="row mb-4">
        <div class="col-12 col-lg-6 wow fadeInLeft">
                <img class="w-100" src="{{asset('img/bg_01.jpg')}}" alt="Booking">
        </div>
        <div class="col-12 col-lg-6 wow fadeInRight  ">
                <h3>Booking</h3>
                <p class="text-justify">
                        Nos encargamos de apoyar la estrategia de promoción de 
                        proyectos creativos relacionados con las artes escénicas. 
                        Siempre diseñando la propuesta dependiendo de las necesidades 
                        propias de cada proyecto.
                </p>
        </div>
    </div> 
</div>
@endsection