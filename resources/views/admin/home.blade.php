@extends('layouts.app-admin')

@section('title', 'Admin')

@section('content')
<div class="container">
    <h3 class="text-center">PUBLICACIONES</h3>


        <div class="row col-md-12 custyle ">
        <table class="table table-striped custab mt-4 text-center">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Titulo</th>
                <th>Estado</th>
                <th>Descripción Corta</th>
                <th>Preview</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        @foreach ($datos as $dato)
                <tr>
                    <td><img height="30px" class="rounded" src="{{ $dato->file}}"></td>
                    <td>{{ $dato->name }}</td>
                    <td>{{ $dato->status }}</td>
                    <td>{{ $dato->excerpt }}</td>
                    <td>
                        <a class='btn' href="/admin/{{ $dato->id }}">
                            <i class="fa fa-eye"></i>
                    </td>
                    <td>
                        <a class='btn' href="/admin/{{ $dato->id }}/edit">
                            <i class="fa fa-pencil"></i>
                    </td>
                    <td>
                        <form action="/admin/{{ $dato->id }}" method="POST" >
                            @csrf
                            @method('delete')
                            <input type="submit"
                            onclick=" return confirm('¿ Esta segur@ de borrar esta publicación ?')" 
                            class="btn btn-danger btn-xs" value="borrar">               
                        </form>    
                    </td>
                </tr>
                @endforeach
        </table>
        {{$datos->render()}}
        </div>
    </div> 
    @endsection