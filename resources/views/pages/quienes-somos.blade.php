@extends('layouts.app-pages')

@section('title', 'Quienes Somos')


@section('content')
<div class="container mt-100 text-justify">
    <div class="row">
        <div class="col-12 col-lg-6 wow fadeInLeft">
            <img class="w-100 mb-3" src="{{asset('img/somos_04.jpg')}}" alt="Paola Colmenares">
        </div>
        <div class="col-12 col-lg-6 wow fadeInRight ">
                <p> Colmenares Group es una firma dedicada al desarrollo de 
                    las industrias creativas y culturales en Colombia. Desde 
                    el año 2003 hemos acompañado diversos proyectos del sector 
                    del Entretenimiento en diferentes áreas como son: management
                     360, booking, asesoría legal y financiera. 
                </p>
                <p> El equipo está liderado por Paola Colmenares Bonilla, abogada 
                    con maestría en Propiedad Intelectual de la Universidad Externado 
                    de Colombia, quien ha dedicado toda su vida a aprender desde adentro 
                    cómo funciona la industria del Entretenimiento. Con esta firma busca
                     continuar su trabajo de divulgación e impulso al sector, de la mano 
                     de un equipo de trabajo comprometido y apasionado que comparten la misma visión.
                </p>
        </div>
    </div> 
    <hr>
    <div class="row">
        <div class="col-12 col-lg-6 wow fadeInLeft">
                <img class="w-100 mb-3" src="{{asset('img/somos_01.jpg')}}" alt="Providencia">
        </div>
        <div class="col-12 col-lg-6 wow fadeInRight ">
                <p>Somos emprendedores por naturaleza y muy conscientes del valor del 
                    trabajo creativo, por eso sabemos bien cuáles son los retos que 
                    debe enfrentar el sector en Colombia. Así que nuestros servicios
                     han sido diseñados especialmente para cubrir las necesidades propias 
                     de los autores, artistas, emprendedores y empresarios. 
                </p>
        </div>
    </div> 
    <hr>
    <div class="row">
        <div class="col-12 col-lg-6 wow fadeInLeft">
                <img class="w-100 mb-3" src="{{asset('img/somos_03.jpg')}}" alt="Entrenamiento">
        </div>
        <div class="col-12 col-lg-6 wow fadeInRight ">
                <p>También tenemos muy claro que el Entretenimiento depende 100% de
                     la propiedad intelectual, por lo que todos nuestros servicios están 
                     ligados a la gestión adecuada de los derechos de autor y derechos conexos,
                      así como el derecho de uso de imagen, marcas, entre otros aspectos.
                </p>
        </div>
    </div> 
    <hr>
    <div class="row">
        <div class="col-12 col-lg-6 wow fadeInLeft">
                <img class="w-100 mb-3" src="{{asset('img/somos_05.jpg')}}" alt="Conferencia Paola Colmenares">
        </div>
        <div class="col-12 col-lg-6 wow fadeInRight ">
                <p>Así mismo, como nuestro objetivo es ayudar a construir una industria creativa
                     y cultural sostenible, también nos interesa participar en el análisis de las
                      diferentes políticas, estrategias o planes que impulsa el gobierno colombiano 
                      en aquellos temas que influyen directamente en el crecimiento económico y social 
                      del sector del Entretenimiento en Colombia. 
                </p>
        </div>
    </div> 
</div>
@endsection