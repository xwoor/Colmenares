@extends('layouts.app-pages')

@section('title', 'Inicio')


@section('content')
    <header >
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner ">
                  <div class="carousel-item   active">
                    <div class="img_bg" style="background-image:url('img/experiencia.jpg')">

                    </div>
                    <div class="carousel-caption  txt-orange  d-md-block">
                      <h1> Con más de 15 años de experiencia</h1>
                      <h4> en el desarrollo de las Industrias creativas y culturales.</h4>
                    </div>
                  </div>
                  <div class="carousel-item  ">
                    <div class="img_bg" style="background-image:url('img/emprendedores.jpg')">

                    </div>
                    <div class="carousel-caption  txt-orange  d-md-block">
                      <h1>Somos 100%</h1>
                      <h4>emprendedores y creativos</h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img_bg" style="background-image:url('img/gestion.jpg')"></div>
                    <div class="carousel-caption  txt-orange  d-md-block">
                      <h1>Apoyamos la gestión de la Propiedad Intelectual</h1>
                      <h4> de emprendedores, empresarios, artistas y creadores</h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                      <div class="img_bg" style="background-image:url('img/fomentar.jpg')"></div>
                      <div class="carousel-caption  txt-orange  d-md-block">
                        <h1>Fomentamos el crecimiento</h1>
                        <h4>de proyectos creativos, artísticos y culturale.</h4>
                      </div>
                    </div>
                  <div class="carousel-item">
                      <div class="img_bg" style="background-image:url('img/expertos.jpg')"></div>
                      <div class="carousel-caption  txt-orange  d-md-block">
                        <h1>Somos expertos</h1>
                        <h4>en derecho de entretenimiento</h4>
                      </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </header>
    {{-- section --}}
    {{-- fin section --}}
@endsection