@extends('layouts.app-admin')

@section('title', 'Admin')

@section('content')
<div class="container">
    <h3 class="text-center">Productos</h3>
        <div class="row col-md-12 custyle ">
        <table class="table table-striped custab mt-4 text-center">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Proyecto</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        @foreach ($datos as $dato)
                <tr>
                    <td><img height="30px" class="rounded" src="images/{{ $dato->img_01}}"></td>
                    <td>{{ $dato->project_title }}</td>
                    <td>{{ $dato->type }}</td>
                    <td>{{ $dato->status }}</td>
                    <td>
                        <a class='btn btn-info btn-xs' href="/admin/{{ $dato->id }}">
                          </span> Editar</a>
                    </td>
                    <td>
                        <form action="/admin/{{ $dato->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-xs" value="borrar">               
                        </form>    
                    </td>
                </tr>
                @endforeach
        </table>
        </div>
    </div> 
    @endsection