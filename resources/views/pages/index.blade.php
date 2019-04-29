@extends('layouts.app-pages')

@section('title', 'Index')


@section('content')
    <header >
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="data:image/png;base64,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" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="data:image/png;base64,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" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="data:image/png;base64,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" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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