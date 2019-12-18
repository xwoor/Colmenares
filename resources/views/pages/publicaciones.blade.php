@extends('layouts.app-pages')

@section('title', 'Publicaciones')


@section('content')
<div class="container ">

<section class="card">  
                <p>Publicaciones Recientes</p>
<div class="row">
        
        @foreach ($datos as $dato)    
        <div class="col-lg-4">
                        <div class="card-section">
                               <div class="card-section-image">
                                   <a  href="{{ route('post',$dato->slug)}} ">
                                     <img src="{{$dato->file}}" class="img-fluid">
                                   </a>
                                   </div>
                                   <div class="card-desc">
                                     <div class="title">
                                     <h3>{{$dato->name}}</h3>
                                     </div>
                                     <div class="card-info">
                                     <ul class="list-unstyle">
                                     <li><p>{{$dato->excerpt}} </p></li>
                                   
                                     </ul>
                                     </div>
                                     <a href="{{ route('post',$dato->slug)}} " class="btn btn-primary">Ver más</a>
                                   </div>
                            </div>
                      </div>        
        @endforeach
</div></section>
<div class="mb-4">

  {{ $datos->render() }}
</div>
</div> 
@endsection