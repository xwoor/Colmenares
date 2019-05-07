@extends('layouts.app-admin')

@section('title', 'Editar Producto')


@section('content')
<div class="container">
    <div class="row">
      <h2 class="text-center">Editar producto</h2><hr>
        <form action="/admin/{{ $datos->id }}" method="POST"  >
          @csrf
          @method('PATCH')
            <div class="form-group col-md-6">
              <label for="">Nombre del proyecto</label>
              <input type="text" name="project_title"  class="form-control" value="{{ $datos->project_title }}" required>
            </div>
            <div class="form-group col-md-6">
              <label for="">Localización</label>
              <input type="text" name="location"  class="form-control"  value="{{ $datos->location }}" required>
            </div>   
            <div class="form-group col-md-12">
              <label for="">Descripción</label>
              <textarea class="form-control" name="description"  rows="3">{{ $datos->project_title }}</textarea>
            </div>

            <div class="form-group col-md-3">
              <label for="">Tipo de Producto</label>
              <select class="form-control" name="type">
                  <option name="tipe_1">Tipo 1</option>
                  <option name="tipe_2">Tipo 2</option>
                  <option name="tipe_3">Tipo 3</option>
              </select>
            </div>
            <div class="form-group col-md-3">
            <label for="">Estado de Producto</label>
            <select class="form-control" name="status">
                <option name="activo">Activo</option>
                <option name="inactivo">Inactivo</option>
            </select>
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
        </form>
      </div> <hr>
      <h2 class="text-center">Imagenes</h2><hr>
        <div class="row">     

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="{{ asset('images/'.$datos->img_01)}}" width="100%" >
                  </div>
                  <div class="carousel-item">
                      <img src="{{ asset('images/'.$datos->img_02)}}" width="100%" >
                  </div>
                  <div class="carousel-item">
                      <img src="{{ asset('images/'.$datos->img_03)}}" width="100%" >
                  </div>
                  <div class="carousel-item">
                      <img src="{{ asset('images/'.$datos->img_04)}}" width="100%" >
                  </div>
                  <div class="carousel-item">
                      <img src="{{ asset('images/'.$datos->img_05)}}" width="100%" >
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        
    </div>

@endsection