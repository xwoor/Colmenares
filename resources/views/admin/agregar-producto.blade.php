@extends('layouts.app-admin')

@section('title', 'Agregar Producto')


@section('content')
<div class="container">
        <div class="row">
            <form action="/admin"  method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group col-md-6">
                  <label for="">Nombre del proyecto</label>
                  <input type="text" name="project_title"  class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="">Localización</label>
                  <input type="text" name="location"  class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                  <label for=""> Imagen 1</label>
                  <input type="file" class="form-control-file" name="img[]" multiple required>
                </div>
               
                <div class="form-group col-md-12">
                  <label for="">Descripción</label>
                  <textarea class="form-control" name="description" rows="3"></textarea>
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
                <button type="submit" class="btn btn-primary">Agregar Producto</button>
            </form>
        </div>
    </div>

@endsection