@extends('layouts.app-admin')

@section('title', $post->name)


@section('content')
<header style="background: url('{{asset($post->file)}}'); margin-top: 0;
        min-height: 400px;
        background-size: cover;
        display: table;
        width: 100vw;
        background-position: center center;">
</header>
        <h1 class="txt-post"> Titulo: {{$post->name}}</h1>  
        <h2 class="txt-post"> Slug: {{$post->slug}}</h2>  
<div class="container">
<div class="row">
    <h3>Descripción</h3>
    <p> {{$post->excerpt}} </p>
</div>
<div class="row">
         @php
          echo  $post->body
         @endphp
    </div>
</div>
        
@endsection