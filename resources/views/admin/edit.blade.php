@extends('layouts.app-admin')

@section('title', 'Editar Producto')


@section('content')


<div class="container">
    <div class="container">
        <div class="row">
        <h4>Editar Publicación</h4>

       <div class="col col-md-2"></div>
          <div class="col col-md-8">
          <form action="/admin/{{$post->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="form-group required">
          <label class='control-label'>Nombre</label>
        <input type="text" class="form-control" name="name" placeholder="Publicación numero" value="{{$post->name}}">
          
        </div>
        <div class="form-group required">
          <label  class='control-label'>Slug (*No user espacios ni caracteres especiales)</label>
          <input type="text" class="form-control" name="slug" placeholder="publicacion-numero" value="{{$post->slug}}">
        </div>
        <div class="form-group required">
          <label  class='control-label' >Status</label>
          <select class="form-control" name="status">
            <option>PUBLISHED</option>
            <option selected>DRAFT</option>
          </select>
        </div>
        
        <div class="form-group required">
          <label  class='control-label'>Descripción</label>
          <textarea class="form-control" name="excerpt" rows="3">{{$post->excerpt}}</textarea>
        </div>
        <div class="form-group required">
          <label  class='control-label'>Post</label>
          <textarea class="form-control" name="body"  rows="8">{{$post->body}}</textarea>
        </div>
      
       
          <ul class="media-date text-uppercase reviews list-inline">
          <li class="aaaa"><button type="submit" class="btn btn-success">Guardar</button></li>
        </ul>
      </form>
      <a href="/admin" class="btn btn-danger">Cancelar</a>
      </div>
        <div class="col col-md-2"></div>
      
      </div>
      </div>
@endsection