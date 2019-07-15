@extends('layouts.app-pages')
@section('title', $post->name)


@section('content')
<header style="background: url('{{asset($post->file)}}'); margin-top: 0;
        min-height: 400px;
        background-size: cover;
        display: table;
        width: 100vw;
        background-position: center center;">
        <h1 class="txt-post">{{$post->name}}</h1>  
</header>

<div class="container">
<div class="row mt-4">
           
</div>
<div class="row mt-4 d-block">
     <p>@php
     echo  $post->body  
     @endphp</p>
</div>
<div class="row mt-4">
       <a  class="btn btn-primary mt-4 mb-4" href="http://localhost:8000/publicaciones" role="button"> Regresar</a>
    </div>
</div>

@endsection